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
        Schema::create('empleados_models', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('alias',100);
            $table->string('nombre',100);
            $table->string('apellido_p',100);
            $table->string('apellido_m',100);
            $table->string('telefono',10);
            $table->date('fecha_nacimiento');
            $table->string('genero',20);
            $table->string('foto',200);
            $table->timestamps();
            $table->rememberToken();
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
