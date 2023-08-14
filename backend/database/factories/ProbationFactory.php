<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Designation;
use App\Models\Office;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Probation>
 */
class ProbationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $designations = Designation::pluck('id')->toArray();
        $offices = Office::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'designation_id'=> $this->faker->randomElement($designations),
            'office_id'=> $this->faker->randomElement($offices),
            'remarks' => $this->faker->text(),
        ];
    }
}
