<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistroPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('registro_personal', function (Blueprint $table) {
                $table->bigIncrements('id_registro_personal');
                $table->string('nombre',100);
                $table->string('telefono',10);
                $table->unsignedBigInteger('entrevista_id');
                $table->unsignedBigInteger('curso_id');
                $table->timestamps();

                $table->foreign('entrevista_id')->references('id_entrevista')->on('entrevistas');
                $table->foreign('curso_id')->references('id_curso')->on('curso');
                });
            }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro_personal');
    }
}
