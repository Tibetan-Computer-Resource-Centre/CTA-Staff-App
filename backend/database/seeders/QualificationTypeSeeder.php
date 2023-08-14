<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QualificationType;
class QualificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QualificationType::insert([                        
            [
                'id'   => 1,
                'name' => 'Upto 10th'
            ],
            [
                'id'   => 2,
                'name' => '11-12th'
            ],
            [
                'id'   => 3,
                'name' => 'Graduate'
            ],
            [
                'id'   => 4,
                'name' => 'Post Graduate'
            ],
            [
                'id'   => 5,
                'name' => 'Doctorate'
            ],
        ]);
    }
}
