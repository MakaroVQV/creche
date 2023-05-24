<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FinancaController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\NotificadoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/usuarios', [UserController::class, 'index'] )
->name('usuarios.index')->middleware('can:is_admin');

//------------------------------ Financa ------------------------------//

Route::get('/financa', [FinancaController::class, 'index'])
->name('financa');

Route::get('/financa#pendentes', [FinancaController::class, 'index'])
->name('financa');

//------------------------------ notificado ------------------------------//

Route::get('/notificado', [NotificadoController::class, 'index'])
->name('notificado');

//------------------------------ medico ------------------------------//

Route::get('/medico', [MedicoController::class, 'index'])

->name('medico');
//------------------------------ perfil ------------------------------//
Route::get('/perfil', [PerfilController::class, 'index'])
->name('perfil');

//------------------------------ Calendario ------------------------------//
Route::controller(FullCalenderController::class)->group(function(){
    Route::get('fullcalender', 'index');
    Route::post('fullcalenderAjax', 'ajax');
});



//------------------------------ Usuarios ------------------------------//

//create
Route::get('/usuarios/create', [UserController::class, 'create'] )
->name('usuarios.create')->middleware('can:is_admin');

//Salvar
Route::post('/usuarios/create', [UserController::class, 'store'] )
->name('usuarios.store')->middleware('can:is_admin');

Route::get('/usuarios/{id}', [UserController::class, 'show'] )
->name('usuarios.show')->middleware('can:is_admin');

//edit
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'] )
->name('usuarios.edit')->middleware('can:is_admin');

//att
Route::put('/usuarios/{id}', [UserController::class, 'update'] )
->name('usuarios.update')->middleware('can:is_admin');

//Destroy
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'] )
->name('usuarios.destroy')->middleware('can:is_admin');



/*Route::get('/',function (){
    return view('Welcome');
});*/

//Upload DOCS
Route::get('/upload/docs', [UploadController::class,'form_docs'])->name('form_docs');
Route::post('/upload/docs', [UploadController::class,'upload_docs'])->name('upload_docs');


//AdminLTE

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);