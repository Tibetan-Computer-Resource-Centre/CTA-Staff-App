<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Office;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
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
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'fileNo' =>  $this->faker->bothify('K/######/????'),
            'date' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->sentence(),
            'sender_office_id' => $this->faker->randomElement($offices),
        ];
    }
}
