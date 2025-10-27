<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            // Punjab routes
            ['city_name' => 'Lahore', 'next_city' => 'Gujranwala', 'distance_to_next_city' => 75],
            ['city_name' => 'Gujranwala', 'next_city' => 'Gujrat', 'distance_to_next_city' => 40],
            ['city_name' => 'Gujrat', 'next_city' => 'Jhelum', 'distance_to_next_city' => 60],
            ['city_name' => 'Jhelum', 'next_city' => 'Rawalpindi', 'distance_to_next_city' => 110],
            ['city_name' => 'Rawalpindi', 'next_city' => 'Islamabad', 'distance_to_next_city' => 15],

            // Sindh routes
            ['city_name' => 'Karachi', 'next_city' => 'Hyderabad', 'distance_to_next_city' => 160],
            ['city_name' => 'Hyderabad', 'next_city' => 'Nawabshah', 'distance_to_next_city' => 120],
            ['city_name' => 'Nawabshah', 'next_city' => 'Sukkur', 'distance_to_next_city' => 190],
            ['city_name' => 'Sukkur', 'next_city' => 'Larkana', 'distance_to_next_city' => 85],

            // Khyber Pakhtunkhwa routes
            ['city_name' => 'Peshawar', 'next_city' => 'Nowshera', 'distance_to_next_city' => 40],
            ['city_name' => 'Nowshera', 'next_city' => 'Mardan', 'distance_to_next_city' => 35],
            ['city_name' => 'Mardan', 'next_city' => 'Swabi', 'distance_to_next_city' => 25],
            ['city_name' => 'Swabi', 'next_city' => 'Abbottabad', 'distance_to_next_city' => 95],

            // Balochistan routes
            ['city_name' => 'Quetta', 'next_city' => 'Kalat', 'distance_to_next_city' => 150],
            ['city_name' => 'Kalat', 'next_city' => 'Khuzdar', 'distance_to_next_city' => 115],
            ['city_name' => 'Khuzdar', 'next_city' => 'Gwadar', 'distance_to_next_city' => 320],

            // Gilgit-Baltistan route
            ['city_name' => 'Gilgit', 'next_city' => 'Hunza', 'distance_to_next_city' => 100],
            ['city_name' => 'Hunza', 'next_city' => 'Skardu', 'distance_to_next_city' => 220],

            // Azad Jammu & Kashmir route
            ['city_name' => 'Muzaffarabad', 'next_city' => 'Mirpur', 'distance_to_next_city' => 190],
            ['city_name' => 'Mirpur', 'next_city' => 'Kotli', 'distance_to_next_city' => 45],
        ];

        // Insert the data into the cities table
        City::insert($cities);
    }
}
