<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsCategoryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_category_users', function (Blueprint $table) {
            // Ads count by category (main category) and users
            $table->id();
           // $table->unsignedBigInteger('category_id');
           // $table->unsignedBigInteger('upgrade_id'); // user type is upgrade ex: dawer pluse, normal
            $table->integer('ads_count');

            $table->foreignId('category_id')->constrained();
            $table->foreignId('upgrade_id')->constrained();
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
        Schema::dropIfExists('ads_category_users');
    }
}
