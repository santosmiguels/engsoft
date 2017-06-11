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
                    <table class="table table-striped">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Avaliações</th>
                    <th>Menu de opções</th>

                    
                    
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->eNome}}</td>
                            <td>{{$empresa->eEndereco}}</td>
                            <td>{{$empresa->eTelefone1}}</td>
                            
                            

                        </tr>
                        <br>

                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
