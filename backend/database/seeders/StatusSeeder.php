<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inService = 1;
        $disengaged = 2;
        Status::insert([
            [
                'name' => 'CTA Civil Service',
                'status_type_id' => $inService
            ],
            [
                'name' => 'On Leave',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Retirement Extd',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Re-Appoint',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Retired',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Resigned',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Deceased',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Terminated',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Term Ended',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Pre-Retirement',
                'status_type_id' => $disengaged,
            ],
            [
                'name' => 'Special Appt. OOT Rep.',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Contractual',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Direct Elected',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Special Appointment 18',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Rangkhung',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Probation Period',
                'status_type_id' => $inService,
            ],
            [
                'name' => 'Removal/Dismissal',
                'status_type_id' => $disengaged,
            ],
        ]);
    }
}


