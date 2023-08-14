<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\HonourType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Honours>
 */
class HonourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $honourTypes = HonourType::pluck('id')->toArray();
        return [            
            'staff_id' => $this->faker->randomElement($staffs),
            'honour_type_id' => $this->faker->randomElement($honourTypes),
            'date' => $this->faker->date('Y_m_d'),            
            'remarks' => $this->faker->text(),
        ];
    }
}
