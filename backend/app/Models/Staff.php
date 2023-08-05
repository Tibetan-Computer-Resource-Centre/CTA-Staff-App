<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Staff extends Model
{
    use HasFactory;
    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    
    /**
     * Set the slug() name to lowercase while entry  
     * 
     */ 
    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower(Str::slug($value,'-')),
            set: fn (string $value) => strtolower(Str::slug($value,'-').'-'.now()) 
            // Now() function can solve the uniqueness 
        );
    }
}
