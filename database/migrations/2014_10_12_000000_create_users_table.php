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
            $table->string('name', 30);
            $table->string('lastname', 30);
            $table->date('date_birth');
            $table->string('phone', 15)->unique();
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->string('email', 30)->unique();
            $table->string('password', 30);
            $table->date('up_date');
            //Se va a guardar la ruta del path
            $table->string('avatar',255)->nullable();
            /* $table->rememberToken();
            $table->timestamps(); */
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
