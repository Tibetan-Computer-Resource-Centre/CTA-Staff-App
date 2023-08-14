<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::insert([
            ['name' => 'Male'],
            ['name' => 'Female'],
            ['name' => 'Lesbian'],
            ['name' => 'Gay'],
            ['name' => 'Bisexual'],
            ['name' => 'Transgender'],
            ['name' => 'Queer']
        ]);
    }
}
