<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('empresa_id');
            $table->timestamps();
            $table->date('data',);
            $table->string('nota_fiscal',);
            $table->string('quantidade',);
            $table->string('material',);
            $table->string('preco_unitario');
            $table->string('valor_total',);
            $table->string('ipi');
            $table->date('vencimento');
            $table->date('data_pagamento');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}