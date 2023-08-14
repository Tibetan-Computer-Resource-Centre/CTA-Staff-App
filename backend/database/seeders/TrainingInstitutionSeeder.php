<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrainingInstitution;
class TrainingInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingInstitution::insert([
            ['name' => "Administration training & welfare society, Reception Centre"],
            ['name' => "Administration training & welfare society, Reception Centre, IIPA, Delhi"],
            ['name' => "Administration Training and Welfare Society"],
            ['name' => "College for Higher Tibetan Studies, Sarah"],
            ['name' => "Dharamsala"],
            ['name' => "driving certificate"],
            ['name' => "HIPA, Shimla"],
            ['name' => "IIPA, New Delhi"],
            ['name' => "LBSNAA, Mussoorie"],
            ['name' => "NIIT, Dharamsala"],
            ['name' => "Nyatri Hall, Gangkyi"],
            ['name' => "Polskie Gimnazjum I Liceum, College ET Lycee Polonais"],
            ['name' => "Reception Centre, Dharamsala"],
        ]);
    }
}