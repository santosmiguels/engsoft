<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('mCodigo')->unsigned();
            $table->integer('mCodigoEmpresa');
            $table->foreign('mCodigoEmpresa')->references('id')->on('empresas')->onDelete('cascade');
            $table->integer('mCodigoProduto');
            $table->foreign('mCodigoProduto')->references('pCodigo')->on('produtos')->onDelete('cascade');
            $table->float('mPreco', 10, 2);
            $table->binary('mFoto'); 
            $table->integer('mMediaAvaliacao');
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
        Schema::dropIfExists('menus');
    }
}
