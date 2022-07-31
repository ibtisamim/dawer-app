<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id()->unsigned()->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('fb_id')->nullable()->deafult('**'); // facebook account - social login
            $table->text('apple_id')->nullable()->deafult('**');
            $table->text('g_id')->nullable()->deafult('**'); // google account - social login
            $table->string('mobile_number')->unique();
            $table->boolean('verified')->deafult(0);// otp : one time .....etc
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
