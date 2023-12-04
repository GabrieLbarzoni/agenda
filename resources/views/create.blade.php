@extends('layouts.main')

@section('titulo', 'Adicionar Contato')

@section('content')

<div class="container" >
    <div class="row">
        <div class="col-md-6 col-md-offset-3" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fas fa-user-plus"></i> Cadastrar Contato</h3>
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
                    <form action="{{route('contatos-store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="telefone" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input type="email" class="form-control" name="email" size="70" value="">
                        </div>
                        <div id="div-cep" class="form-group">
                            <label class="control-label">CEP
                            <input type="text" class="form-control" id="cep" name="cep"  onblur="pesquisacep(this.value);">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Rua</label>
                            <input type="text" class="form-control" id="rua" name="rua" value="">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Nº</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="">
                        </div>
                        <div class="form-group div-endereco">
                            <label class="control-label">Estado</label>
                            <input type="text" class="form-control" id="uf" name="estado" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nota:</label>
                            <textarea name="nota" class="form-control" cols="150" rows="3" value=""></textarea>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg btn-block" id="btn-submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("js")
    <script src="{{asset('js/ViaCep.js')}}" type="text/javascript"></script>
@endsection
