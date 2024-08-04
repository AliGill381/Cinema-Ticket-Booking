<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinema::insert([
            [
                'cinema_name' => 'Universal Cinema',
                'cinema_location' => 'Lahore Barket Market',
                'cinema_logo' => 'universal_cinema.png',
                'cinema_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'cinema_mail' => 'aligill@gmail.com',
            ],
            [
                'cinema_name' => 'Plantium Cinema',
                'cinema_location' => 'Lahore Barket Market',
                'cinema_logo' => 'premium_cinema.png',
                'cinema_description' => 'Step into a world of entertainment at our cinema, where cutting-edge technology meets unparalleled comfort. Enjoy the latest releases in high-definition with crystal-clear sound and luxurious seating.',
                'cinema_mail' => 'aligill@gmail.com',
            ],
            [
                'cinema_name' => 'Star Cinema',
                'cinema_location' => 'Lahore Barket Market',
                'cinema_logo' => 'star_cinema.png',
                'cinema_description' => 'please make this thing  world of entertainment at our cinema, where cutting-edge technology meets unparalleled comfort. Enjoy the latest releases in high-definition with crystal-clear sound and luxurious seating.',
                'cinema_mail' => 'aligill@gmail.com',
            ]
        ]);
    }
}
