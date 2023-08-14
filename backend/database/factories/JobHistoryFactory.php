<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\JobHistoryCategory;
use App\Models\Designation;
use App\Models\Office;
use App\Models\Duty;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobHistory>
 */
class JobHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $jobHistoryCategories = JobHistoryCategory::pluck('id')->toArray();
        $designations = Designation::pluck('id')->toArray();
        $offices = Office::pluck('id')->toArray();
        $duties = Duty::pluck('id')->toArray();
        return [
            'date'=> $this->faker->date('Y_m_d'),
            'staff_id'=> $this->faker->randomElement($staffs),
            'job_history_category_id'=> $this->faker->randomElement($jobHistoryCategories),
            'designation_id'=> $this->faker->randomElement($designations),
            'office_id'=> $this->faker->randomElement($offices),
            'duty_id'=> $this->faker->randomElement($duties),
            'remarks'=> $this->faker->text(),
        ];
    }
}
