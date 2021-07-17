<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEquipamento extends Model
{
    //use HasFactory;
    protected $fillable = [
        'nome',
    ];
    
    /**
     * Função de relacionamento entre as tabelas.
     * Aqui a tabela é de 1 para N, sendo: [TipoEquipamento 1 e Equipamento N]
     * Assim joguei a pk de TipoEquipamento pra dentro de Equipamento como fk
     * 
     * Nome da função coloquei no plural por ser de UM para MUITOS
     * 
     */

    public function equipamentos()
    {
        return $this->hasMany(Equipamento::class, 'id_tipo_equipamento');
    }

    

}
