@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Sistema UnBSnacks - Área da empresa</p>
                    <li>
                    <a href="{{ url('/empresas/formulario')}}">Cadastrar nova empresa</a>
                    <!--<a href="{{ url('/empresas/alterarempresas')}}">Alterar empresa</a>-->
                    <a href="{{ url('/empresas/formulario')}}">Remover empresa</a>
                    <a class="pull-rigth" href="{{ url('/home')}}">Pag Inicial</a>
                    </li>
                </div>

                <div class="panel-body">
                    Alteração de dados da empresa.
                    <!--<form name="Listar empresa" method="get" action="edit"> 
                        <label>Nome</label>
                        <input type="text" name="eNome"><br>
                        <input type="submit" value="Enviar">
                        
                        
                        </form>-->


                        {!! Form::open(['url' => 'empresas/edit']) !!}

                        {!! Form::label('nome', 'Entre com id - Identificador a ser alterada') !!}
                        {!! Form::input('text', 'id', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'nome']) !!}

                        <!--{!! Form::label('responsavel', 'Responsável') !!}
                        {!! Form::input('text', 'eResponsavel', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Responsável pela empresa']) !!}

                        {!! Form::label('ecnpj', 'CNPJ') !!}
                        {!! Form::input('text', 'eCNPJ', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'CNPJ da empresa']) !!}

                        {!! Form::label('telefone', 'Telefone fixo') !!}
                        {!! Form::input('text', 'eTelefone1', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Telefone fixo da empresa']) !!}

                        {!! Form::label('telefone', 'Telefone celular') !!}
                        {!! Form::input('text', 'eTelefone2', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Telefone celular da empresa']) !!}

                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::input('text', 'eEmail', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        {!! Form::label('endereco', 'Endereço') !!}
                        {!! Form::input('text', 'eEndereco', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        {!! Form::label('ponto de referencias', 'Ponto de referência') !!}
                        {!! Form::input('text', 'ePontoRef', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Número']) !!}

                        {!! Form::label('markes', 'Markers') !!}
                        {!! Form::input('text', 'cMarkers', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Marcadores para futura configuração de mapeamento']) !!}

                        {!! Form::label('formadepagamento', 'Formas de pagamento') !!}
                        {!! Form::input('text', 'eFormaPagamento', '', ['class' => 'form-control', 'autofocus', 'placehold' => 'Formas de pagamento aceitos']) !!}--><br>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
