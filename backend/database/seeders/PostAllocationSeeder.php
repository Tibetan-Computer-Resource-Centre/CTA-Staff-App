<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostAllocation;
use App\Models\PostAllocationData;
class PostAllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PostAllocation::factory(3)->create();
        // for($i = 1; $i <= 3; $i++){
        //     for($j = 1; $j <= 98; $j++){
        //         for($k = 1; $k <= 11; $k++){
        //             $p = PostAllocationData::factory()->make([ 'office_id' => $j, 'designation_id' => $k, 'post_allocation_id' => $i]);
        //             $p->save();
        //         }
        //     }
        // }
    }
}
