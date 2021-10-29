<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('user_id');
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity');
            $table->string('expected_price');
            $table->string('ship_to')->nullable();
            $table->datetime('first_delivery');
            $table->string('payment_term');
            $table->string('file')->nullable();
            $table->string('is_bid');
            $table->string('status');
            $table->datetime('bidding_start')->nullable();
            $table->datetime('bidding_end')->nullable();
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
        Schema::dropIfExists('enquiries');
    }
}
