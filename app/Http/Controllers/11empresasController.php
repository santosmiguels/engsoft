<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;
//use Illuminate\Support\Facades\Request;

class empresasController extends Controller
{
    public function empresas()
    {
        return view('empresas');
    }
    public function formulario()
    {
        return view('empresas.formulario');
    }
    public function salvar(Request $request)
    {
        //return view('empresas.salvar');
        //var_dump($request);
        
        $empresa = new empresa();

        $empresa = $empresa->create($request->all());

        \Session::flash('mensagem_sucesso', 'Empresa cadastrada com sucesso.');

        //return Redirect::to('empresas/salvar');
        //Redirect::to('empresas.salvar');
           return view ('empresas.formulario'); 

    }
    public function empresaslista()
    {
        $empresa = empresa::get();
        return view('empresas.lista', ['empresas' => $empresa]);
    }
    public function menu()
    {
        return view('empresas.menu');
    }
    public function alterarempresas($id)
    {
        //dd ($edit->all());
        //dd ($request->all);
        $empresa = empresa::findOrFail($id);
        return view('empresas.alterarempresas', ['empresa' => $empresa]);
    }

    public function editar(Request $id)
    {
        
        dd ($id->all());
        //dd($request->all());
        //return 'editando';
    }
    /*public function edit($eNome)
    {
        $emp = $this->empresa->find($eNome);//$eNome = "teste1";
        //echo $eNome;
        //dd ($eNome);
        $title = "Editando empresa: {$emp->name}";
        $emp1 = ['id', 'eNome', 'eEndereco'];
        //return "Editando o  cliente: {$eNome}"; // ('empresas.alterarempresas');
        return view ('empresas.alterarempresas', compact('title', 'emp', 'emp1'));
    }*/
    public function edit(Request $id)
    {
        
        //dd($eNome->all());
        //return "O nome da empresa e {$eNome}";
        //$id = $_POST["id"];
        //echo "O identificado da empres é: $id";
        $emp = empresa::findorFail($id);
        
        return view('empresas.formulario', ['emp' => $emp]); 
        
        //$empresa = $empresa->create($request->all());
        //$empresa = empresa::SELECT->all(WHERE(empresa.eNome == '$eNome' );
        //var_dump($emp);
        /*$sqlconsulta = "SELECT * from empresas WHERE eNome = '$eNome'";
        $consulta = mysqli_query($sqlconsulta) ;
        echo "O nome da empres é:: $eNome";
        while($exibe = mysqli_fetch_assoc($consulta)):
                                echo "<br><a href='#'>Editar</a>";
                                echo utf8_encode($exibe["eCnpj"]). " - ";
                                echo utf8_encode($exibe["eNome"]). " - "; 
                                echo utf8_encode($exibe["eEndereco"]). " - "; 
                                echo utf8_encode($exibe["eFone"]). " - " ; 
                                echo "<a href='#'>Remover</a> <br>";
                            endwhile;*/
        

        

        //dd ($empresa->all());


        //$dataform = ($eNome->all());
        //return "O nome da empresa e {$eNome}";

        ///$emp = $this->empresa->findorFail($dataform);
        //$empresa = empresa::findorFail($eNome);
        //var_dump($empresa);
        //return "O nome da empresa e {$request}";
        //var_dump($request);
        //return "O nome da empresa e {$eNome}";
        //$editempresa = empresa::get();//return "A empresa é: {$eNome}";//view ('empresas.edit');
        //return view ('empresas.edit', ['empresa' => $eNome]);
        //return view ('empresas.edit', ['eNome' => $eNome]);
        //dd ($eNome->all());
        //$dataform = $eNome->all();   
        //return view ('empresas.edit', ['emp' => $emp]); 
            
        //$emp = $this->empresas->find($eNome);
        //$editar = $empresas
        //return "O nome da empresa e {$eNome}";
    }
    public function lista() 
   {
    $empresas = empresa::get(); 
    return view('lista', ['empresas' => $empresas]);
    //return redirect ('lista');
   }
}