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
        Schema::create('finances', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('sponsor_id');
            $table->foreignId('sponsor_id')->references('id')->on('sponsors');
            $table->bigInteger('user_id')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->float('mount');
            $table->timestamp('date_hour');
            $table->string('concept',100);
            $table->string('type',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finances');
    }
};
