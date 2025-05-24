<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => '1',
            'nama'=> 'Fantasi'
        ],
        [
            'id' => '1',
            'nama'=> 'Sci-Fi'
        ],
        [
            'id' => '1',
            'nama'=> 'Adventure'
        ],
        [
            'id' => '1',
            'nama'=> 'Romantic'
        ],
    ];

    public function getAllGenre(){
        return $this->genres;
    }
}
