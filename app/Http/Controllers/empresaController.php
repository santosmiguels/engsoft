<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\empresa;
use App\cliente;

class empresaController extends Controller
{
    /*public function __construct()
   {
   //$this->middleware('auth');
   }
   public function index()
   {
   	return 'Exibe os dados do admin logado empresa';
   }
   public funcion login()
   {
   	return 'Exibe form login empresa';
   }
   public function postlogin()
   {
   	return 'Fazendo login empresa';
   }*/
   //public function __construct()
   //{
   //$this->middleware('auth');
   //}
   public function index()
   {
      return view('empresa.index');
   }
   public function registrarempresa()
   {
      return view ('empresa.formulario');
      //return view ('home');
   }
   public function login()
   {
      return view ('empresa.login');
      //return view ('home');
   }
   public function postlogin(Request $request)
   {
      //dd($request->all());
      $validator = validator($request->all(), [
         'email' => 'required|min:3|max:100',
         'password' => 'required|min:3|max:100'

         ]);
      $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];  
      //dd($validator->fails());
      //dd($request->all());
      if($validator->fails())
      {
         //echo "errado";
         return redirect('/adminemp/login')->withErrors($validator)->withInput();
      }
      if(Auth()->guard('empresa')->attempt($credentials))
      {
        //$empresas = empresa::get();
         //dd($empresa->all());
        //return redirect('/adminemp', ['empresa' => $empresas]);
        return redirect ('/adminemp');
         //$credentials = ['email' => $request->get('email'), 'password' => $request->get('password')]  
      }else{
         //echo "certo um";
         return redirect ('/adminemp/login')->withErrors(['errors'=>'Login inválido'])->withInput();
      }
   }
   public function logout()
   {
      auth()->guard('empresa')->logout();
      return redirect ('/adminemp/login');
      //return view ('cliente.login');
   }

   /*public function clientesalvar(Request $request)
    {
        
        //var_dump($request);
        
       $cliente = new cliente();

        $cliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente cadastrada com sucesso.');

        
          return view ('cliente.formulario'); 

    }*/
    protected function empresasalvar(Request $data)
    {
    
    //return cliente::create([
      
      $validator = validator($data->all(), [
         'email' => 'required|min:3|max:100',
         'password' => 'required|min:3|max:100'

         ]);
      $credentials = ['email' => $data->get('email'), 'password' => $data->get('password')];  


       $data = empresa::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'eResponsavel' => $data['eResponsavel'],
            'eCNPJ' => $data['eCNPJ'],
            'eTelefone1' => $data['eTelefone1'],
            'eTelefone2' => $data['eTelefone2'],
            'eEndereco' => $data['eEndereco'],
            'ePontoRef' => $data['ePontoRef'],
            'eMarkers' => $data['eMarkers'],
            'eFormaPagamento' => $data['eFormaPagamento'],
            'eFoto' => $data['eFoto'],
        ]);

    //return view ('cliente.formulario'); 
      if($validator->fails())
      {
         //echo "errado";
         return redirect('/adminemp/login')->withErrors($validator)->withInput();
      }
      if(Auth()->guard('empresa')->attempt($credentials))
      {
        // echo "errado um"; 
         return redirect ('/adminemp');
         //$credentials = ['email' => $request->get('email'), 'password' => $request->get('password')]  
      }else{
         //echo "certo um";
         return redirect ('/adminemp/login')->withErrors(['errors'=>'Login inválido'])->withInput();
      }
    }
    public function alteraempresa($id)
    {
        //echo "errado";
        //dd ($edit->all());
        //dd ($request->all);
        $empresa = empresa::findOrFail($id);
        return view('empresa.formulario', ['empresa' => $empresa]);
    }

     public function listaempresa() 
   {
    $empresas = empresa::get(); 
    return view('lista', ['empresas' => $empresas]);
    //return redirect ('lista');
   }

   public function empresaatualizar(Request $request, $id)
    {
      $dataForm = $request->all();
      $empresa = empresa::findOrFail($id);
      //$update = $cliente->update($dataForm);
      $update = $empresa->update([


      'name' => $dataForm['name'],
      'email' => $dataForm['email'],
      'password' => bcrypt($dataForm['password']),
      'eResponsavel' => $dataForm['eResponsavel'],
      'eCNPJ' => $dataForm['eCNPJ'],
      'eTelefone1' => $dataForm['eTelefone1'],
      'eTelefone2' => $dataForm['eTelefone2'],
      'eEndereco' => $dataForm['eEndereco'],
      'ePontoRef' => $dataForm['ePontoRef'],
      'eMarkers' => $dataForm['eMarkers'],
      'eFormaPagamento' => $dataForm['eFormaPagamento'],
      'eFoto' => $dataForm['eFoto'],


      ]);

      if ($update)
        //return redirect()->route('/admin/login');
      return view('empresa.formulario', ['empresa' => $empresa]);
      else
        return view('empresa.formulario', ['empresa' => $empresa]);
    
    }
   
}