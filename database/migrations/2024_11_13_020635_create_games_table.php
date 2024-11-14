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
        Schema::create('games', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('tournament_id')->nullable();
            $table->foreignId('tournament_id')->references('id')->on('tournaments');
            $table->bigInteger('local_team_id');
            $table->foreignId('local_team_id')->references('id')->on('teams');
            $table->bigInteger('away_team_id');
            $table->foreignId('away_team_id')->references('id')->on('teams');
            $table->bigInteger('referee_id');
            $table->foreignId('referee_id')->references('user_id')->on('referees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
