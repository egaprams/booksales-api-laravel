<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Genre extends Model

{
    use HasApiTokens;

    protected $table = 'genres';

    protected $fillable = [
        'name',
        'description'
    ];

    public function getAllGenre()
    {
        return $this->genres;
    }
}
