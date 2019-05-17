<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('version');
            $table->date('fecha_matriculacion');
            $table->string('matricula');
            $table->string('distintivo_medioambiental_dgt');
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('garages');
    }
}
