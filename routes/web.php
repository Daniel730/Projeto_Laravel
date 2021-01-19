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
Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->middleware('auth');
Route::get('/empresas/create', [App\Http\Controllers\EmpresaController::class, 'create'])->middleware('auth');
Route::post('/empresas/store', [App\Http\Controllers\EmpresaController::class, 'store'])->middleware('auth');
Route::get('/empresas/{id}/edit', [App\Http\Controllers\EmpresaController::class, 'edit'])->middleware('auth');
Route::post('/empresas/update/{id}', [App\Http\Controllers\EmpresaController::class, 'update'])->middleware('auth');
Route::delete('/empresas/destroy/{id}', [App\Http\Controllers\EmpresaController::class, 'destroy'])->middleware('auth');


Route::get('/empresas/funcionarios/{id}', [App\Http\Controllers\FuncionarioController::class, 'index'])->middleware('auth');
Route::get('/empresas/{id}/funcionarios/create', [App\Http\Controllers\FuncionarioController::class, 'create'])->middleware('auth');
Route::post('/funcionarios/store', [App\Http\Controllers\FuncionarioController::class, 'store'])->middleware('auth');
Route::get('/funcionarios/{id_emp}/{id_fun}/edit', [App\Http\Controllers\FuncionarioController::class, 'edit'])->middleware('auth');
Route::post('/funcionarios/update/{id}', [App\Http\Controllers\FuncionarioController::class, 'update'])->middleware('auth');
Route::delete('/funcionarios/destroy/{id}', [App\Http\Controllers\FuncionarioController::class, 'destroy'])->middleware('auth');
Route::get('/funcionarios/show_funcionario/{id}/{id_emp}', [App\Http\Controllers\FuncionarioController::class, 'show_funcionario'])->middleware('auth');
// Route::post('/empresas/add', [App\Http\Controllers\EmpresaController::class, 'add'])->middleware('auth');

Route::get('/api/lista_empresas', [App\Http\Controllers\EmpresaController::class, 'list_empresas']);
Route::get("/api/lista_funcionario/{id_empresa}", [App\Http\Controllers\FuncionarioController::class, 'list_funcionarios']);
