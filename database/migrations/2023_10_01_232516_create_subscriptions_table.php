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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id');
            $table->date('start_in');
            $table->date('end_in');
            $table->timestamps();
            
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
