<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable()->default(null);
            $table->integer('order')->default(1);
           // $table->unsignedBigInteger('page_id');
            $table->index('id');
            $table->timestamps();
          //  $table->foreign('page_id')->references('page_id')->on('pages')->onDelete('cascade');
            $table->foreignId('page_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_sections');
    }
}
