<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       	Schema::defaultStringLength(191);
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
			$table->char('age',2);
			$table->string('telephone',9);
			$table->string('photo')->default(null);
            $table->string('email')->unique();
			$table->boolean('is_admin')->default(false);
            $table->string('password');
            $table->binary('about_me');
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
         Schema::dropIfExists('user');
    }
}
