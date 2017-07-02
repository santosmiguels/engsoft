@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro do cliente
                        <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial do usuário</a>
                </div>
                <div class="panel-body">


                @if(Request::is('*/alteracliente'))                    
                    
                    {{'ALTERAÇÃO DE DADOS'}} 
                    
                     <form class="form-horizontal" role="form" method="PATCH" action="{{ url('admin/'.$cliente->id) }}">
                @else
                    {{'NOVO CADASTRO'}} 
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('clientesalvar') }}">


                @endif                     
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $cliente->name or old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $cliente->email or old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cTelefone') ? ' has-error' : '' }}">
                            <label for="cTelefone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input id="cTelefone" type="text" class="form-control" name="cTelefone" value="{{ $cliente->cTelefone or old('cTelefone') }}" required autofocus>

                                @if ($errors->has('cTelefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cTelefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cCPF') ? ' has-error' : '' }}">
                            <label for="cCPF" class="col-md-4 control-label">CPF</label>

                            <div class="col-md-6">
                                <input id="cCPF" type="text" class="form-control" name="cCPF" value="{{ $cliente->cCPF or old('cCPF') }}" required autofocus>

                                @if ($errors->has('cCPF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cCPF') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cNascimento') ? ' has-error' : '' }}">
                            <label for="cNascimento" class="col-md-4 control-label">Data de Nascimento</label>

                            <div class="col-md-6">
                                <input id="cNascimento" type="date" class="form-control" name="cNascimento" value="{{ $cliente->cNascimento or old('cNascimento') }}" required autofocus>

                                @if ($errors->has('cNascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cNascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cCadastro') ? ' has-error' : '' }}">
                            <label for="cCadastro" class="col-md-4 control-label">Data do Cadastro</label>

                            <div class="col-md-6">
                                <input id="cCadastro" type="date" class="form-control" name="cCadastro" value="{{ $cliente->cCadastro or old('cCadastro') }}" required autofocus>

                                @if ($errors->has('cCadastro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cCadastro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cUsuario') ? ' has-error' : '' }}">
                            <label for="cUsuario" class="col-md-4 control-label">Nome de Usuário</label>

                            <div class="col-md-6">
                                <input id="cUsuario" type="text" class="form-control" name="cUsuario" value="{{ $cliente->cUsuario or old('cUsuario') }}" required autofocus>

                                @if ($errors->has('cUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cFoto') ? ' has-error' : '' }}">
                            <label for="cFoto" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="cFoto" type="text" class="form-control" name="cFoto" value="{{ $cliente->cFoto or old('cFoto') }}" required autofocus>

                                @if ($errors->has('cFoto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cFoto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
