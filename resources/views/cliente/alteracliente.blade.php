@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Sistema UnBSnacks - Alteração de dados do cliente</p>
                    <li>
                    <a href="{{ url('admin/alteracliente')}}">Alterar dados do Cliente</a>
                    <!--<a href="{{ url('/empresas/alterarempresas')}}">Alterar empresa</a>-->
                    <a href="{{ url('admin/alteracliente')}}">Remover cliente</a>
                    <a class="pull-rigth" href="{{ url('/home')}}">Pag Inicial</a>
                    </li>

                    <ul>
                <p><a href="admin/{{Auth::user()->id}}/alteracliente" class="btn btn-primary">Alterar usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Remover usuário (pendente)</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial</a></p>
                 </ul>
                 <ul>
                <a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar serviços das lanchonetes</a>
                <a href="{{ url('admin/listacliente')}}" class="btn btn-primary">Lista de lanchonetes cadastradas</a>
                </p>
                    <!--<a href="{{ url('/usuarios')}}">Remover a empresa</a>
                    <a href="{{ url('/home')}}">Pag Inicial</a></li>-->
                </ul> </p>
                </div>

                <div class="panel-body">
                    Alterando 
                                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
