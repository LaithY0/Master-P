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
        Schema::create('subscription_prices', function (Blueprint $table) {
            $table->id();
            $table->string('months');
            $table->integer('price');
            $table->integer('months_num');
            $table->string('details_1');
            $table->string('details_2');
            $table->string('details_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_prices');
    }
};
