@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema UnBSnacks - Área do usuário</p>
                <ul>
                <p><li><a href="{{ url('admin/alteracliente')}}">Alterar usuário</a>
                    <a href="{{ url('/usuarios')}}">Remover usuário</a>
                    <a href="{{ url('/home')}}">Pag Inicial</a></p>
                 </ul>
                 <ul>
                <!--<li><a href="{{ url('admin/avaliaempresa')}}">Avaliar serviços das lanchonetes</a></p>
                    <a href="{{ url('/usuarios')}}">Remover a empresa</a>
                    <a href="{{ url('/home')}}">Pag Inicial</a></li>-->
                </ul> </p>
                 </div>   

                <div class="panel-body">                    
                    Avaliação dos serviços das Lanchonetes do Campus.<br>
                                  
                                     



                </div>
            </div>
        </div>
    </div>
</div>
@endsection