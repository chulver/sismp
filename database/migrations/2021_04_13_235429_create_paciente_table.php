<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            //$table->increments('id');
            $table->integer('ci')->nullable();
            $table->string('apaterno',50)->nullable();
            $table->string('amaterno',50)->nullable();
            $table->string('nombre',60);
            $table->string('sexo',10);
            $table->date('fechanacimiento');
            $table->string('domicilio')->nullable();
            $table->integer('telefonodomicilio')->nullable();
            $table->integer('telefonocelular')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('paciente');
    }
}
