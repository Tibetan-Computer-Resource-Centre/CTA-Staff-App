<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use App\Models\State;
use App\Models\Town;
use App\Models\Staff;
use App\Models\AddressType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $countries = Country::pluck('id')->toArray();
        $states = State::pluck('id')->toArray();
        $towns = Town::pluck('id')->toArray();
        $staffs = Staff::pluck('id')->toArray();
        $addressTypes = AddressType::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'address_line_1' => $this->faker->streetName(),
            'address_line_2' => $this->faker->streetName(),
            'country_id' => $this->faker->randomElement($countries),
            'state_id' => $this->faker->randomElement($states),
            'town_id' => $this->faker->randomElement($towns),
            'postal_code' => $this->faker->postcode(),
            'address_type_id' => $this->faker->randomElement($addressTypes),
            // 'coordinate' => $this->faker->latitude(),
        ];
    }
}
