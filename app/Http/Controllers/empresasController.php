<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;

class empresasController extends Controller
{
    public function empresas()
    {
        //return view('empresas');
        $empresa = empresa::get();
        return view('empresas', ['empresas' => $empresa]);
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
}
