<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Office;
use App\Models\Designation;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $offices = Office::pluck('id')->toArray();
        $designations = Designation::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->text(),
            'office_id' => $this->faker->randomElement($offices),
            'designation_id' => $this->faker->randomElement($designations),
        ];
    }
}
