<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Duty;
class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Duty::insert([
            ['name' => 'Gangkyi Offices'],
            ['name' => 'Staff of OOT'],
            ['name' => 'Staff of TSO'],
            ['name' => 'Auditor'],
            ['name' => 'Project Officer'],
            ['name' => 'Accountant'],
            ['name' => 'Counselor'],
            ['name' => 'Chief Justice Commissioner'],
            ['name' => 'Justice Commissioner'],
            ['name' => 'Web Developer'],
            ['name' => 'Tech Support'],
        ]);
    }
}