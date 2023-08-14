<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Relation;
use App\Models\Gender;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $staffs = Staff::pluck('id')->toArray();
        $relations = Relation::pluck('id')->toArray();
        
        if (rand(0, 1)) {
            $genders = Gender::pluck('id')->toArray();
            return [
                'staff_id' => $this->faker->randomElement($staffs),
                'name' => $this->faker->name(),
                'dob' => $this->faker->date('Y_m_d'),
                'relation_id' => $this->faker->randomElement($relations),
                'RcNo' => $this->faker->bothify('RC/#######/????'),
                'GbNo'=> $this->faker->bothify('GB/#######/????'),
                'remarks' => $this->faker->text(),
                'gender_id' => $this->faker->randomElement($genders),
                'workplace' => $this->faker->name(),
            ];
        }
        else{
            do{
                $staff = $this->faker->randomElement($staffs);
                $relatedStaff = $this->faker->randomElement($staffs);
            }while($staff === $relatedStaff);
            
            return [
                'staff_id' => $staff,
                'related_staff_id' => $relatedStaff,
                'relation_id' => $this->faker->randomElement($relations),
                'remarks' => $this->faker->text(), 
            ];
        }

        
    }
}
