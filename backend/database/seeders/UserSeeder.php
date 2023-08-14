<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $arrayOfAdmins = [

        //     [
        //         'name' => 'Sonam Phuntsog', 
        //         'email' => 'spsither@gmail.com',                 
        //     ],
        //     [
        //         'name' => 'Rinzin', 
        //         'email' => 'rinzin@tibet.net',                 
        //     ],
        //     [
        //         'name' => 'Kunga Jigmey', 
        //         'email' => 'kg@tibet.net',                 
        //     ],            
        // ];
        // collect($arrayOfAdmins)->each(function ($admin){
        //     $user = User::factory()->create($admin);//->assignRole('admin');
        //     $user->givePermissionTo(Role::findByName('admin')->permissions);
        // });        

        // $arrayOfReader = [
        //     [
        //         'name' => 'Sonam', 
        //         'email' => 'sp@tibet.net',                 
        //     ],            
        // ];
        // collect($arrayOfReader)->each(function ($reader){
        //     $user = User::factory()->create($reader);//->assignRole('reader');
        //     $user->givePermissionTo(Role::findByName('reader')->permissions);
        // });
        
        // $arrayOfInventoryManager = [
        //     [
        //         'name' => 'Rinchen', 
        //         'email' => 'rinchen@tibet.net',                 
        //     ],
        // ];
        // collect($arrayOfInventoryManager)->each(function ($reader){
        //     $user = User::factory()->create($reader);//->assignRole('inventory manager');
        //     $user->givePermissionTo(Role::findByName('inventory manager')->permissions);
        // });
        \App\Models\User::factory(10)->create();
    }
}