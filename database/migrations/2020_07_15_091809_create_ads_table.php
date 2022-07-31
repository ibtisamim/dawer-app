<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->text('ads_title')->nullable();
            $table->string('slug')->unique();
            $table->text('ads_text')->nullable();
            $table->string('mobile_number')->nullable();
            $table->boolean('mobile_display')->default(1);

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('page_id')->unsigned()->nullable();
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('internalsection_id')->unsigned()->nullable();

            $table->decimal('price', 10, 2);
//            $table->enum('currency', ['Dinar', 'Dollar'])->default('Dinar');
            $table->boolean('special')->default(0); // if there is special price entered
            $table->decimal('old_price', 10, 2);
            $table->boolean('delivery')->default(0);
            $table->boolean('order')->default(1);
            $table->boolean('is_featured')->default(0);

            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('currency_id')->unsigned();
        
            $table->enum('ads_status', [ 'Active'  ,'Requested' ,'Reported','Saved','Unactive','Expire'])->default('Requested');
            $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_date')->nullable();

            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('internalsection_id')->references('id')->on('internal_sections')->onDelete('cascade');


            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->boolean('deleted')->default(0);
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
        Schema::dropIfExists('ads');
    }
}
