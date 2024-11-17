<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->string('email', 30)->unique();
            $table->string('password', 255);
            $table->datetime('up_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            //Se va a guardar la ruta del path
            $table->string('avatar',255)->nullable()->default(null);
            /* $table->rememberToken();
            $table->datetimes(); */
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
