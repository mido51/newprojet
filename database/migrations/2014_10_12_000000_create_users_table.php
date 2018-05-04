<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nom');
          $table->string('prenom');
          $table->string('email')->unique();
          $table->string('telephone');
          $table->string('password');
          $table->integer('type_id')->unsigned();
          $table->timestamps();
        });

      Schema::table('users', function(Blueprint $table){
      $table->string('adresse')->after('telephone');
      $table->string('avatar')->default('newGuest.png')->after('adresse');
      $table->rememberToken();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
