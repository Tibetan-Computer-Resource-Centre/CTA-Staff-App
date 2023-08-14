<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;
class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $upto10 = 1;
        $highSchool = 2;
        $graduate = 3;
        $postGraduate = 4;
        $doctorate = 5;
        Qualification::insert(
        [                        
            [
                'name' => 'Below Matric',
                'qualification_type_id' => $upto10
            ],
            [
                'name' => 'Matric',
                'qualification_type_id' => $upto10
            ],
            [
                'name' => 'Higher Secondary',
                'qualification_type_id' => $highSchool
            ],
            [
                'name' => 'B.Com.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.Sc.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.A.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'BCA',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'BBA',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.Tech.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'MBBS',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'LLB',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'Shastri',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'M.Com.',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'M.Sc.',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'M.A.',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'MCA',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'MBA',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'LLM',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'M.Tech.',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'B.S.W',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'Acharya',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'PhD',
                'qualification_type_id' => $doctorate
            ],
            [
                'name' => 'Pherchin Rabjampa',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'BBM',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'BBS',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'M.Phil.',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'B.E',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'BHS',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'BCS',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.A. LL.B',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'Diploma',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'Rigney Rabjampa',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'G.Nursing',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.A B.Ed.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.Ed.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.A. Hons',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.Sc. Hons.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'M.S.W',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'M.A Mass Communication',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'M.A Creative Writing',
                'qualification_type_id' => $postGraduate
            ],
            [
                'name' => 'B.Pharmacy',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.P.T',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'B.Sc.B.Ed.',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'Primary Teacher Training',
                'qualification_type_id' => $graduate
            ],
            [
                'name' => 'M.Ed.',
                'qualification_type_id' => $postGraduate
            ]
        ]);
    }
}