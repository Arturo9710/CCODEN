<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entrevistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('entrevistas', function (Blueprint $table) {
         $table->bigIncrements('id_entrevista');
         $table->string('nombre_agenda',100);
         $table->string('edad',100);
         $table->string('citado',100);
         $table->string('publicidad',100);
         $table->string('hora',100);
         $table->string('oficina',20);
         $table->string('status',20);
         $table->unsignedBigInteger('agenda_id');
         $table->timestamps();

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
        Schema::drop('entrevistas');
    }
}
