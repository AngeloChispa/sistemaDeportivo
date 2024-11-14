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
            $table->bigInteger('instalation_id');
            $table->foreignId('instalation_id')->references('id')->on('instalations');
            $table->bigInteger('game_id');
            $table->foreignId('game_id')->references('id')->on('games');
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
