<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('web_image');
            $table->text('app_image');
            $table->enum('banner_position', ['Home', 'Famous' , 'Other'])->default('Other');
            $table->text('external_link')->nullable();
           // $table->unsignedBigInteger('page_id')->nullable();
          //  $table->unsignedBigInteger('ad_id')->nullable();
            $table->boolean('is_click')->default(0);
            $table->boolean('ad_space')->default(0);

            $table->bigInteger('page_id')->unsigned()->nullable();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('ad_id')->unsigned()->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->enum('screen', ['Page', 'Ad' , 'User' , 'Category'])->default('Page');

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
