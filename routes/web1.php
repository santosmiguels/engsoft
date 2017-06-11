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
Route::get('/sobre', 'sobreController@sobre')->name('sobre');
Route::get('/contato', 'sobreController@contato')->name('contato');
Route::get('/usuarios', 'usuariosController@usuarios')->name('usuarios');
Route::get('/empresas', 'empresasController@empresas')->name('empresas');
Route::get('/empresas/formulario', 'empresasController@formulario')->name('formularionova');
Route::get('/empresas/lista', 'empresasController@empresaslista')->name('empresaslista');
Route::get('/empresas/alterarempresas', 'empresasController@alterarempresas')->name('alterarempresas');
Route::get('/empresas/menu', 'empresasController@menu')->name('menu');
Route::post('/empresas/salvar', 'empresasController@salvar')->name('empresasalvar');
Route::post('/empresas/edit', 'empresasController@edit')->name('edit');
Route::any('/empresas/editar', 'empresasController@editar')->name('editar');