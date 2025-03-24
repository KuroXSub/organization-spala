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
        Schema::create('about_organizations', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // Kunci untuk memanggil bagian
            $table->string('title'); // Judul seperti Visi, Misi, Tujuan, dll
            $table->longText('content'); // Konten (Rich Editor)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_organizations');
    }
};
