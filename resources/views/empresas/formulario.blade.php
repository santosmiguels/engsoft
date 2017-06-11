@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Sistema UnBSnacks<p>
                    <p>Área da empresa</p>
                    <li>
                    <!--<a href="{{ url('/empresas')}}">Área das empresas</a>-->
                    <a href="{{ url('/empresas/alterarempresas')}}">Alterar empresa</a>
                    <a href="{{ url('/empresas')}}">Remover empresa</a>
                    <a class="pull-rigth" href="{{ url('/home')}}">Pag Inicial</a>
                    </li>
                </div>

                <div class="panel-body">
                
                    @if (Session::has('mensagem_sucesso'))
                        <dir class="alert alert-success">{{Session::get('mensagem_sucesso')}}</dir>

                    @endif
                    @if(Request::is('*/edit'))
                    
                    
                            Entre com os dados a serem alterados.
                            
                        {!! Form::model($emp, ['method' => 'PATCH', 'class' => 'form', 'url' => 'empresas/editar']) !!}
                        {{$emp}}
                        testea111

                     
                        

                    @else
                        cadastrando
                        {!! Form::open(['class' => 'form', 'url' => 'empresas/salvar']) !!}
                    @endif
                          ALTERANDO
                          {{$emp}}   
                          <br>
                                     
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'eNome', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'nome']) !!}

                        {!! Form::label('responsavel', 'Responsável') !!}
                        {!! Form::input('text', 'eResponsavel', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Responsável pela empresa']) !!}

                        {!! Form::label('ecnpj', 'CNPJ') !!}
                        {!! Form::input('text', 'eCNPJ', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'CNPJ da empresa']) !!}

                        {!! Form::label('telefone', 'Telefone fixo') !!}
                        {!! Form::input('text', 'eTelefone1', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Telefone fixo da empresa']) !!}

                        {!! Form::label('telefone', 'Telefone celular') !!}
                        {!! Form::input('text', 'eTelefone2', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Telefone celular da empresa']) !!}

                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::input('text', 'eEmail', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        {!! Form::label('endereco', 'Endereço') !!}
                        {!! Form::input('text', 'eEndereco', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        {!! Form::label('ponto de referencias', 'Ponto de referência') !!}
                        {!! Form::input('text', 'ePontoRef', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Número']) !!}

                        {!! Form::label('markes', 'Markers') !!}
                        {!! Form::input('text', 'cMarkers', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Marcadores para futura configuração de mapeamento']) !!}

                        {!! Form::label('formadepagamento', 'Formas de pagamento') !!}
                        {!! Form::input('text', 'eFormaPagamento', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Formas de pagamento aceitos']) !!}<br>

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection