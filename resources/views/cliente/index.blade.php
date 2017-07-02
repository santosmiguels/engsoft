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
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial do usuário</a>
                 
                

                <a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar serviços das lanchonetes</a>
                <a href="{{ url('admin/listacliente')}}" class="btn btn-primary">Lista de lanchonetes cadastradas</a></p>
                </ul>
                 </div>   

                <div class="panel-body">
                <img src="img/lanche3.jpg" width="700" alt="Imagem de um sanduiches." />
                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

