<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eNome');
            $table->string('eResponsavel');
            $table->string('eCNPJ')->unique();
            $table->string('eTelefone1');
            $table->string('eTelefone2');
            $table->string('eEmail');
            $table->string('eEndereco');
            $table->string('ePontoRef');
            $table->string('cMarkers');
            $table->string('eFormaPagamento');
            //$table->string('password');
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
        //
    }
}
