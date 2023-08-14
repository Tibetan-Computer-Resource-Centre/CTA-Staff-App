<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Qualification;
use App\Models\Gender;
use App\Models\Designation;
use App\Models\AppointmentCategory;
use App\Models\User;
use App\Models\Status;
use App\Models\BloodGroup;
use App\Models\Address;
use App\Models\Office;
use App\Models\Duty;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            $qualifications = Qualification::pluck('id')->toArray();
            $genders = Gender::pluck('id')->toArray();
            $designations = Designation::pluck('id')->toArray();
            $offices = Office::pluck('id')->toArray();
            $duties = Duty::pluck('id')->toArray();
            $appointmentCategories = AppointmentCategory::pluck('id')->toArray();
            $status = Status::pluck('id')->toArray();
            $bloodGroups = BloodGroup::pluck('id')->toArray();        
            return [            
                'name' => $this->faker->name(),
                'familyName' => $this->faker->name(),
                'staffId' => $this->faker->bothify('PSC/########/????'),
                
                /**
                 * Removed because maintaining state in two places is bad.
                 * Get these values from JobHistories and Educations. 
                 */
                // 'qualification_id' => $this->faker->randomElement($qualifications),
                // 'designation_id' => $this->faker->randomElement($designations),
                // 'office_id' => $this->faker->randomElement($offices),
                // 'duty_id' => $this->faker->randomElement($duties),
    
                'gender_id' => $this->faker->randomElement($genders),
                'dob' => $this->faker->date('Y_m_d'),
                /**
                 * user address_id
                 */
                // 'birthPlace' => $this->faker->text(),            
                'rcNo' => $this->faker->bothify('RC/######/????'),
                'gbNo' => $this->faker->bothify('GB/#######/?????'), 
    
                // columns transferred to family table
                // 'fatherName' => $this->faker->name(), 
                // 'motherName' => $this->faker->name(),
                // 'motherRcNo' => $this->faker->bothify('RC/######/????'),
                // 'motherGbNo' => $this->faker->bothify('GB/#######/?????'), 
                // 'fatherRcNo' => $this->faker->bothify('RC/######/????'),
                // 'fatherGbNo' => $this->faker->bothify('GB/#######/?????'), 
                
                'appointment_category_id'=> $this->faker->randomElement($appointmentCategories),           
                'joiningDate' => $this->faker->date('Y-m-d'),
                'leavingDate' => $this->faker->date('Y-m-d'),
                // 'enteredByUser_id' => $this->faker->randomElement($users),
                'remarks' => $this->faker->text(),
                'status_id' => $this->faker->randomElement($status),
                'phoneNo' => $this->faker->phoneNumber(),
                'email' => $this->faker->email(),
                'passportNo' => $this->faker->bothify('Y/###/??'),
                'icNo' => $this->faker->bothify('Y/###/??'),
                'aadhaarNo' => $this->faker->bothify('############'),
                'panNo' => $this->faker->bothify('?????####?'),
                // 'registerDate' => $this->faker->date('Y_m_d'),
                'blood_group_id' => $this->faker->randomElement($bloodGroups),
            ];
        }
    }
}
