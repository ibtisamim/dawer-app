<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_values', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->default(NULL);
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->bigInteger('option_id')->unsigned() ;
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
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
        Schema::dropIfExists('option_values');
    }
}
