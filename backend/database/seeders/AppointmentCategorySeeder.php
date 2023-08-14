<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AppointmentCategory;
class AppointmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppointmentCategory::insert([
            [
                'name' => 'CTA General Staff',
                'isNotifiable' => true,
                'isActualStaff' => true,
            ],
            [
                'name' => 'Contractual',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Deputation',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Direct Elected',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Special Appointment',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Surjog',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Specialisation',
                'isNotifiable' => true,
                'isActualStaff' => true,
            ],
            [
                'name' => 'Migkar',
                'isNotifiable' => true,
                'isActualStaff' => true,
            ],
            [
                'name' => 'Direct Appointment',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => 'Contractual w/o Post',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
            [
                'name' => '18 Special Appointment',
                'isNotifiable' => false,
                'isActualStaff' => false,
            ],
        ]);
    }
}
