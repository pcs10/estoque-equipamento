<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function index()
    {

        $registros = Equipamento::all();
        return view('admin.equipamentos.index', compact('registros'));

        //return view('admin.cursos.index');
    } //index

    public function adicionar()
    {
        return view('admin.equipamentos.adicionar');
    } //adicionar

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if (isset($dados['fl_disponivel'])) {
            $dados['fl_disponivel'] = 'sim';
        } else {
            $dados['fl_disponivel'] = 'nao';
        }

        Equipamento::create($dados);

        return redirect()->route('admin.equipamentos');
    } // salvar(Request $req)

    public function editar($id)
    {
        $registro = Equipamento::find($id);
        return view('admin.equipamentos.editar', compact('registro'));
    } //editar

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if (isset($dados['fl_disponivel'])) {
            $dados['fl_disponivel'] = 'sim';
        } else {
            $dados['fl_disponivel'] = 'nao';
        }
        Equipamento::find($id)->update($dados);

        return redirect()->route('admin.equipamentos');
    } // atualizar

    public function deletar($id)
    {
        Equipamento::find($id)->delete();
        return redirect()->route('admin.equipamentos');
    }

} //EquipamentoController
