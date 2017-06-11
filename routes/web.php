<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'cliente'], function (){
	Route::get('/admin', 'clienteController@index');
	Route::get('/admin/login', 'clienteController@login');
	Route::post('/admin/login', 'clienteController@postlogin');
	Route::get('/admin/logout', 'clienteController@logout');
	Route::get('/admin/registrarcliente', 'clienteController@registrarcliente');
	Route::get('/admin/validador', 'clienteController@validador');
	Route::any('/admin/clientesalvar', 'clienteController@clientesalvar')->name('clientesalvar');


	Route::group(['middleware' => 'auth:cliente'], function (){
	Route::get('/admin', 'clienteController@index');
	Route::get('/admin/{cliente}/alteracliente', 'clienteController@alteracliente')->name('alteracliente');
	Route::get('/admin/avaliaempresa', 'clienteController@avaliaempresa')->name('avaliaempresa');
	Route::get('/admin/listacliente', 'clienteController@listacliente')->name('listacliente');
	Route::any('admin/{cliente}', 'clienteController@clienteatualizar')->name('clienteatualizar');
	Route::get('/admin/avaliarempresa', 'clienteController@avaliarempresa')->name('avaliarempresa');
	//Route::get('/admin/login', 'clienteController@login');
	//Route::post('/admin/login', 'clienteController@postlogin');
	//Route::get('/admin/logout', 'clienteController@logout');
	});
});

Route::group(['middleware' => 'empresa'], function (){
	Route::get('/adminemp', 'empresaController@index');
	Route::get('/adminemp/login', 'empresaController@login');
	Route::post('/adminemp/login', 'empresaController@postlogin');
	Route::get('/adminemp/logout', 'empresaController@logout');
	Route::any('/adminemp/empresasalvar', 'empresaController@empresasalvar')->name('empresasalvar');
	//Route::any('/adminemp/empresasalvar', 'empresaController@empresasalvar')->name('empresasalvar');
	Route::get('/adminemp/registrarempresa', 'empresaController@registrarempresa');
	Route::get('/adminemp/validador', 'empresaController@validador');

	Route::group(['middleware' => 'auth:empresa'], function (){


	Route::get('/adminemp', 'empresaController@index');
	Route::get('/adminemp/{empresa}/alteraempresa', 'empresaController@alteraempresa')->name('alteraempresa');
	Route::get('/adminemp/listaempresa', 'empresaController@listaempresa')->name('listaempresa');
	Route::any('adminemp/{empresa}', 'empresaController@empresaatualizar')->name('empresaatualizar');
	Route::get('/adminemp/avaliarempresa', 'empresaController@avaliarempresa')->name('avaliarempresa');
	//Route::get('/admin/login', 'clienteController@login');
	//Route::post('/admin/login', 'clienteController@postlogin');
	//Route::get('/admin/logout', 'clienteController@logout');
	

	});
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sobre', 'sobreController@sobre')->name('sobre');
Route::get('/contato', 'sobreController@contato')->name('contato');
//Route::get('/usuarios', 'usuariosController@usuarios')->name('usuarios');
//Route::get('/empresas', 'empresasController@empresas')->name('empresas');
//Route::get('/empresas/lista', 'empresasController@empresaslista')->name('empresaslista');
//Route::get('/empresas/alterarempresas', 'empresasController@alterarempresas')->name('alterarempresas');
//Route::get('/empresas/menu', 'empresasController@menu')->name('menu');
//Route::post('/empresas/salvar', 'empresasController@salvar')->name('empresasalvar');
//Route::post('/empresas/edit', 'empresasController@edit')->name('edit');
//Route::any('/empresas/editar', 'empresasController@editar')->name('editar');
//Route::get('/admin/registrarcliente', 'clienteController@registrarcliente');
//Route::get('/admin/validador', 'clienteController@validador');
//Route::any('/admin/clientesalvar', 'clienteController@clientesalvar')->name('clientesalvar');
//Route::get('/adminemp/registrarempresa', 'empresaController@registrarempresa');
//Route::get('/adminemp/validador', 'empresaController@validador');
//Route::any('/adminemp/empresasalvar', 'empresaController@empresasalvar')->name('empresasalvar');
//Route::get('/adminemp/alteraempresa', 'empresaController@alteraempresa')->name('alteraempresa');
//Route::get('/admin/registrarcliente', 'clienteController@registrarcliente');

//Route::get('/admin/lista', 'listaController@lista')->name('lista');
//Route::get('/admin/lista', 'clienteController@lista')->name('lista');
//Route::patch('/admin/{cliente}', 'clienteController@clienteatualizar')->name('clienteatualizar');