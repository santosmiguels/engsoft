<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('eResponsavel');
            $table->string('eCNPJ', 14)->unique();
            $table->string('eTelefone1');
            $table->string('eTelefone2');
            $table->string('eEndereco');
            $table->string('ePontoRef');
            $table->integer('eMarkers');
            $table->string('eFormaPagamento');
            $table->string('eFoto');
            $table->rememberToken();
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
        Schema::dropIfExists('empresas');
    }
}
