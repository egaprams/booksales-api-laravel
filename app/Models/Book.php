<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasApiTokens;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'cover_photo',
        'genre_id',
        'author_id',
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
