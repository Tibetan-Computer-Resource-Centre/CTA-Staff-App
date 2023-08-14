<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relation;
class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relation::insert([
            ['name' => 'Father'],
            ['name' => 'Mother'],
            ['name' => 'Son'],
            ['name' => 'Daughter'],
            ['name' => 'Husband'],
            ['name' => 'Wife'],
            ['name' => 'Brother'],
            ['name' => 'Sister'],
        ]);
    }
}
