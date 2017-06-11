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
                    <!--<a href="{{ url('/empresas/novas')}}">Cadastrar nova empresa</a>-->
                    <a href="{{ url('/empresas/alterarempresas')}}">Alterar empresa</a>
                    <a href="{{ url('/empresas')}}">Remover empresa</a>
                    <a class="pull-rigth" href="{{ url('/home')}}">Pag Inicial</a>
                    </li>
                </div>

                <div class="panel-body">
                    Cadastrar nova empresa.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection