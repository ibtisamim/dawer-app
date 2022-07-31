<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_admins', function (Blueprint $table) {
        $table->id();
            $table->bigInteger('page_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('request')->default(1);
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
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
        Schema::dropIfExists('page_admins');
    }
}
