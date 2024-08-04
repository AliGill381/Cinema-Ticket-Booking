<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::insert([
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'JamanJi',
                'movies_image' => 'movies/jamanji.JPG',
                'movies_price' => '500',
            ],
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Flash',
                'movies_image' => 'movies/flash.JPG',
                'movies_price' => '500',
            ],
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Iron Man',
                'movies_image' => 'movies/ironman.JPG',
                'movies_price' => '500',
            ],
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Harry Porter',
                'movies_image' => 'movies/harry_porter.jpeg',
                'movies_price' => '500',

            ],
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Avanger Infinity War',
                'movies_image' => 'movies/avanger.JPG',
                'movies_price' => '500',

            ],
            [

                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Lagend the War',
                'movies_image' => 'movies/lagend_movie.JPG',
                'movies_price' => '500',
            ],
            [
                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Jhon Wick',
                'movies_image' => 'movies/jhon_wick.jpg',
                'movies_price' => '500',

            ],
            [

                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Thor Love and Thunder',
                'movies_image' => 'movies/thor_love.JPG',
                'movies_price' => '500',
            ],
            [

                'movies_description' => 'Experience immersive movie magic at our state-of-the-art cinema, featuring stunning visuals, surround sound, comfortable seating, and a diverse selection of the latest blockbusters and indie films.',
                'movies_name' => 'Lagend the War',
                'movies_image' => 'movies/lagend_movie.JPG',
                'movies_price' => '500',
            ],
        ]);
    }
}
