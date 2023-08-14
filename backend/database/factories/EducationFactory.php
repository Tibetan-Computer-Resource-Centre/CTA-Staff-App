<?php

namespace Database\Factories;

use App\Models\EducationalInstitution;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Qualification;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();                
        $qualifications = Qualification::pluck('id')->toArray();
        $educational_institutions = EducationalInstitution::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'qualification_id' => $this->faker->randomElement($qualifications),
            'fieldOfStudy' => $this->faker->sentence(),
            'educational_institution_id' => $this->faker->randomElement($educational_institutions),
            'grade' => $this->faker->bothify('##/###'),
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->text(),
        ];
    }
}