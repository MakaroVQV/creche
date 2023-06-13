<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FinancaController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\NotificadoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect('/login');
});


//------------------------------ Financa ------------------------------//
Route::get('/financas/Financa', [FinancaController::class, 'exibir'])
->name('Financa');



Route::get('/financas', [FinancaController::class, 'index'])
->name('financas.index');

//create
Route::get('/financas/create', [FinancaController::class, 'create'] )
->name('financas.create')->middleware('can:is_admin');

//Salvar
Route::post('/financas/create', [FinancaController::class, 'store'] )
->name('financas.store')->middleware('can:is_admin');

Route::get('/financas/{id}', [FinancaController::class, 'show'] )
->name('financas.show');
//edit
Route::get('/financas/{id}/edit', [FinancaController::class, 'edit'] )
->name('financas.edit')->middleware('can:is_admin');

//att
Route::put('/financas/{id}', [FinancaController::class, 'update'] )
->name('financas.update')->middleware('can:is_admin');

//Destroy
Route::delete('/financas/{id}', [FinancaController::class, 'destroy'] )
->name('financas.destroy')->middleware('can:is_admin');




//------------------------------ notificado ------------------------------//

Route::get('/notificado', [NotificadoController::class, 'index'])
->name('notificado');

//------------------------------ medico ------------------------------//

Route::get('medico', [MedicoController::class, 'index'])
->name('medico.index');
//------------------------------ perfil ------------------------------//
Route::get('/perfil', [PerfilController::class, 'index'])
->name('perfil')->middleware('auth');

Route::controller(FullCalenderController::class)->group(function(){
    Route::get('/usuarios/fullcalender', 'index')->middleware('can:is_admin');
    Route::post('fullcalenderAjax', 'ajax')->middleware('can:is_admin');
});





//------------------------------ Usuarios ------------------------------//

Route::get('/usuarios', [UserController::class, 'index'] )
->name('usuarios.index')->middleware('can:is_admin');

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

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('/calendario', [App\Http\Controllers\EventController::class, 'listar_eventos'])->name('listar_eventos');


Route::get('/teste', [App\Http\Controllers\UserController::class, 'teste']);





//------------------------------ Medico ------------------------------//

/*Route::get('/',function (){
    return view('Welcome');
});*/
Route::get('/saude',[MedicoController::class,'index2'])
->name('saude.index');

Route::get('/medico/index',[MedicoController::class,'index'])
->name('medico.index');

Route::get('/medico',[MedicoController::class,'index'])
->name('medico');

//create
Route::get('/medico/create', [MedicoController::class, 'create'] )
->name('medico.create')->middleware('can:is_admin');

//Salvar
Route::post('/medico/create', [MedicoController::class, 'store'] )
->name('medico.store')->middleware('can:is_admin');

Route::get('/medico/{id}', [MedicoController::class, 'show'] )
->name('medico.show')->middleware('can:is_admin');

//edit
Route::get('/medico/{id}/edit', [MedicoController::class, 'edit'] )
->name('medico.edit')->middleware('can:is_admin');

//att
Route::put('/medico/{id}', [MedicoController::class, 'update'] )
->name('medico.update')->middleware('can:is_admin');

//Destroy
Route::delete('/medico/{id}', [MedicoController::class, 'destroy'] )
->name('medico.destroy')->middleware('can:is_admin');

//------------------------------ Postagem ------------------------------//

//index
Route::get('postagem/', [PostagemController::class, 'index'])
->name('postagem.index')->middleware('can:is_admin');

//create
Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create')->middleware('can:is_admin');

//store
Route::post('postagem/create', [PostagemController::class, 'store'])
->name('postagem.store')->middleware('can:is_admin');

//show
Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show')->middleware('can:is_admin');

//edit
Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'] )
->name('postagem.edit')->middleware('can:is_admin');

//att
Route::put('/postagem/{id}', [PostagemController::class, 'update'] )
->name('postagem.update')->middleware('can:is_admin');

//Destroy
Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'] )
->name('postagem.destroy')->middleware('can:is_admin');