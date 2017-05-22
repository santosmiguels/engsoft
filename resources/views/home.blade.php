@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema UnBSnacks
                    <li>
                    <a href="{{ url('/usuarios')}}">Área dos Clientes</a>
                    <a href="{{ url('/empresas')}}">Área das empresas</a>
                    </li>
                </div>

                <div class="panel-body">
                    Lanchonetes Cadastradas.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
