<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Author extends Model
{
    use HasApiTokens;
    protected $table = 'authors';

    protected $fillable = [
        'name',
        'bio'
    ];

    public function getAllGenre(){
        return $this->author;
    }
}
