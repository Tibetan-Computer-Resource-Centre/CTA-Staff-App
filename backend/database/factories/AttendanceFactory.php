<?php

namespace Database\Factories;

use App\Models\AttendanceStatus;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $staffs = Staff::pluck('id')->toArray();
        $attendanceStatuses = AttendanceStatus::pluck('id')->toArray();
        return [
            'staff_id' => $this->faker->randomElement($staffs),
            'date' => $this->faker->date('Y_m_d'),
            'attendance_status_id' => $this->faker->randomElement($attendanceStatuses),
        ];
    }
}
