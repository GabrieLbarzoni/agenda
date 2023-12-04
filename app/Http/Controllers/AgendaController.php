<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class AgendaController extends Controller

{
    public function index(Request $request) {
        //  Extrai o termo de pesquisa da solicitação
        $search = $request->input('search');

        // Obtenha o ID do usuário logado
        $userId = auth()->id();

        // Consulta os contatos com base no termo de pesquisa e no ID do usuário
        if ($search) {
            $contatos = Contato::where(function ($query) use ($search, $userId) {
                $query->whereHas('user', function ($query) use ($userId) {
                    $query->where('id', $userId);
                });
                $query->where('nome', 'like', '%'.$search.'%');
                $query->orWhere('telefone', 'like', '%'.$search.'%');
            })->get();
        } else {
            $contatos = Contato::whereHas('user', function ($query) use ($userId) {
                $query->where('id', $userId);
            })->get();
        }

        // Retornar a visualização de contatos com os contatos buscados e o termo de pesquisa
        return view('index', ['contatos' => $contatos, 'search' => $search]);
    }



    public function create() {
        // Returna a visualização de criação de contato
        return view("create");
    }

    public function store(Request $request) {
        // Valida os dados da solicitação para os campos obrigatórios
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
        ]);

        // Cria um novo Contato
        $contato = new Contato();

        // Preencha a instância Contato com os dados da solicitação
        $contato->fill($request->all());

        // Defina o ID do usuário do contato
        $contato->user_id = auth()->id();

        // Salve o contato no banco de dados
        $contato->save();

        // Redireciona de volta para a página inicial com uma mensagem de sucesso
        return redirect('/')->with('msg', 'Contato salvo com sucesso!');
    }


    public function visualizar($id){
        // Encontra o contato pelo seu ID
        $contatos = Contato::where('id',$id)->first();

        // Retorna a visualização do contato visualizado
        return view('visualizar', ['contatos' => $contatos]);
    }

    public function edit($id){
        // Encontra o contato pelo seu ID
        $contatos = Contato::where('id',$id)->first();

        // Retorna a visualização de edição do contato
        return view('edit', ['contatos' => $contatos]);
    }

    public function update(Request $request, $id){
        // Valida os dados da solicitação para os campos obrigatórios
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
        ]);

        // Prepara os dados de atualização
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'nota' => $request->nota,
        ];

        // Atualiza o contato com os dados preparados
        Contato::where('id',$id)->update($data);

        // Redireciona de volta para a página inicial com uma mensagem de sucesso
        return redirect('/')->with('msg', 'Contato editado com sucesso!');
    }

    public function destroy($id) {
        // Exclui o contato pelo seu ID
        Contato::where('id',$id)->delete();

        // Redireciona de volta para a página inicial
        return redirect('/');
    }

    public function logout(Request $request)
    {
        // Invalida a sessão e redireciona para login
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function lista()
    {
        // Busca todos os contatos
        $contatos = Contato::all();

        // Retorna uma resposta JSON com os contatos
        return response()->json($contatos, 200, ['Content-Type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }
}
