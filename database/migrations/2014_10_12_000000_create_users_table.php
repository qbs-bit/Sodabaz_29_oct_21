<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role_id');
            $table->string('name');
            $table->string('company_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number')->unique();
            $table->string('verification_code')->unique();
            $table->boolean('isVerified')->default(false);
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('registered_address')->nullable();
            $table->string('stn_ntn')->nullable();
            $table->string('company_email')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('status')->default('pending');
            $table->string('remarks')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('is_delete')->default("0");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
