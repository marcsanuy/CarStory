<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('coche_id')->unsigned();
            $table->string('accion')->nullable();
            $table->string('kilometros');
            $table->date('fecha');
            $table->string('precio');
            $table->string('descripcion')->nullable();
            $table->string('imagen');
            $table->foreign('coche_id')->references('id')->on('garages');
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
        Schema::dropIfExists('repairs');
    }
}
