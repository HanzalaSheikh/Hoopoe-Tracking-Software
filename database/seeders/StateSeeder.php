<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['name' => 'Punjab'],
            ['name' => 'Sindh'],
            ['name' => 'Khyber Pakhtunkhwa'],
            ['name' => 'Balochistan'],
            ['name' => 'Islamabad Capital Territory'],
            ['name' => 'Gilgit-Baltistan'],
            ['name' => 'Azad Jammu and Kashmir'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
