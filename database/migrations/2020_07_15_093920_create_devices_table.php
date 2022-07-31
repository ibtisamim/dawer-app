<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->text('device_id');
            $table->char('device_type', 200);
            $table->enum('status', ['Active', 'Inactive' , 'Blocked'])->default('Active');
            $table->string('lang');
            $table->text('fcm_id');
            $table->char('os_version', 200);
            $table->boolean('visitor')->default(1);
            $table->foreignId('city_id')->constrained();
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
        Schema::dropIfExists('devices');
    }
}
