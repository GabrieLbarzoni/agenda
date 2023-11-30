<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class AgendaController extends Controller

{
    public function index() {

        $contatos = Contato::all();
        return view('index', ['contatos' => $contatos]);
    }

    public function create() {
        return view("create");
    }

    public function store(Request $request) {

        Contato::create($request->all());

        return redirect('/login');
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

        $contatos->save(); */
