@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema UnBSnacks - Área do usuário</p>
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
                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

