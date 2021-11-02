<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->text('endereco');
            $table->string('cnpj');
            $table->string('telefone');
            $table->string('cep');
            $table->string('email')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('prazo_pgto')->nullable();
            $table->string('banco')->nullable();
            $table->string('local_entrega')->nullable();
            $table->string('comprador')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresas');
    }
}