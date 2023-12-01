<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class AgendaController extends Controller

{
    public function index(Request $request) {
        $search = $request->input('search');
        if ($search) {
            $contatos = Contato::where(function ($query) use ($search) {
                $query->where('nome', 'like', '%' . $search . '%');
                $query->orWhere('telefone', 'like', '%' . $search . '%');
            })->get();
        } else {
            $contatos = Contato::all();
        }

        return view('index', ['contatos' => $contatos, 'search' => $search]);
    }

    public function create() {
        return view("create");
    }

    public function store(Request $request) {
       Contato::create($request->all());
       return redirect('/');
    }

    public function edit($id){
        $contatos = Contato::where('id',$id)->first();
        return view('edit', ['contatos' => $contatos]);
        /*dd($contatos);*/
    }

    public function update(Request $request, $id){

        $data = [
           'nome' => $request->nome,
           'telefone' => $request->telefone,
           'email' => $request->email,
           'cep' => $request->cep,
           'rua' => $request->rua,
           'numero' => $request->umero,
           'complemento' => $request->cmplemento,
           'bairro' => $request->bairro,
           'cidade' => $request->cidade,
           'estado' => $request->estado,
           'nota' => $request->nota
        ];
        Contato::where('id',$id)->update($data);
        return redirect('/');
    }

    public function destroy($id) {
        Contato::where('id',$id)->delete();
        return redirect('/');
    }
}

/*
$contatos = new Contato;

        $contatos->nome = $request->nome;
        $contatos->telefone = $request->telefone;
        $contatos->email = $request->email;
        $contatos->cep = $request->cep;
        $contatos->rua = $request->rua;
        $contatos->numero = $request->numero;
        $contatos->complemento = $request->complemento;
        $contatos->bairro = $request->bairro;
        $contatos->cidade = $request->cidade;
        $contatos->estado = $request->estado;
        $contatos->nota = $request->nota;
        $contatos->updated_at = now();


        $contatos->save();

        return redirect('/login');*/
