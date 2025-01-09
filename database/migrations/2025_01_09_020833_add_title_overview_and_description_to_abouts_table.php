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
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('title_overview')->nullable(); // Menambahkan kolom title_overview
            $table->text('deskripsi')->nullable();       // Menambahkan kolom deskripsi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('title_overview'); // Menghapus kolom title_overview
            $table->dropColumn('deskripsi');     // Menghapus kolom deskripsi
        });
    }
};
