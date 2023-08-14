<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveCategory;
class LeaveCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeaveCategory::insert([
            [
                'name' => 'Casual Leave',
                'isServiceDeductible' => false,
            ],
            [
                'name' => 'Sick Leave',
                'isServiceDeductible' => false,
            ],            
            // ['name' => 'Holiday'], 6
            [
                'name' => 'Absent',
                'isServiceDeductible' => true,
            ],
            [
                'name' => 'Leave without Pay',
                'isServiceDeductible' => true,                
            ],
            [
                'name' => 'Official Study Leave',
                'isServiceDeductible' => false,
            ],
            [
                'name' => 'Official Leave',
                'isServiceDeductible' => false,
            ],
            [
                'name' => 'Annual Leave',
                'isServiceDeductible' => false,
            ],
            [
                'name' => 'Unofficial Study Leave',
                'isServiceDeductible' => true,
            ],
            // ['name' => 'Present'],
            [
                'name' => 'Special Leave',
                'isServiceDeductible' => false,
            ],
        ]);
    }
}