<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('peliculas',function(Blueprint $table){
            $table->increments('ide');
            $table->string('nombre',40);
            $table->string('genero',40);
            $table->string('año',40);
            $table->string('director',40);
            $table->string('artista',40);
            $table->string('descripcion',200);
            $table->string('foto',200);
            $table->decimal('precio',6,2);
            $table->rememberToken();
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
        //
        Schema::drop('peliculas');
    }
};
