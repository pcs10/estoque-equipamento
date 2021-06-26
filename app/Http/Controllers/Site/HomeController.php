<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Curso;

class HomeController extends Controller
{
    public function index() 
    {
        $cursos = Curso::all(); //exibir todos os registros
        //$cursos = Curso::paginate(3); //exibir com paginação
        return view('home', compact('cursos'));
    }
}
