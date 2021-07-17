<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TipoEquipamento;
use Illuminate\Http\Request;

class TipoEquipamentoController extends Controller
{
    public function index()
    {

        $registros = TipoEquipamento::all();
        //var_dump($registros);
        return view('admin.tipos-equipamentos.index', compact('registros'));

        //return view('admin.cursos.index');
    } //index

    public function adicionar()
    {
        return view('admin.tipos-equipamentos.adicionar');
    } //adicionar

    public function salvar(Request $req)
    {
        $dados = $req->all();

        TipoEquipamento::create($dados);

        return redirect()->route('admin.tipos-equipamentos');
    } //public function salvar(Request $req)

    public function editar($id)
    {
        $registro = TipoEquipamento::find($id);
        return view('admin.tipos-equipamentos.editar', compact('registro'));
    } //editar

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        TipoEquipamento::find($id)->update($dados);

        return redirect()->route('admin.tipos-equipamentos');
    } // atualizar
    public function deletar($id)
    {
        TipoEquipamento::find($id)->delete();
        return redirect()->route('admin.tipos-equipamentos');
    }
}
