<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Logins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number');
            $table->string('company_name');
            $table->string('number_of_employee');
            $table->string('current_payroll');
            $table->string('book_keeper');
            $table->timestamps();
        });

        DB::table('users');
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');

    }
}
