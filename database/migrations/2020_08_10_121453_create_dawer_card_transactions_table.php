<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDawerCardTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dawer_card_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->morphs('entitible');
            $table->text('data');
            $table->timestamp('create_at')->nullable();
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
        Schema::dropIfExists('dawer_card_transactions');
    }
}
