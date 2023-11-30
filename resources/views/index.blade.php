@extends('layouts.main')

@section('title', 'Agenda')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 ">
            <h1 class="text-center" >Agenda</h1><br>
        </div>
        <div class="col-sm-4 "  >
            <a href="/create" class="btn btn-success">Novo Contato</a>
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3" >
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">telefone</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
                <tbody>
                @foreach($contatos as $contato)
                    <tr>
                        <th scope="row">{{$contato->id}}</th>
                        <td>{{$contato->nome}}</td>
                        <td>{{$contato->telefone}}</td>
                        <td>{{$contato->email}}</td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>

    @endsection
