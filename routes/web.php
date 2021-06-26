<?php

use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
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

/*
Route::get('/', function () {
return view('home');
});
 */

Route::get('/', [HomeController::class, 'index'])->name('site.home');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('site.login.entrar');
Route::get('/login/sair', [LoginController::class, 'sair'])->name('site.login.sair');

Route::group(['middleware' => 'auth'], function () {
//caminho na view, classe do controller que vai chamar, apelido do caminho
    Route::get('/admin/cursos', [CursoController::class, 'index'])->name('admin.cursos');

    Route::get('/admin/cursos/adicionar',
        [CursoController::class, 'adicionar'])->name('admin.cursos.adicionar');

    Route::post('/admin/cursos/salvar',
        [CursoController::class, 'salvar'])->name('admin.cursos.salvar');

    Route::get('/admin/cursos/editar/{id}',
        [CursoController::class, 'editar'])->name('admin.cursos.editar');

    Route::put('/admin/cursos/atualizar/{id}',
        [CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');

    Route::get('/admin/cursos/deletar/{id}',
        [CursoController::class, 'deletar'])->name('admin.cursos.deletar');

});
