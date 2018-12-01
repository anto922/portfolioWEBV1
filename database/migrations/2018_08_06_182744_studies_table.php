<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('studies', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('id_province')->unsigned();
            $table->integer('id_city')->unsigned();
            $table->string('school',50);              
            $table->string('course',50);
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_province')->references('id')->on('province');
            $table->foreign('id_city')->references('id')->on('city');
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
        Schema::dropIfExists('studies');
    }
}
