<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpgradePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upgrade_periods', function (Blueprint $table) {
            $table->id();
            $table->double('price', 10, 2); // 0 : is free
            $table->integer('days')->default('0'); // -1 : unlimited
            $table->boolean('unlimited')->default('0');
            $table->integer('ads_available_count');
            $table->foreignId('upgrades_id')->constrained();
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
        Schema::dropIfExists('upgrade_periods');
    }
}
