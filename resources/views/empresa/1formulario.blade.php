teste
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
                            
                        {!! Form::model($emp, ['method' => 'PATCH', 'class' => 'form', 'url' => 'admin/salvarcliente']) !!}
                        
                        testea111

                     
                        

                    @else
                        cadastrando
                        {!! Form::open(['class' => 'form', 'url' => 'admin/clientesalvar']) !!}
                    @endif
                          ALTERANDO
                             
                          <br>
                                     
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'nome']) !!}
                        
                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::input('text', 'email', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        {!! Form::label('senha', 'Senha') !!}
                        {!! Form::input('text', 'password', null, ['class' => 'form-control', 'autofocus', 'placehold' => 'Endereço da empresa']) !!}

                        <br>

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection