<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('serial');
            $table->string('descricao');
            $table->string('aquisicao');
            $table->enum('fl_disponivel', ['sim', 'nao'])->default('nao');
            //relacao
            $table->bigInteger('id_tipo_equipamento')->unsigned();
            $table->timestamps();
            //criar a relação
            $table->foreign('id_tipo_equipamento')->references('id')->on('tipo_equipamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipamentos');
    }
}
