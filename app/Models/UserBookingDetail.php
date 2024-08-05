<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBookingDetail extends Model
{
    use HasFactory;
    protected $table = 'user_booking_details';
    public function cinemaTicket()
    {
        return $this->belongsTo(CinemaShowTime::class, 'cinema_showtime_id', 'id');
    }
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
}
