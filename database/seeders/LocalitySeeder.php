<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Locality;

class LocalitySeeder extends Seeder
{
    public function run(): void
    {
        $localities = [
            // Punjab (1)
            ['name' => 'Lahore', 'state_id' => 1],
            ['name' => 'Faisalabad', 'state_id' => 1],
            ['name' => 'Rawalpindi', 'state_id' => 1],
            ['name' => 'Multan', 'state_id' => 1],
            ['name' => 'Gujranwala', 'state_id' => 1],
            ['name' => 'Sialkot', 'state_id' => 1],
            ['name' => 'Bahawalpur', 'state_id' => 1],

            // Sindh (2)
            ['name' => 'Karachi', 'state_id' => 2],
            ['name' => 'Hyderabad', 'state_id' => 2],
            ['name' => 'Sukkur', 'state_id' => 2],
            ['name' => 'Mirpur Khas', 'state_id' => 2],
            ['name' => 'Larkana', 'state_id' => 2],

            // Khyber Pakhtunkhwa (3)
            ['name' => 'Peshawar', 'state_id' => 3],
            ['name' => 'Mardan', 'state_id' => 3],
            ['name' => 'Swat', 'state_id' => 3],
            ['name' => 'Kohat', 'state_id' => 3],
            ['name' => 'Abbottabad', 'state_id' => 3],

            // Balochistan (4)
            ['name' => 'Quetta', 'state_id' => 4],
            ['name' => 'Gwadar', 'state_id' => 4],
            ['name' => 'Khuzdar', 'state_id' => 4],
            ['name' => 'Turbat', 'state_id' => 4],

            // Islamabad Capital Territory (5)
            ['name' => 'Islamabad', 'state_id' => 5],

            // Gilgit-Baltistan (6)
            ['name' => 'Gilgit', 'state_id' => 6],
            ['name' => 'Skardu', 'state_id' => 6],
            ['name' => 'Hunza', 'state_id' => 6],

            // Azad Jammu and Kashmir (7)
            ['name' => 'Muzaffarabad', 'state_id' => 7],
            ['name' => 'Mirpur', 'state_id' => 7],
            ['name' => 'Kotli', 'state_id' => 7],
        ];

        foreach ($localities as $locality) {
            Locality::create($locality);
        }
    }
}
