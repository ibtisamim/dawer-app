<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_times', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('page_id');
            $table->boolean('all_open')->default(1);
            $table->text('sat');
            $table->text('sun');
            $table->text('mon');
            $table->text('tue');
            $table->text('wed');
            $table->text('thu');
            $table->text('fri');
            $table->index('id');
            $table->foreignId('page_id')->constrained();
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
        Schema::dropIfExists('work_times');
    }
}
