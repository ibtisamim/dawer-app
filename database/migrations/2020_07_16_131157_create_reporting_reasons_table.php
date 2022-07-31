<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportingReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporting_reasons', function (Blueprint $table) {
            $table->id();
            $table->text('reason_text');
            $table->enum('source', ['User', 'Comment' , 'Page'])->default('Page');
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
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
        Schema::dropIfExists('reporting_reasons');
    }
}
