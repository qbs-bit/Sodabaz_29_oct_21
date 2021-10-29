<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmitQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_quotations', function (Blueprint $table) {
            $table->id();
            $table->string('rfq_id');
            $table->string('submitter_id');
            $table->string('title');
            $table->string('quantity');
            $table->string('unit');
            $table->string('start_price');
            $table->string('end_price');
            $table->string('description');
            $table->string('ship_to');
            $table->string('upload');
            $table->string('image');
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
        Schema::dropIfExists('submit_quotations');
    }
}
