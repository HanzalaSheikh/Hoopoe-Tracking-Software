<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'name' => 'Main Store',
                'location' => 'Karachi',
            ],
            [
                'name' => 'Distribution Center',
                'location' => 'Karachi',
            ],
            [
                'name' => 'Warehouse A',
                'location' => 'Karachi',
            ],
            [
                'name' => 'Warehouse B',
                'location' => 'Karachi',
            ],
        ];

        Facility::insert($facilities);
    }
}
