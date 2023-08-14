<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BloodGroup;
class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodGroup::insert([
            ['name' => 'A Positive'],
            ['name' => 'A Negative'],
            ['name' => 'B Positive'],
            ['name' => 'B Negative'],
            ['name' => 'AB Positive'],
            ['name' => 'AB Negative'],
            ['name' => 'O Positive'],
            ['name' => 'O Negative'],
        ]);
    }
}
