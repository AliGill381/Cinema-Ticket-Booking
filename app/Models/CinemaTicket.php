<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaTicket extends Model
{
    use HasFactory;
    protected $table = 'cineme_ticket';
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
