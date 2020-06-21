<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('empresas');
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->unique();
            $table->string('nombre');
            $table->integer('id_area')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('contacto')->nullable();
            $table->string('estado', 2)->default('AC');
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
