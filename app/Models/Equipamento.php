<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    //use HasFactory;
    protected $fillable = [
        'serial','descricao','aquisicao','fl_disponivel','id_tipo_equipamento',
    ];
}
