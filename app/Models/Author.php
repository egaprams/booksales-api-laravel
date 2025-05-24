<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
        private $author = [
        [
            'id' => '1',
            'nama'=> 'Andrea Hirata'
        ],
        [
            'id' => '2',
            'nama'=> 'Eka Kurniawan'
        ],
        [
            'id' => '3',
            'nama'=> 'Pramoedya Ananta Toer'
        ],
        [
            'id' => '4',
            'nama'=> 'Pidi Baiq'
        ],
    ];

    public function getAllGenre(){
        return $this->author;
    }
}
