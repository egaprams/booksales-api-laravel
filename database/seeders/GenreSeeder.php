<?php

namespace Database\Seeders;

use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([
            [
                'name' => 'Action',
                'description' => 'Genre yang menekankan pada aksi dan pertarungan seru.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Comedy',
                'description' => 'Genre yang dirancang untuk membuat penonton tertawa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Drama',
                'description' => 'Genre yang fokus pada emosi dan pengembangan karakter.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Horror',
                'description' => 'Genre yang bertujuan menakut-nakuti dan memicu ketegangan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sci-Fi',
                'description' => 'Genre yang berfokus pada teknologi dan fiksi ilmiah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
