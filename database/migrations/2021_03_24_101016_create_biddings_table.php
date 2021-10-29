<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddings', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->datetime('bidding_start');
            $table->datetime('bidding_end');
            $table->string('minimum_amount');
            $table->string('maximum_amount');
            $table->string('status')->nullable();
            $table->string('is_bid');
            $table->string('created_by');
            $table->string('updated_by');
            $table->datetime('deleted_at')->nullable();
            $table->string('deleted_by')->nullable();
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
        Schema::dropIfExists('biddings');
    }
}
