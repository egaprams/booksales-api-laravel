<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasApiTokens;
    
    protected $table = 'books';

    public function getBooks()
    {
        return $this->books;
    }
}
