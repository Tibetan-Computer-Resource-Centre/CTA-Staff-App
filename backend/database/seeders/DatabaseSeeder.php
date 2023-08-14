<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        $this->call([
            StaffSeeder::class, 
            // PermissionsSeeder::class,
            UserSeeder::class,
            // GenderSeeder::class,
            // QualificationTypeSeeder::class,
            // QualificationSeeder::class,
            // DesignationSeeder::class,
            // AppointmentCategorySeeder::class,
            // StatusTypeSeeder::class,
            // StatusSeeder::class,
            // DutySeeder::class,
            // BloodGroupSeeder::class,
            // OfficeCategorySeeder::class, 
            // OfficeSeeder::class, 
            // RelationSeeder::class,
            // FamilySeeder::class,
            // CountrySeeder::class,
            // StateSeeder::class,
            // TownSeeder::class,
            // AddressTypeSeeder::class,
            // AddressSeeder::class,
            // LeaveCategorySeeder::class,
            // LeaveSeeder::class,            
            // JobHistoryCategorySeeder::class, 
            // EmploymentTypeSeeder::class,
            // ExperienceSeeder::class,
            // EducationalInstitutionSeeder::class,
            // EducationSeeder::class,
            // AttendanceStatusSeeder::class,
            // AttendanceSeeder::class,
            // RetirementExtensionSeeder::class,
            // JobHistorySeeder::class,                        
            // CountrySeeder::class,
            // StateSeeder::class,
            // TownSeeder::class,
            // HonourTypeSeeder::class,
            // HonourSeeder::class,
            // ProbationSeeder::class,
            // ContractSeeder::class,
            // TrainingInstitutionSeeder::class,
            // TrainingSeeder::class,
            // DocumentSeeder::class,
            // PostAllocationSeeder::class,
            // PostAllocationDataSeeder::class,
            // LeaveSeeder::class,            
        ]);                             
    }
}
