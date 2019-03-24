<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaBeer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('beer',
            function (Blueprint $tabela) {
                $tabela->increments('id');
                $tabela->string('nome');
                $tabela->string('marca');
                $tabela->integer('preco');
                $tabela->integer('quantidade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('beer');
    }
}
