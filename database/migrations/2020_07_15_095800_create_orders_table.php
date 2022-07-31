<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('reason_id')->unsigned()->nullable();
           // $table->unsignedBigInteger('user_id');
          //  $table->unsignedBigInteger('page_id');
            $table->string('title')->default(NULL);
            $table->double('total', 10, 2)->nullable();
            $table->enum('status', ['Pending' , 'Accepted', 'Success','Faild'])->default('Pending');

            $table->boolean('is_new')->default(1);
            $table->boolean('cancellation')->default(0);
            $table->index('id');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('user_addresses');
            $table->foreign('reason_id')->references('id')->on('order_reject_reasons');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('orders');
    }
}
