<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('folio')->nullable();
            $table->date('fecha')->nullable();
            $table->date('fecha_bautizo')->nullable();
            $table->string('parroco')->nullable();
            $table->string('Apaterno')->nullable();
            $table->string('Amaterno')->nullable();
            $table->string('nombres')->nullable();
            $table->string('padre')->nullable();
            $table->string('madre')->nullable();
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('lugar_bautizo')->nullable();
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
        Schema::dropIfExists('comunions');
    }
}
