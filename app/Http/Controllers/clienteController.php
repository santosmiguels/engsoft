<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\cliente;
use App\empresa;

class clienteController extends Controller
{
   public function __construct() 
   {
    //$this->middleware('auth');
   }
   public function index() 
   {
    return view('cliente.index');
   }
   public function registrarcliente()
   {
      return view ('cliente.formulario');
   }
   public function login()
   {
   	return view ('cliente.login');
   }
   public function postlogin(Request $request)
   {
      $validator = validator($request->all(), [
         'email' => 'required|min:3|max:100',
         'password' => 'required|min:3|max:100'

         ]);
      $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];  
      if($validator->fails())
      {
         return redirect('/admin/login')->withErrors($validator)->withInput();
      }
      if(Auth()->guard('cliente')->attempt($credentials))
      {
        return redirect ('/admin');
      }else{
         return redirect ('/admin/login')->withErrors(['errors'=>'Login inválido'])->withInput();
      }
   }
   public function logout()
   {
      auth()->guard('cliente')->logout();
      return redirect ('/admin/login');

   }
    protected function clientesalvar(Request $data)
    {
      $validator = validator($data->all(), [
         'email' => 'required|min:3|max:100',
         'password' => 'required|min:3|max:100'

         ]);
      $credentials = ['email' => $data->get('email'), 'password' => $data->get('password')];  


       $data = cliente::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cTelefone' => $data['cTelefone'],
            'cCPF' => $data['cCPF'],
            'cNascimento' => $data['cNascimento'],
            'cCadastro' => $data['cCadastro'],
            'cUsuario' => $data['cUsuario'],
            'cFoto' => $data['cFoto'],
    



        ]);

      if($validator->fails())
      {
         return redirect('/admin/login')->withErrors($validator)->withInput();
      }
      if(Auth()->guard('cliente')->attempt($credentials))
      {
         return redirect ('/admin');
         //$credentials = ['email' => $request->get('email'), 'password' => $request->get('password')]  
      }else{
         //echo "certo um";
         return redirect ('/admin/login')->withErrors(['errors'=>'Login inválido'])->withInput();
      }
    }
    public function alteracliente($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('cliente.formulario', ['cliente' => $cliente]);
 
    }
    public function avaliaempresa()
    {
        return view('cliente.avaliaempresa');
    }
     public function listacliente() 
   {
    $empresas = empresa::get(); 
    return view('lista', ['empresas' => $empresas]);
    //return redirect ('lista');
   }
   public function clienteatualizar(Request $request, $id)
    {
      $dataForm = $request->all();
      $cliente = cliente::findOrFail($id);
      //$update = $cliente->update($dataForm);
      $update = $cliente->update([


      'name' => $dataForm['name'],
      'email' => $dataForm['email'],
      'password' => bcrypt($dataForm['password']),
      'cTelefone' => $dataForm['cTelefone'],
      'cCPF' => $dataForm['cCPF'],
      'cNascimento' => $dataForm['cNascimento'],
      'cCadastro' => $dataForm['cCadastro'],
      'cUsuario' => $dataForm['cUsuario'],
      'cFoto' => $dataForm['cFoto'],


      ]);

      if ($update)
        //return redirect()->route('/admin/login');
      return view('cliente.formulario', ['cliente' => $cliente]);
      else
        return view('cliente.formulario', ['cliente' => $cliente]);
    
    }
   
   
}