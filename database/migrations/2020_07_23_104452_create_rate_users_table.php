<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_users', function (Blueprint $table) {
            $table->id();
            $table->decimal('rate', 2, 1)->nullable()->default('0');
            $table->integer('rate_count');
            $table->integer('rate_count_1');
            $table->integer('rate_count_2');
            $table->integer('rate_count_3');
            $table->integer('rate_count_4');
            $table->integer('rate_count_5');
            
            $table->index('id');
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
        Schema::dropIfExists('rate_users');
    }
}
