<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkillUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
			$table->string('description',50);
			$table->integer('level')->unsigned();
            $table->string('icon_skill')->default(null);
            $table->integer('row_order')->unsigned();
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('user');
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
          Schema::dropIfExists('skills');
    }
}
