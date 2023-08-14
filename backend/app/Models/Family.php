<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'staff_id',
        'name',
        'namet',
        'relation_id',
        'rcNo',
        'gbNo',
        'related_staff_id',
        'remarks',
        'gender_id',
        'dob',
        'workplace'
    ];  
    
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [
        'relation',
        'gender',
        'relatedStaff',
    ];
    
    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }
    public function relatedStaff(){
        return $this->belongsTo(Staff::class);
    }
    public function relation(){
        return $this->belongsTo(Relation::class);
    }
}
