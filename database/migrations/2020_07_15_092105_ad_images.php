<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('ad_images', function (Blueprint $table) {
             $table->id();
             $table->text('imgsrc');
             $table->bigInteger('ad_id')->unsigned();
             $table->index('id');
             $table->timestamps();
             $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            // $table->foreignId('ad_id')->constrained();

             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_images');
        
    }
}
