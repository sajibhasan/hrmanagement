<?php

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
            $table->string('name');
            $table->string('image');
            $table->date('date');
            $table->string('gender');
            $table->string('phone');
            $table->text('qualification');
            $table->text('address');
            $table->text('paddress');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('is_a');
            $table->boolean('status')->default(0);
            $table->string('employeeid');
            $table->string('department');
            $table->string('designation');
            $table->date('dateofjoining');
            $table->boolean('optradio');
            $table->string('Salary');
            $table->string('bankname');
            $table->string('accountholder');
            $table->string('accountnum');
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
        Schema::drop('users');
    }
}
