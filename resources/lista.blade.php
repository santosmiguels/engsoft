<!--@extends('layouts.app')

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
                <li><a href="{{ url('admin/avaliaempresa')}}">Avaliar serviços das lanchonetes</a></p>
                    <a href="{{ url('/usuarios')}}">Remover a empresa</a>
                    <a href="{{ url('/home')}}">Pag Inicial</a></li>
                </ul> </p>
                 </div>   

                <div class="panel-body">        -->            
                    Lanchonetes Cadastradas.<br>
                    <table class="table table-striped">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Avaliações</th>
                    <th>Menu de opções</th>
                    <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{ $empresa->name }}</td>
                            <td>{{ $empresa->name }}</td>
                            <td>{{ $empresa->name }}</td>
                            <td><button class="btn btn-sm">Avaliações</button></td>
                            <td><button class="btn btn-sm">Cardápio</td></button></td>
                        </tr>
                    @endforeach    
                    </tbody>    
                   

                   </table>
                   <!--




                </div>
            </div>
        </div>
    </div>
</div>
@endsection