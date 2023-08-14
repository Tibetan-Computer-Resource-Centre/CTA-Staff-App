<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AddressType;
class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressType::insert([
            ['name'=>'Permanent Address'],
            ['name'=>'Birth Place'],
            ['name'=>'Current Address'],
        ]);
    }
}
