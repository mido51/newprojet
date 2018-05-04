<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('titre_bien');
            $table->integer('prix');
            $table->string('surface');
            $table->string('nombre_piece');
            $table->string('nombre_bain');
            $table->string('garages');
            $table->string('description');
            $table->integer('transaction_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('properties', function(Blueprint $table){
        $table->string('address_bien')->after('garages');
        $table->integer('location_id')->unsigned();
        $table->string('image');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
