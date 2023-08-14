<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Office;
use App\Models\Designation;
use App\Models\PostAllocation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostAllocationData>
 */
class PostAllocationDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $offices = Office::pluck('id')->toArray();
        $designations = Designation::pluck('id')->toArray();
        $postAllocations = PostAllocation::pluck('id')->toArray();
        return [
            'office_id' => $this->faker->randomElement($offices),
            'designation_id' => $this->faker->randomElement($designations),
            'available' => $this->faker->numberBetween(1,50),
            'occupied' => $this->faker->numberBetween(1,40),
            'post_allocation_id' => $this->faker->randomElement($postAllocations),
        ];
    }
}
