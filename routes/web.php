<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\SiteController::class, 'redirect'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//BUSCAR ENDEREÇO PELO CEP
Route::post('/endereco/buscaCep/{cep}', [App\Http\Controllers\Admin\AdminController::class, 'buscaCep'])->name('buscaCep');

Route::name('painel.')
->prefix('painel')
->namespace('App\Http\Controllers\Painel')
->middleware(['auth'])
->group(function(){
	// Painel do Cliente
	Route::name('cliente.')
	->prefix('cliente')
	->middleware(['auth', 'can:cliente'])
	->group(function(){
		Route::get('/', 'ClienteController@index')->name('home');
		Route::put('/update/{id}', 'ClienteController@update')->name('update');
		Route::post('user/senha','ClienteController@updateSenha')->name('user.senha.update');
		Route::post('/agenda/store', 'ClienteController@agendaStore')->name('agendamento.store');
		Route::delete('/agenda/destroy/{id}', 'ClienteController@agendaDestroy')->name('agendamento.destroy');
		Route::put('/agenda/update/{id}', 'ClienteController@agendaUpdate')->name('agendamento.update');
	});
	// Painel do Instrutor
	Route::name('instrutor.')
	->prefix('instrutor')
	->middleware(['auth', 'can:instrutor'])
	->group(function(){
		Route::get('/', 'InstrutorController@index')->name('home');
		Route::put('/update/{id}', 'InstrutorController@update')->name('update');
		Route::post('user/senha','InstrutorController@updateSenha')->name('user.senha.update');
		Route::delete('/agenda/destroy/{id}', 'InstrutorController@agendaDestroy')->name('agendamento.destroy');
	});
});

Route::name('admin.')
->prefix('admin')
->namespace('App\Http\Controllers\Admin')
->middleware(['auth', 'can:administrador'])
->group(function(){
	Route::get('/', 'AdminController@index')->name('home');

	//ROTAS ADMINISTRADORES
	Route::resource('administrador', AdministradorController::class);
});

Auth::routes();
