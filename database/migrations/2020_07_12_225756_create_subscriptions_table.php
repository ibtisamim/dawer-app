<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
             $table->id();
             $table->text('subscription_name');
             $table->text('subscription_desc');
             $table->text('color');
             $table->text('icon');
             $table->integer('active_ad_count'); // user ads count      
             $table->enum('advertising_statistics', ['Entire', 'Specific'])->default('Entire');
             $table->integer('cover_images_count');
             $table->boolean('ad_views_count')->default(0);
             $table->boolean('auth_mark')->default(0);
             $table->boolean('private_ad')->default(0);
             $table->boolean('delivery_service')->default(0);
             $table->boolean('request_an_order')->default(0);
             $table->boolean('special_interface')->default(0);
             $table->boolean('create_sections')->default(0); // for subscription internal sections
             $table->boolean('is_mashaheer')->default(0); // for subscription mashaheer
             $table->boolean('page_admin')->default(0);
             $table->text('web_image');
             $table->text('mobile_image');
             $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
             $table->foreignId('store_id')->constrained()->default(1);
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
        Schema::dropIfExists('subscriptions');
    }
}
