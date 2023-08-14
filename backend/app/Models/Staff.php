<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Family;
use App\Models\Leave;
use App\Models\Education;
use App\Models\Experience;
use App\Models\RetirementExtension;
use App\Models\Attendance;
use App\Models\BloodGroup;
use App\Models\Gender;
use App\Models\AppointmentCategory;
use App\Models\Status;
use App\Models\Address;
use App\Models\Honour;
use App\Models\Training;
use App\Models\Probation;
use App\Models\Contract;
use App\Models\Document;
use App\Models\JobHistory;
use Illuminate\Database\Eloquent\Casts\Attribute;
function formatDays($days)
{
    return Carbon::create()->diff(Carbon::create()->addDays($days))
        ->format('%y years, %m months, %d days');
}
class Staff extends Model
{
    use HasFactory;

    public $table = 'staffs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'staffId',
        'name',
        'namet',
        'familyName',
        'familyNamet',
        'gender_id',
        'dob',
        'office_id',
        'designation_id',
        'qualification_id',
        'duty_id',
        'rcNo',
        'gbNo',
        'appointment_category_id',
        'joiningDate',
        'leavingDate',
        'passportNo',
        'email',
        'phoneNo',
        'status_id',
        'blood_group_id',
        'icNo',
        'aadhaarNo',
        'panNo',
        'remarks',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [
        'gender',
        'bloodGroup',
        'appointmentCategory',
        'status',
        'leaves',
        'honours'
    ];

    public function families()
    {
        return $this->hasMany(Family::class);
    }
    /**
     * When staff A has family staff B as A's brother.
     * Staff B also has A as his brother. 
     * Family relations are two way.
     */
    // public function reverseFamilies()
    // {
    //     return $this->hasMany(Family::class, 'related_staff_id');
    // }
    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    /**
     * Added App\\Models\\Staff::education() because when /staffs/{staff}/educations/{education} is hit
     * Laravel throws BadMethodCallException exception 
     * Call to undefined method App\\Models\\Staff::education()
     * 
     * whereas when /staffs/{staff}/educations is hit
     * Laravel calls App\\Models\\Staff::educations()
     */
    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function retirementExtensions()
    {
        return $this->hasMany(RetirementExtension::class);
    }
    public function jobHistories()
    {
        return $this->hasMany(JobHistory::class);
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function appointmentCategory()
    {
        return $this->belongsTo(AppointmentCategory::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function honours()
    {
        return $this->hasMany(Honour::class);
    }
    public function probations()
    {
        return $this->hasMany(Probation::class);
    }
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
