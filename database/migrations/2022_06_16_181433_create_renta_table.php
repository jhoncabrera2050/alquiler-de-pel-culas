<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rentas',function(Blueprint $table){
            $table->increments('cod');
            $table->string('fecharegistro',40);
            $table->string('Fechadevolucion',40);
            $table->integer('ide')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->rememberToken();
            $table->timestamps();
            /// llave foranea
            
            $table->foreign('user_id')->references('id')
                ->on('users');
            $table->foreign('ide')->references('ide')
                ->on('peliculas');

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
        Schema::drop('rentas');
    }
};
