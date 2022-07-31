<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable()->default(null);
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('order')->default(1);
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->boolean('is_mashaheer')->default(0);
            $table->json('options')->default(null);
            $table->bigInteger('parent_id')->unsigned()->nullable()->default(null);
            $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('store_id')->constrained()->default(1);
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
        Schema::drop('categories');
    }
}
