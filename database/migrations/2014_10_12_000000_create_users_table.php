<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->tinyInteger('subscriper')->default(0);
            $table->string('subscription_s')->default(0000-00-00);
            $table->string('subscription_e')->default(0000-00-00);
            $table->string('photo');
            $table->tinyInteger('sub_req')->default(0);
            $table->string('subtype');
            $table->integer('months_num');
            $table->integer('sub_price');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
