<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryFiliters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_filiters', function (Blueprint $table) {
            // connect category with filiter -  sorting
            $table->id();
          //  $table->unsignedBigInteger('category_id');
          //  $table->unsignedBigInteger('option_id');

            $table->foreignId('category_id')->constrained();
            $table->foreignId('type_filiters_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_filiters');
    }
}
