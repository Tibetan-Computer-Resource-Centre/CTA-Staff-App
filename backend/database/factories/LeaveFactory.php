<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Staff;
use App\Models\LeaveCategory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $leaveCategories = LeaveCategory::pluck('id')->toArray();
        return [            
            'staff_id' => $this->faker->randomElement($staffs),
            'leave_category_id' => $this->faker->randomElement($leaveCategories),
            'from' => $this->faker->date('Y_m_d'),
            'to' => $this->faker->date('Y_m_d'),
            'remarks' => $this->faker->text(),
        ];
    }    
}
