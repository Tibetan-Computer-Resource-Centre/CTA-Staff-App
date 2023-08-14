<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'staffId'                => ['max:255', Rule::unique('staffs', 'staffId')->ignore($this->staff), 'required', 'string'],
            'name'                   => ['max:255', 'required', 'string'],
            'namet'                  => ['max:255', 'string','nullable'],
            'familyName'             => ['max:255', 'string','nullable'],
            'familyNamet'            => ['max:255', 'string','nullable'],
            'rcNo'                   => ['max:255', 'string','nullable'],
            'gbNo'                   => ['max:255', 'string','nullable'],
            'dob'                    => ['date', 'before:today'],
            'joiningDate'            => ['date_format:Y-m-d', 'before_or_equal:today', 'required','nullable'],
            'leavingDate'            => ['date_format:Y-m-d', 'after_or_equal:joiningDate','nullable'],
            'remarks'                => ['max:65535','nullable'],
            'passportNo'             => ['max:255', 'string','nullable'],
            'email'                  => ['email', 'max:255', 'string','nullable'],
            'phoneNo'                => ['max:20', 'string','nullable'],
            'status_id'              => ['exists:statuses,id','nullable'],
            'blood_group_id'         => ['exists:blood_groups,id','nullable'],
            'icNo'                   => ['max:255', 'string','nullable'],
            'aadhaarNo'              => ['max:12', 'string','nullable'],
            'panNo'                  => ['max:10', 'string','nullable'],
            'gender_id'              => ['exists:genders,id'],
            'appointment_category_id' => ['exists:appointment_categories,id','nullable'],
        ];
    }
}
