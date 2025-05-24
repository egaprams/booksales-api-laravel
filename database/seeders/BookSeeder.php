<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Pulang',
                'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
                'price' => 40000,
                'stock' => 15,
                'cover_photo' => 'pulang.jpg',
                'genre_id' => 1,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah inspiratif anak-anak di Belitung.',
                'price' => 50000,
                'stock' => 20,
                'cover_photo' => 'laskar_pelangi.jpg',
                'genre_id' => 2,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Bumi',
                'description' => 'Novel fantasi remaja karya Tere Liye.',
                'price' => 45000,
                'stock' => 10,
                'cover_photo' => 'bumi.jpg',
                'genre_id' => 3,
                'author_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Negeri 5 Menara',
                'description' => 'Perjalanan hidup santri yang penuh semangat.',
                'price' => 42000,
                'stock' => 18,
                'cover_photo' => 'negeri5menara.jpg',
                'genre_id' => 1,
                'author_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Filosofi Teras',
                'description' => 'Filsafat stoikisme untuk kehidupan modern.',
                'price' => 60000,
                'stock' => 8,
                'cover_photo' => 'filosofi_teras.jpg',
                'genre_id' => 4,
                'author_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
