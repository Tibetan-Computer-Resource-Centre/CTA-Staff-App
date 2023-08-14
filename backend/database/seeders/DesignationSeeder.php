<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;
class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Designation::insert([
            // [                
            //     'name' => 'Sikyong',
            //     'namet' => 'སྲིད་སྐྱོང་།',
            //     'sameDesignationNotifiable' => false,
            // ],
            // [                
            //     'name' => 'Kalon',
            //     'namet' => 'བཀའ་བློན།',
            //     'sameDesignationNotifiable' => false,
            // ],
            [                
                'name' => 'Secretary',
                'namet' => 'དྲུང་ཡིག་ཆེན་མོ།',
                'sameDesignationNotifiable' => false,
            ],
            [                
                'name' => 'Additional Secretary',
                'namet' => 'དྲུང་ཆེ་ལས་འཕར།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Joint Secretary',
                'namet' => 'ཟུང་འབྲེལ་དྲུང་ཆེ།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Deputy Secretary',
                'namet' => 'དྲུང་ཆེ་གཞོན་པ།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Under Secretary',
                'namet' => 'དྲུང་གཞོན་ལས་རོགས།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Section Officer',
                'namet' => 'སྡེ་ཚན་འགན་འཛིན།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Office Superintendent',
                'namet' => 'ལས་ཁུངས་དོ་དམ་པ།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Office Assistant',
                'namet' => 'ལས་དྲུང་།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Senior Clerk',
                'namet' => 'རྒན་དྲུང་།',
                'sameDesignationNotifiable' => true,
            ],
            [                
                'name' => 'Junior Clerk',
                'namet' => 'གཞོན་དྲུང་།',
                'sameDesignationNotifiable' => true,
            ],
            [
                'name' => 'Staff',
                'namet' => 'ལས་བྱ།',
                'sameDesignationNotifiable' => false,
            ]
        ]);
    }
}
