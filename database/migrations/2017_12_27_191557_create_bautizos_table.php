<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBautizosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bautizos', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha')->nullable();
            $table->date('fecha_bautizo')->nullable();
            $table->date('fecha_nacimiento')->nullable();

            $table->integer('no_libro')->nullable();
            
            $table->string('parroquia')->nullable();
            $table->string('decanato')->nullable();
            $table->string('acta')->nullable();
            $table->string('nombre')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('padre')->nullable();
            $table->string('madre')->nullable();
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('parroco')->nullable();



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
        Schema::dropIfExists('bautizos');
    }
}
