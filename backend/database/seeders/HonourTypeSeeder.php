<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HonourType;
class HonourTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HonourType::insert([
            [
                'name' => 'Songtsen Gampo Statue',
                'addOneYearBonus' => false,
            ],
            [
                'name' => 'Certificate',
                'addOneYearBonus' => false,
            ],
            [
                'name' => 'Best Staff',
                'addOneYearBonus' => true,
            ],
        ]);
    }
}
