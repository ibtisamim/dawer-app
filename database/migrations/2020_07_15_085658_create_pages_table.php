<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
//$table->unsignedBigInteger('user_id');
           // $table->unsignedBigInteger('subscribe_id');
           // $table->unsignedBigInteger('rate_id');

            $table->string('page_name');
            $table->text('page_description');
            $table->text('subscriptions_notes')->nullable();
            $table->string('mobile_number');
            $table->string('coverimages')->nullable();
            $table->string('logo')->nullable();
            $table->text('email')->nullable();
            $table->text('street');
            $table->text('website');
            $table->text('google_lat');
            $table->text('google_lng');
          
            $table->string('slug')->unique();
            $table->enum('status', ['PUBLISHED', 'Expire', 'Pending'])->default('Pending');
        
          //  $table->integer('followers_count')->default(0);
            $table->integer('views_count')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('delivery')->default(0);
            $table->boolean('box_orders')->default(0);
            $table->boolean('trust_mark')->default(0); // if page subscription for "mashaheer" will automaticlly get 1 (on) , else from admin checked by administrator

            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subscription_id')->constrained();
            $table->foreignId('subscription_period_id')->constrained();
            
           // $table->foreignId('country_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('area_id')->constrained();
            $table->foreignId('store_id')->constrained()->default(1);


         //   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //    $table->foreign('rate_id')->references('id')->on('pages_rates')->onDelete('cascade');

           // $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
           // $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
         //   $table->foreign('subscribe_id')->references('id')->on('subscribes')->onDelete('cascade');
            $table->date('subscribe_date');
            $table->index('id');
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
        Schema::dropIfExists('pages');
    }
}
