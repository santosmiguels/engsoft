<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->increments('aCodigo')->unsigned();
            $table->string('aUsuario');
            $table->integer('aCodigoMenu');
            $table->foreign('aCodigoMenu')->references('mCodigo')->on('menus')->onDelete("cascade");
            $table->string('aAvaliacao');
            $table->dateTime('aData');
            $table->string('aComentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
}
