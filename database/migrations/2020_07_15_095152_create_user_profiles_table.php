<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
        //    $table->unsignedBigInteger('user_id');
            $table->string('domain')->unique();
            $table->text('avatar')->nullable();
            $table->enum('lang', ['en', 'ar' , 'ku'])->default('ar');
            $table->enum('gender', ['Male', 'Female' ,'Other'])->default('Other');
            $table->boolean('trust_mark')->default(0); // if user truting so  page free not upgrade to dawer plus
            $table->boolean('auth_mark')->default(0);

         //   $table->unsignedBigInteger('upgrade_id');
         //   $table->unsignedBigInteger('city_id');
            $table->integer('followers_count')->nullable()->default('0');
            $table->integer('views_count')->nullable()->default('0');
            $table->boolean('mobile_display')->default('0');
            $table->boolean('is_blocked')->default('0');
            $table->boolean('verify_otp')->default('0'); // otp : one time password
            $table->char('v_code', 200)->nullable()->default('');
            $table->string('respond_speed')->nullable(); 
            $table->integer('remaining_ads_count')->nullable(); 
            $table->text('description')->nullable();
            $table->timestamp('upgrade_date')->nullable(); 
           // $table->timestamp('sms_verified_at')->nullable();
           // $table->foreign('upgrade_id')->references('id')->on('upgrades');
            $table->foreignId('upgrade_id')->constrained();
            $table->foreignId('upgrade_period_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('user_profiles');
    }
}
