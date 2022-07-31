<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
           $table->id();
            $table->enum('type', ['select' , 'multiselect' , 'text'])->default('select');
            $table->enum('filter_shape', ['square', 'list', 'rectangle'  , 'range'])->default('square');
            $table->string('label')->default(NULL);
            $table->integer('order')->default(1);
            $table->string('name')->default(NULL);
            $table->string('slug')->unique();
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->string('icon')->default(NULL);
            $table->bigInteger('dependence_id')->default(NULL);
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
        Schema::dropIfExists('options');
    }
}
