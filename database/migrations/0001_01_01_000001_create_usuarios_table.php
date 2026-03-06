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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario'); // INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT
            $table->unsignedInteger('id_rol'); // INT UNSIGNED NOT NULL
            $table->string('nombre', 255); // VARCHAR(255) NOT NULL
            $table->string('email', 255)->unique(); // VARCHAR(255) NOT NULL UNIQUE
            $table->string('password', 255); // VARCHAR(255) NOT NULL
            $table->timestamps(); // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, updated_at TIMESTAMP ON UPDATE
            
            // Foreign Key
            $table->foreign('id_rol')->references('id_rol')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
