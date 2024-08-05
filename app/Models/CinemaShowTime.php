<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaShowTime extends Model
{
    use HasFactory;
    protected $table = 'cinema_showtimes';
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

}
