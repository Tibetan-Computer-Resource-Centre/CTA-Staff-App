<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\TrainingInstitution;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();  
        $training_institutes = TrainingInstitution::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),            
            'title' => $this->faker->sentence(),            
            'training_institution_id' => $this->faker->randomElement($training_institutes),
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->text(),
        ];
    }
}
