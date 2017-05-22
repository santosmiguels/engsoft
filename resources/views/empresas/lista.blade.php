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
                    <a href="{{ url('/empresas/formulario')}}">Cadastrar nova empresa</a>
                    <a href="{{ url('/empresas')}}">Alterar empresa</a>
                    <a href="{{ url('/empresas')}}">Remover empresa</a>
                    <a class="pull-rigth" href="{{ url('/home')}}">Pag Inicial</a>
                    </li>
                </div>

                <div class="panel-body">
                    Lanchonetes Cadastradas.<br>
                    <table class="table table-striped">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    
                    
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