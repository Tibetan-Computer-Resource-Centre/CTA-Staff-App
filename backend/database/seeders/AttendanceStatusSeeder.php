<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttendanceStatus;
class AttendanceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceStatus::insert([
            ['name' => 'Present'],
            ['name' => 'Annual Leave'],
            ['name' => 'Casual Leave'],
            ['name' => 'Sick Leave'],
            ['name' => 'Absent'],
            ['name' => 'Holiday'],
        ]);
    }
}