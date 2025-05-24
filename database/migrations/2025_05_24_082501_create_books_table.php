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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Judul buku
            $table->text('description'); // Deskripsi buku
            $table->integer('price'); // Harga buku
            $table->integer('stock'); // Stok buku
            $table->string('cover_photo'); // Nama file cover foto
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade'); // Relasi ke tabel genres
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade'); // Relasi ke tabel authors
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
