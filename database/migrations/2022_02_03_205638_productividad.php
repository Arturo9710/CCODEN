<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productividad', function (Blueprint $table) {
         $table->bigIncrements('id_productividad');
         $table->string('nombre',100);
         $table->string('apellido_p',100);
         $table->string('apellido_m',100);
         $table->string('contesto',100);
         $table->string('llego',100);
         $table->string('porcentaje',100);
         $table->string('efectividad',100);
         $table->unsignedBigInteger('entrevista_id');
         $table->timestamps();

         $table->foreign('entrevista_id')->references('id_entrevista')->on('entrevistas');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('productividad');
    }
}
