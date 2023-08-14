<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmploymentType;
class EmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmploymentType::insert([
            ['name' => 'Full-time'],            
            ['name' => 'Part-time'],
            ['name' => 'Self-employed'],
            ['name' => 'Freelance'],            
            ['name' => 'Internship'],
            ['name' => 'Trainee'],
        ]);
    }
}
