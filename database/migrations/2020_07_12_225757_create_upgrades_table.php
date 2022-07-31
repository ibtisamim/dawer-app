<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upgrades', function (Blueprint $table) {
            // this table for user account upgrade (free or dawer plus or another ....etc)
            $table->id();
            $table->string('name');
            $table->text('icon');
            $table->text('desc');
            $table->boolean('isfree')->default(0);
          //  $table->double('price', 10, 2)->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            $table->index('id');
            $table->foreignId('store_id')->constrained()->default(1);
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
        Schema::dropIfExists('upgrades');
    }
}
