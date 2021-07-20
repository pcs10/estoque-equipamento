<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipamento;
use App\Models\TipoEquipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipamentoController extends Controller
{
    public function index()
    {
        $registros = DB::table('equipamentos')->orderBy('equipamentos.id')
            ->join('tipo_equipamentos', function ($join) {
                $join->on('tipo_equipamentos.id', '=', 'equipamentos.id_tipo_equipamento')
                    ->where('equipamentos.id_tipo_equipamento', '>', 0);
            })
            ->select('equipamentos.id', 'equipamentos.serial', 'equipamentos.descricao',
                'equipamentos.aquisicao', 'equipamentos.fl_disponivel',
                'equipamentos.id_tipo_equipamento',
                'tipo_equipamentos.nome')
            ->get();

        //$users = DB::table('tipo_equipamentos')->get();
        /*
        foreach ($registros as $registro) {
        echo $registro->id;
        echo ' ';
        echo $registro->serial;
        echo ' ';
        echo $registro->nome;
        echo '<br>';
        }
         */

        // $registros = Equipamento::all();
        // var_dump($registros);
        // $registros2 = TipoEquipamento::all();
        //$registros = Equipamento::with('equipamentos')->find(1);
        return view('admin.equipamentos.index', compact('registros'));
        //return view('admin.equipamentos.index', compact('registros2'));
        // echo '<h3>'.$registros->nome.'</h3>';

        //return view('admin.cursos.index');
    } //index

    public function adicionar()
    {

        $registros = TipoEquipamento::all();
      //  $registro = Equipamento::all();

      //  $registro = Equipamento::all();
       // $registrosTe = TipoEquipamento::all();
/*
        $registrosTe = DB::table('equipamentos')->orderBy('equipamentos.id')
            ->join('tipo_equipamentos', function ($join) {
                $join->on('tipo_equipamentos.id', '=', 'equipamentos.id_tipo_equipamento')
                    ->where('equipamentos.id_tipo_equipamento', '>', 0);
            })
            ->select('equipamentos.id', 'equipamentos.serial', 'equipamentos.descricao',
                'equipamentos.aquisicao', 'equipamentos.fl_disponivel',
                'equipamentos.id_tipo_equipamento',
                'tipo_equipamentos.nome', 'tipo_equipamentos.id')
            ->get();
            */

        /*
        foreach ($registros as $key => $val){
        echo '<br>';
        echo $key;
        echo '<br>';
        echo $val->nome;
        echo $val->id;
        }
        */
        
        return view('admin.equipamentos.adicionar', compact('registros'));
        //return view('admin.equipamentos.adicionar');
    } //adicionar

    public function salvar(Request $req)
    {
        $dados = $req->all();

        //echo $dados['nome'];
        $dados['id_tipo_equipamento'] = $dados['nome'];

        //echo  $dados['id_tipo_equipamento'];

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
        $registrosTe = TipoEquipamento::all();
        return view('admin.equipamentos.editar', compact('registro', 'registrosTe'));
    } //editar

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        $dados['id_tipo_equipamento'] = $dados['nome'];

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
