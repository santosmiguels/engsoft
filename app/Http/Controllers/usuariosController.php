<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;

class usuariosController extends Controller
{
    public function usuarios()
    {
        //return view('usuarios');
        $empresa = empresa::get();
        return view('usuarios', ['empresas' => $empresa]);
    }
}
