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
        Schema::create('game_events', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('player_id');
            $table->foreignId('player_id')->references('user_id')->on('players');
            $table->bigInteger('game_id');
            $table->foreignId('game_id')->references('id')->on('games');
            $table->string('event',20);
            $table->time('minute');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_events');
    }
};
