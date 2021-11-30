<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->string('foto', 255)->nullable();
            $table->enum('perfil',['cliente', 'admin'] )->default('cliente');
            $table->string('rua', 255)->nullable();
            $table->string('codigo_postal', 255)->nullable();
            $table->string('morada', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->dropColumn('foto');
            $table->dropColumn('perfil');
            $table->dropColumn('rua');
            $table->dropColumn('codigo_postal');
            $table->dropColumn('morada');
        });
    }
}
