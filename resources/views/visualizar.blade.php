@extends('layouts.main')

@section('titulo', 'Visualizar Contato')

@section('content')

<div class="container" >
    <div class="row">
        <div class="col-md-6 col-md-offset-3" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fas fa-user-plus"></i> Visualizar Contato</h3>
                </div>
                <div class="panel-body">
                    @if(session('msg') || session('msgError'))
                        <div class="alert alert-{{ session('msg') ? "success" : "danger" }} alert-dismissible fade in"
                            role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{ session('msg') ? session('msg') : session('msgError') }}
                        </div>
                    @endif

                        <div class="form-group">
                            <label class="control-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome" value="{{ $contatos->nome ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="telefone" value="{{$contatos->telefone}}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input type="email" class="form-control" name="email" size="70" value="{{$contatos->email}}" disabled>
                        </div>
                        <div id="div-cep" class="form-group">
                            <label class="control-label">CEP
                            <input type="text" class="form-control" id="cep" name="cep" value="{{$contatos->cep}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Rua</label>
                            <input type="text" class="form-control" id="rua" name="rua" value="{{$contatos->rua}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Nº</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="{{$contatos->numero}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$contatos->complemento}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$contatos->bairro}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$contatos->cidade}}" disabled>
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Estado</label>
                            <input type="text" class="form-control" id="uf" name="estado" value="{{$contatos->estado}}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nota:</label>
                            <input name="nota" class="form-control" cols="150" rows="3" value="{{$contatos->nota}}"  rows="10" cols="50" disabled>
                        </div>
                         <a href="{{route('contatos-index') }}" class="btn btn-primary btn-block"> Voltar </a>
                         </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
