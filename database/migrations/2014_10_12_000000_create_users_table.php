<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('tipoid' , 3);
            $table->string('numid');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('sexo' , 3)->nullable();
            $table->integer('id_empresa')->nullable();
            $table->integer('id_area')->nullable();
            $table->string('rol');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('estado')->default('AC');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('users')->insert( array('rol' => 'AD', 'tipoid' => 'CC','numid' => '1234', 'email' => 'admin@gmail.com','nombre' => 'Admin', 'password'=> Hash::make('20202020') ) );
        DB::table('users')->insert( array('rol' => 'AS', 'tipoid' => 'CC','numid' => '1234', 'email' => 'lerm201092@gmail.com','nombre' => 'Luis', 'password'=> Hash::make('20202020') ) );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
