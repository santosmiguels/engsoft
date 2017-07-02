<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('cTelefone');
            $table->string('cCPF', 11)->unique();
            $table->string('cNascimento');
            $table->string('cCadastro');
            $table->string('cUsuario');
            $table->string('cFoto');
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
        Schema::dropIfExists('clientes');
    }
}
