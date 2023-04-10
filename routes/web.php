<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', [UserController::class, 'index'] )
->name('usuarios.index');




//create
Route::get('/usuarios/create', [UserController::class, 'create'] )
->name('usuarios.create');


//Salvar
Route::post('/usuarios/create', [UserController::class, 'store'] )
->name('usuarios.store');

Route::get('/usuarios/{id}', [UserController::class, 'show'] )
->name('usuarios.show');

//edit
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'] )
->name('usuarios.edit');

//att
Route::put('/usuarios/{id}', [UserController::class, 'update'] )
->name('usuarios.update');

//Destroy
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'] )
->name('usuarios.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
