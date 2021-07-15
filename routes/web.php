<?php

use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\EquipamentoController;
use App\Http\Controllers\Admin\TipoEquipamentoController;
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

/*---------------------| AUTENTICAÇÃO DE CURSOS |-----------------------*/
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

/*---------------------| AUTENTICAÇÃO DE TIPOS EQUIPAMENTOS |-----------------------*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/tipos-equipamentos',
        [TipoEquipamentoController::class, 'index'])->name('admin.tipos-equipamentos');

    Route::get('/admin/tipos-equipamentos/adicionar',
        [TipoEquipamentoController::class, 'adicionar'])->name('admin.tipos-equipamentos.adicionar');

    Route::post('/admin/tipos-equipamentos/salvar',
        [TipoEquipamentoController::class, 'salvar'])->name('admin.tipos-equipamentos.salvar');

    Route::get('/admin/tipos-equipamentos/editar/{id}',
        [TipoEquipamentoController::class, 'editar'])->name('admin.tipos-equipamentos.editar');

    Route::put('/admin/tipos-equipamentos/atualizar/{id}',
        [TipoEquipamentoController::class, 'atualizar'])->name('admin.tipos-equipamentos.atualizar');

    Route::get('/admin/tipos-equipamentos/deletar/{id}',
        [TipoEquipamentoController::class, 'deletar'])->name('admin.tipos-equipamentos.deletar');

});

/*---------------------| AUTENTICAÇÃO DE EQUIPAMENTOS |-----------------------*/
Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/equipamentos',
        [EquipamentoController::class, 'index'])->name('admin.equipamentos');

    Route::get('/admin/equipamentos/adicionar',
        [EquipamentoController::class, 'adicionar'])->name('admin.equipamentos.adicionar');

    Route::post('/admin/equipamentos/salvar',
        [EquipamentoController::class, 'salvar'])->name('admin.equipamentos.salvar');

    Route::get('/admin/equipamentos/editar/{id}',
        [EquipamentoController::class, 'editar'])->name('admin.equipamentos.editar');

    Route::put('/admin/equipamentos/atualizar/{id}',
        [EquipamentoController::class, 'atualizar'])->name('admin.equipamentos.atualizar');

    Route::get('/admin/equipamentos/deletar/{id}',
        [EquipamentoController::class, 'deletar'])->name('admin.equipamentos.deletar');

});
