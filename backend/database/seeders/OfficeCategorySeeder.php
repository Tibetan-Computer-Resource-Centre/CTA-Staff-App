<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfficeCategory;
class OfficeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Don't change the order. Ids are used in offices table
         */
        OfficeCategory::insert([
            ['name' => 'Ministerial Dept and offices'],
            ['name' => 'Independent Offices'],
            ['name' => 'Office of Tibet'],
            ['name' => 'Settlement Offices'],
            ['name' => 'Cooperative societies'],
            ['name' => 'Other Special Offices'],
            ['name' => 'Parliament Office'],
            ['name' => 'Tib. Supreme Justice Commission'],            
        ]);
    }
}
