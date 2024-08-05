<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CinemaShowTime;

class CinemaTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CinemaShowTime::insert([
            [
                 
                'movie_id' => 1,
                'cinema_id' => 1,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
             
                'movie_id' => 1,
                'cinema_id' => 1,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                
                'movie_id' => 2,
                'cinema_id' => 1,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 2,
                'cinema_id' => 1,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
              
                'movie_id' => 3,
                'cinema_id' => 1,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 3,
                'cinema_id' => 1,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                
                'movie_id' => 4,
                'cinema_id' => 2,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                
                'movie_id' => 4,
                'cinema_id' => 2,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
               
                'movie_id' => 5,
                'cinema_id' => 2,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
    
                'movie_id' => 5,
                'cinema_id' => 2,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 6,
                'cinema_id' => 2,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
    
                'movie_id' => 6,
                'cinema_id' => 2,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
               
                'movie_id' => 7,
                'cinema_id' => 3,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 7,
                'cinema_id' => 3,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 8,
                'cinema_id' => 3,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 8,
                'cinema_id' => 3,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                
                'movie_id' => 9,
                'cinema_id' => 3,
                'show_time' => '01:00 pm',
                'avaliable_seat' => '30',
            ],
            [
                'movie_id' => 9,
                'cinema_id' => 3,
                'show_time' => '09:00 pm',
                'avaliable_seat' => '30',
            ]
        ]);
    }
}
