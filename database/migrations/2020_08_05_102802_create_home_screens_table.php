<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_screens', function (Blueprint $table) {
            $table->id();
             $table->string('part_name');
            $table->integer('order')->deafult(1);
            $table->boolean('enabled')->deafult(0);
            $table->enum('type', ['Page', 'Ads' ])->default('Ads');
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
        Schema::dropIfExists('home_screens');
    }
}
