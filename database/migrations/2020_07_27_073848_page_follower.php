<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageFollower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_follower', function (Blueprint $table) {
            $table->bigInteger('page_id')->unsigned();
            $table->bigInteger('follow_id')->unsigned();
            
            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('follow_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_follower');
    }
}
