<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('comp_name');
            $table->string('phone_number');
            $table->string('city');
            $table->string('state');
            $table->string('address1');
            $table->string('address2');
            $table->string('zip');
            $table->string('email_add');
            $table->string('username');
            $table->string('password');
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
        Schema::drop('users');
    }
}
