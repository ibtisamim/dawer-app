<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporting_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned(); 
            $table->string('item_type'); 

            $table->bigInteger('user_id')->unsigned();
            //$table->enum('item_type', ['User', 'Ad','Comment'])->default('User');
            $table->bigInteger('reporting_reasons_id')->unsigned();
            $table->text('reason_text');

         //   $table->foreign('item_id')->references('id')->on('users');
            $table->foreign('reporting_reasons_id')->references('id')->on('reporting_reasons');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reporting_items');
    }
}
