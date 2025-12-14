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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('nama');                 // Nama perusahaan
            $table->text('deskripsi');              // Deskripsi perusahaan
            $table->string('alamat')->nullable();   // Alamat perusahaan
            $table->string('telepon')->nullable();  // No telepon
            $table->string('email')->nullable();    // Email perusahaan
            $table->string('logo')->nullable();     // Logo perusahaan

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
