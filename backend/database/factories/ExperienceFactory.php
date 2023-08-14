<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\EmploymentType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();        
        $employmentTypes = EmploymentType::pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(),            
            'staff_id' => $this->faker->randomElement($staffs),                                                 
            'employment_type_id' => $this->faker->randomElement($employmentTypes),
            'companyName' => $this->faker->company(),
            'industry' => $this->faker->sentence(),            
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->text(),
        ];
    }
}
