<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('roles');
        Schema::create('roles', function (Blueprint $table) {
            $table->string('id', 2);
            $table->string('descripcion');
            $table->string('estado', 2)->default('AC');
            $table->timestamps();
        });

        DB::table('roles')->insert( array('id'=>'AD', 'descripcion' => 'Administrador', 'estado'=>'AC') );
        DB::table('roles')->insert( array('id'=>'AS', 'descripcion' => 'Asesor',        'estado'=>'AC') );
        DB::table('roles')->insert( array('id'=>'ME', 'descripcion' => 'Medico',        'estado'=>'AC') );
        DB::table('roles')->insert( array('id'=>'PA', 'descripcion' => 'Paciente',      'estado'=>'AC') ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
