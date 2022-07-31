<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->bigInteger('commentable_id')->unsigned();
            $table->string('commentable_type');
            $table->bigInteger('ad_id')->unsigned();
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->bigInteger('parent_id')->unsigned()->nullable()->default(null);
            $table->foreign('parent_id')->references('id')->on('comments')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('ad_id')->references('id')->on('ads');
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
        Schema::dropIfExists('comments');
    }
}
