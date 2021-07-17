<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    //use HasFactory;
    protected $fillable = [
        'serial', 'descricao', 'aquisicao', 'fl_disponivel', 'id_tipo_equipamento',
    ];

    /*
    public function tiposEquipamentos()
    {
        //return $this->hasMany(Equipamento::class, 'id_tipo_equipamento');
        return $this->belongsTo('App\Models\TipoEquipamento');
    }
   
    public function tiposEquipamentos()
    {
        return $this->hasMany(TipoEquipamento::class, 'id');
    }
     */

}
