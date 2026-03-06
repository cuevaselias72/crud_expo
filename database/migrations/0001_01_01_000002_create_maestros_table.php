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
        Schema::create('maestros', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario')->primary(); // INT UNSIGNED PRIMARY KEY
            $table->string('matricula', 20)->unique(); // VARCHAR(20) UNIQUE NOT NULL
            $table->timestamps(); // created_at, updated_at

            // Foreign Key
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
