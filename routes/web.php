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

Route::name('admin.')
->prefix('admin')
->namespace('App\Http\Controllers\Admin')
->middleware(['auth', 'can:administrador'])
->group(function(){
	Route::get('/', 'AdminController@index')->name('home');

	//ROTAS ADMINISTRADORES
	Route::resource('administrador', AdministradorController::class);

    //ROTAS BUFFET
    Route::resource('buffet', BuffetController::class);

    //ROTAS AGENDA
    Route::resource('agenda', AgendaController::class);

    //ROTAS RESERVA
    Route::resource('reserva', ReservaController::class);

    //ROTAS RECOMENDACAO
    Route::resource('recomendacao', RecomendacaoController::class);

    //ROTAS PESQUISA
    Route::resource('pesquisa', PesquisaController::class);
});

Auth::routes();
