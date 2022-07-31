<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDawerCardUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dawer_card_users', function (Blueprint $table) {
            $table->id();
              $table->bigInteger('dawer_card_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('dawer_card_id')->references('id')->on('dawer_cards')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('dawer_card_users');
    }
}
