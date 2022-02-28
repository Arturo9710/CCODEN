<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('agenda', function (Blueprint $table) {
            $table->bigIncrements('id_agenda');
            $table->string('seguimiento',100);
            $table->string('alias',100);
            $table->string('nombre',100);
            $table->string('apellido_p',100);
            $table->string('apellido_m',100);
            $table->string('telefono',20);
            
            $table->datetime('hora');
            $table->date('fecha');
            $table->string('publicidad',100);
            $table->string('contesto',100);
            $table->unsignedBigInteger('empleado_id');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id_empleado')->on('empleados_models');

           
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agenda');
    }
}
