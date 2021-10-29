<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('keywords');
            $table->string('quantity');
            $table->string('unit');
            $table->string('start_price');
            $table->string('end_price');
            $table->string('description');
            $table->string('ship_to');
            $table->string('upload');
            $table->string('status');
            $table->string('acceptor_id')->nullable();
            $table->datetime('accepted_at')->nullable();
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
        Schema::dropIfExists('rfqs');
    }
}
