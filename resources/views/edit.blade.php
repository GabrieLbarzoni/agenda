@extends('layouts.main')

@section('titulo', 'Editar Contato')

@section('content')

<div class="container" >
    <div class="row">
        <div class="col-md-6 col-md-offset-3" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fas fa-user-plus"></i> Editar Contato</h3>
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
                    <form action="{{route('contatos-update', $contatos->find($contatos->id))}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="control-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome" value="{{ $contatos->nome ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="telefone" value="{{$contatos->telefone}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input type="email" class="form-control" name="email" size="70" value="{{$contatos->email}}">
                        </div>
                        <div id="div-cep" class="form-group">
                            <label class="control-label">CEP
                            <input type="text" class="form-control" id="cep" name="cep" value="{{$contatos->cep}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Rua</label>
                            <input type="text" class="form-control" id="rua" name="rua" value="{{$contatos->rua}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Nº</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="{{$contatos->numero}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$contatos->complemento}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$contatos->bairro}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$contatos->cidade}}">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Estado</label>
                            <input type="text" class="form-control" id="uf" name="estado" value="{{$contatos->estado}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nota:</label>
                            <input name="nota" class="form-control" cols="150" rows="3" value="{{$contatos->nota}}" type="text">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block" id="btn-submit"> Editar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("js")
    <script src="{{asset('js/App/ViaCep.js')}}" type="text/javascript"></script>
@endsection
