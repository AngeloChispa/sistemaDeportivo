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
        Schema::create('titles', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('assignment_id')->nullable();
            $table->foreign('assignment_id')->references('id')->on('player_team_assignments');
            $table->unsignedBigInteger('trainer_team_id')->nullable();
            $table->foreign('trainer_team_id')->references('id')->on('coach_team_assignments');
            $table->string('name',60);
            //Guarda un path a una imagen
            $table->string('title',60);
            $table->date('date');
            $table->string('description',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles');
    }
};