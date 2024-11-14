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
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('transaction_id')->nullable();
            $table->foreignId('transaction_id')->references('id')->on('finances');
            $table->bigInteger('tournament_id')->nullable(); 
            $table->foreignId('tournament_id')->references('id')->on('tournaments');
            $table->bigInteger('team_id')->nullable();
            $table->foreignId('team_id')->references('id')->on('teams');
            $table->bigInteger('player_id')->nullable();
            $table->foreignId('player_id')->references('user_id')->on('players');
            $table->string('description', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorships');
    }
};
