@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3> Envie Sua Mensagem ou Sugestões.</h3></div>

                <div class="panel-body">
                    <form action="" metho="post">
                        <fieldset>
                                <legend> Formulário de Contato ou Sugestões.</legend>
                                <label for="nome">Seu Nome:  </label>
                                <input type="text" name="Nome"  /><br/>
                                <label for="email">Seu Email :  </label>
                                <input type="text" name="email" /><br/>
                                <label for="assunto"> Assunto: </label>
                                <input type="text" name="Assunto"   /> <br/>
                                <label for="mensagem"> Mensagem: </label> 
                                <textarea name="Mensagem" id="mensagem"> </textarea><br/>
                                <input type="submit" class="botao" name="Enviar" value="Enviar Mensagem &raquo;"    /> <br/>
                            </fieldset> 
                    </form>     
                     
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection