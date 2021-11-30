<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAviaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aviao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('n_litros', 255);
            $table->string('kmsrealizados', 255);
            $table->string('fornecedores', 255);
            $table->string('imagem', 255)->nullable();
            $table->string('nome', 255);
            $table->string('total_poltronas', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aviao');
    }
}
