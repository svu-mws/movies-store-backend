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
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
        
            $table->Date('Birth_day');
            $table->string('relation_status');
            $table->integer('age');
            $table->String('Education_level');
            $table->string('gender');
            $table->boolean('homeonership');
            $table->string('internetconnection');
            $table->string('material_status');
            $table->string('movie_selector');
            $table->integer('num_bathrooms');
            $table->integer('num_bedrooms');
            $table->integer('num_cars');
            $table->integer('num_cheildren');
            $table->integer('num_Tvs');
            $table->integer('PPV_freq');
            $table->integer('buying_freq');
            $table->string('format');
            $table->integer('renting_freq');
            $table->integer('Viewing_freq');
            $table->integer('Threater_freq');
            $table->integer('Tv_movie_freq');
            $table->string('Tv_signal');
            $table->boolean('admin')->default('0');
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
        Schema::dropIfExists('users');
    }
}
