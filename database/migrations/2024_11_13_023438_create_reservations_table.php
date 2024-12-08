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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('instalation_id');
            $table->foreign('instalation_id')->references('id')->on('instalations')->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade')->onDelete('cascade');
            $table->date('reserve_date');
            $table->time('start_hour');
            $table->time('end_hour');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
