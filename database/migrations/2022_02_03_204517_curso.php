<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('curso', function (Blueprint $table) {
          $table->bigIncrements('id_curso');
          $table->string('nombre',100);
          $table->string('apellido_p',100);
          $table->string('apellido_m',100);
          $table->string('alias',100);
          $table->string('clave_agenda',100);
          $table->string('edad',20);
          $table->string('junta_informacion',20);
          $table->string('despacho',100);
          $table->string('telefono',10);
          $table->date('fecha');
          $table->unsignedBigInteger('entrevista_id');
          $table->unsignedBigInteger('agenda_id');
          $table->timestamps();

          $table->foreign('entrevista_id')->references('id_entrevista')->on('entrevistas');
          $table->foreign('agenda_id')->references('id_agenda')->on('agenda');


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
