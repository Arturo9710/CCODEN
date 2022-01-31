<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('alias',100);
            $table->string('nombre',100);
            $table->string('apellido_p',100);
            $table->string('apellido_m',100);
            $table->integer('telefono');
            $table->date('fecha_nacimiento');
            $table->string('genero',2);
            $table->string('foto',200);
            $table->rememberToken();
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
        Schema::drop('empleados');
    }
}
