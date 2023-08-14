<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobHistoryCategory;
class JobHistoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobHistoryCategory::insert([
            /**
             * What does it mean to insert in promotion table but as Promotion not accepted category ?
             * Turns out sometimes people are offered to be promoted but they refuse the promotion 
             * which can happen within a set number of months after the promotion offer. 
             * Often the reason is that they like the location and accepting the 
             * promotion would require them to move.
             */
            ['name' => 'Transfer'],
            ['name' => 'Promoted'],
            ['name' => 'Job Delegation'],
            ['name' => 'First Appointment'],
            ['name' => 'Permanent Appointment'],
            ['name' => 'Promotion not accepted'],
            ['name' => 'Examination'],
            ['name' => 'Demotion'],
        ]);
    }
}
