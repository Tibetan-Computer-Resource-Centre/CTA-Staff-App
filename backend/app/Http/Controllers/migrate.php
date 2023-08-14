<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\AppointmentCategory;
use App\Models\Contract;
use App\Models\Country;
use App\Models\Designation;
use App\Models\Document;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Family;
use App\Models\Honour;
use App\Models\JobHistory;
use App\Models\JobHistoryCategory;
use App\Models\Leave;
use App\Models\Office;
use App\Models\PostAllocation;
use App\Models\PostAllocationData;
use App\Models\Probation;
use App\Models\Relation;
use App\Models\RetirementExtension;
use App\Models\Staff;
use App\Models\State;
use App\Models\Status;
use App\Models\Town;
use App\Models\Training;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
    //
    function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}
function makeNull($item, $NaArray = [
    '0',
    'NA',
    'Na',
    'N/a',
    '',
    'n',
    'na',
    'NIL',
    'info@tibet.net',
    'hh@0',
    'psc@tibet.net',
    'IN-',
    'psc@gmail.com',
    '0000-00-00',
    'a@a',
    'PSC@TIBET.NET',
    'j@0',
    'n@n',
    'na@gmail.com',
    'na@gmail',
    'nil@gmail.com',
    'resign@0',
    '--',
    '0000-00-00',
    '0-0-0',
    '1111-01-01',
])
{
    if (in_array($item, $NaArray)) {
        return null;
    }
    return $item;
}
function makeSameDate($date)
{
    if (validateDate($date, 'd/m/Y')) {
        $d = DateTime::createFromFormat('d/m/Y', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'd-m-Y')) {
        $d = DateTime::createFromFormat('d-m-Y', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'Y/m/d')) {
        $d = DateTime::createFromFormat('Y/m/d', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'Y/n/j')) {
        $d = DateTime::createFromFormat('Y/n/j', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'Y-n-j')) {
        $d = DateTime::createFromFormat('Y-n-j', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'Y-n-d')) {
        $d = DateTime::createFromFormat('Y-n-d', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'j/n/Y')) {
        $d = DateTime::createFromFormat('j/n/Y', $date);
        return $d->format('Y-m-d');
    }
    if (validateDate($date, 'Y-m-j')) {
        $d = DateTime::createFromFormat('Y-m-j', $date);
        return $d->format('Y-m-d');
    }
    return $date;
}
function fillDate($dob)
{

    $dob = makeSameDate($dob);

    if (validateDate($dob, 'Y-m-d')) {
        return $dob;
    }
    if (validateDate($dob, 'm/Y')) {
        // Log::info('dob is '. $s->dob. ' for '.$s->staffId);
        $d = DateTime::createFromFormat('m/Y', $dob);
        $date = new DateTime();
        $date->setDate($d->format('Y'), $d->format('m'), 1);
        return $date->format('Y-m-d');
    }
    if (ValidateDate($dob, 'Y')) {
        // Log::info('dob is '. $s->dob. ' for '.$s->staffId);
        $d = DateTime::createFromFormat('Y', $dob);
        $date = new DateTime();
        $date->setDate($d->format('Y'), 1, 1);
        return $date->format('Y-m-d');
    }
    if (validateDate($dob, 'Y--')) {
        // Log::info('dob is '. $s->dob. ' for '.$s->staffId);
        $d = DateTime::createFromFormat('Y--', $dob);
        $date = new DateTime();
        $date->setDate($d->format('Y'), 1, 1);
        return $date->format('Y-m-d');
    }
    if (validateDate($dob, 'Y-0-0')) {
        // Log::info('dob is '. $s->dob. ' for '.$s->staffId);
        $d = DateTime::createFromFormat('Y-0-0', $dob);
        $date = new DateTime();
        $date->setDate($d->format('Y'), 1, 1);
        return $date->format('Y-m-d');
    }
    if (validateDate($dob, 'Y-00-00')) {
        // Log::info('dob is '. $s->dob. ' for '.$s->staffId);
        $d = DateTime::createFromFormat('Y-00-00', $dob);
        $date = new DateTime();
        $date->setDate($d->format('Y'), 1, 1);
        return $date->format('Y-m-d');
    }
}

function checkDuplicateStaffID()
{
    foreach (DB::table('main')->select('StaffID')->get() as $sid) {

        $s = $sid->StaffID;
        if (str_contains($s, '-')) {
            $sy = substr($s, 0, strpos($s, '-'));
            if (DB::table('main')->where('StaffID', 'like', $sy)->exists()) {
                Log::info($s . ' ' . $sy);
            }
        }
    }
    dd('done');
}
function emptyDB()
{
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Staff::truncate();
    Address::truncate();
    Probation::truncate();
    Honour::truncate();
    Family::truncate();
    JobHistory::truncate();
    Document::truncate();
    PostAllocation::truncate();
    PostAllocationData::truncate();
    RetirementExtension::truncate();
    Contract::truncate();
    Leave::truncate();
    Experience::truncate();
    Training::truncate();
    // Education::truncate();

    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
}
class migrate extends Controller
{
    private static $dateOffset = 24 * 60 * 60;

    public function staff()
    {
        emptyDB();
        $count = 0;
        $duplicateStaffId = 0;
        $probationCount = 0;
        $honourCount = 0;
        $fatherCount = 0;
        $motherCount = 0;
        $permanentAddressCount = 0;
        $birthPlaceAddressCount = 0;

        $firstJobHistoryCount = 0;

        Log::info('Staffs migration starting  ************************************');
        ini_set('max_execution_time', 60 * 10); // To avoid Maximum execution time of 60 seconds exceeded error
        $result = DB::table('main')->get();
        foreach ($result as $row) {

            $s = new Staff();
            $s->staffId = $row->StaffID;
            $s->name = $row->name;
            $s->familyName = makeNull($row->familyname);
            $s->namet = makeNull($row->namet);
            $s->familyNamet = makeNull($row->familynamet);

            $s->gender_id = $row->gender;
            $s->dob = fillDate(makeNull($row->dob));
            $s->joiningDate = gmdate("Y-m-d", self::$dateOffset + $row->firstappointmentdate);
            $s->rcNo = makeNull($row->rc);
            $s->gbNo = makeNull($row->gb);
            $s->passportNo = makeNull($row->passport);
            $s->email = makeNull($row->email);
            $s->phoneNo = makeNull($row->phone);
            $s->appointment_category_id = AppointmentCategory::where('name', DB::table('listappointmentcategory')->find($row->appointmentcategory)->name)->first()->id;
            $s->leavingDate = fillDate(makeNull($row->leavingdate));
            if(DB::table('liststatus')->find($row->status) !== null){
               $s->status_id = Status::where('name', DB::table('liststatus')->find($row->status)->name)->first()->id;
            }else{
                Log::alert('Staff '.$row->StaffID .' status '.$row->status.' is not in liststatus');
            }
            $s->remarks = makeNull($row->remarks);

            // $row->dosvaliditydate; what is this ?

            /**
             * save staff record
             */
            $s->save();
            $count++;

            // $row->image = makeNull($row->image);
            // if ($row->image && File::exists(public_path('upload_psc/' . $row->image))) {
            //     $pathToFile = public_path('upload_psc/' . $row->image);
            //     $s->addMedia($pathToFile)->toMediaCollection('mugshot');
            // }

            /**
             * Add staff's honour 
             */
            $row->honour = makeNull($row->honour);
            $row->honourdate = gmdate("Y-m-d", self::$dateOffset + $row->honourdate);
            if ($row->honour) {
                // Log::info([$s->staffId, $row->honour, $row->honourdate]); 
                $h = new Honour();
                $h->staff_id = $s->id;
                $h->honour_type_id = $row->honour;
                $h->date = $row->honourdate;
                $h->save();
                $honourCount++;
            }

            /**
             * Add staff's probation
             */
            $row->pfrom = makeSameDate(makeNull($row->pfrom));
            $row->pto = makeSameDate(makeNull($row->pto));

            if ($row->pfrom || $row->pto) {
                $p = new Probation();
                $p->staff_id = $s->id;
                $p->from = $row->pfrom;
                $p->to = $row->pto;
                $p->save();
                $probationCount++;
                // Log::info($p);         
            }

            /**
             * Add staff's parents
             */
            $row->fathername = makeNull($row->fathername);
            $row->fathernamet = makeNull($row->fathernamet);
            $row->fathergb = makeNull($row->fathergb);
            if ($row->fathername || $row->fathernamet || $row->fathergb) {
                // Log::info([$s->staffId, $row->fathername, $row->fathernamet, $row->fathergb]);
                $f = new Family();
                $f->staff_id = $s->id;
                $f->name = $row->fathername;
                $f->namet = $row->fathernamet;
                $f->GbNo = $row->fathergb;
                $f->relation_id = Relation::where('name', 'father')->first()->id;
                $f->gender_id = 1;
                $f->save();
                $fatherCount++;
            }

            $row->mothername = makeNull($row->mothername);
            $row->mothernamet = makeNull($row->mothernamet);
            $row->mothergb = makeNull($row->mothergb);
            if ($row->mothername || $row->mothernamet || $row->mothergb) {
                // Log::info([$s->staffId, $row->mothername, $row->mothernamet, $row->mothergb]);
                $f = new Family();
                $f->staff_id = $s->id;
                $f->name = $row->mothername;
                $f->namet = $row->mothernamet;
                $f->GbNo = $row->mothergb;
                $f->relation_id = Relation::where('name', 'mother')->first()->id;
                $f->gender_id = 2;
                $f->save();
                $motherCount++;
            }

            /**
             * Add staff's permanent address
             */
            $row->address = makeNull($row->address);
            $row->town = makeNull($row->town);
            if ($row->address || $row->town) {
                $a = new Address();
                $a->address_type_id = 1; // Permanent Address
                $a->staff_id = $s->id;
                $a->address_line_1 = $row->address;

                if ($row->town === 1111) {
                    $a->country_id = Country::where('name', 'Tibet')->first()->id;
                } else if ($row->town === 1095) {
                    $a->state_id = State::where('name', 'Nagaland')->first()->id;
                    $a->country_id = State::find($a->state_id)->country->id;
                } else if ($row->town) {
                    $a->town_id = Town::where('name', DB::table('listtown')->find($row->town)->name)->first()->id;
                    $a->state_id = Town::find($a->town_id)->state->id;
                    $a->country_id = State::find($a->state_id)->country->id;
                }
                $a->save();
                $permanentAddressCount++;
                // Log::info($a);
                // Log::info(implode(" ==> ", [$s->staffId, $row->address, DB::table('listtown')->find($row->town)?->name]));
            }
            /**
             * Add staff's birth place
             */
            $row->birthplace = makeNull($row->birthplace);
            if ($row->birthplace) {
                $a = new Address();
                $a->address_type_id = 2; // Birth place
                $a->staff_id = $s->id;
                $a->address_line_1 = $row->birthplace;
                $a->save();
                $birthPlaceAddressCount++;
            }
            /**
             * First Designation and First Department
             */
            $row->firstdepartment = makeNull($row->firstdepartment);
            $row->firstdesignation = makeNull($row->firstdesignation);
            if ($row->firstdesignation || $row->firstdepartment) {

                $jh = new JobHistory();
                $jh->staff_id = $s->id;
                if ($row->firstdesignation) {
                    if (is_null(DB::table('listdesignation')->find($row->firstdesignation))) {
                        Log::alert('firstdesignation where the department is not found in listdesignation ' . $row->firstdesignation);
                    } else {

                        $jh->designation_id = Designation::where('name', DB::table('listdesignation')->find($row->firstdesignation)->name)->first()->id;
                    }
                }
                if ($row->firstdepartment) {
                    if (is_null(DB::table('listdepartment')->find($row->firstdepartment))) {
                        Log::alert('firstdepartment where the department is not found in listdepartment ' . $row->firstdepartment);
                    } else {
                        $jh->office_id = Office::where('name', DB::table('listdepartment')->find($row->firstdepartment)->name)->first()->id;
                    }
                }
                $jh->job_history_category_id = JobHistoryCategory::where('name', 'First Appointment')->first()->id;
                $jh->date = $s->joiningDate;
                $jh->remarks = 'First Appointment';
                $jh->save();
                $firstJobHistoryCount++;
            }
        }
        Log::info($count . ' staff records saved  ***************************************');

        $info = [
            'No of staffs migrated' => $count,
            'Number of records with duplicate StaffId' => $duplicateStaffId,
            'Number of probation records created' => $probationCount,
            'Number of honour records created' => $honourCount,
            'Number of fathers entered in family' => $fatherCount,
            'Number of mothers entered in family' => $motherCount,
            'Number of permanent address created' => $permanentAddressCount,
            'Number of birth place address created' => $birthPlaceAddressCount,
            'Number of records added in job histories as first designation' => $firstJobHistoryCount++,
        ];

        return $this->sendResponse('Migration finished', $info);
    }
}
