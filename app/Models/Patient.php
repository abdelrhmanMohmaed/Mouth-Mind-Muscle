<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthday',
        'email',
        'phone',
        'address',
        'gender',
    ];

    public function allergens()
    {
        return $this->belongsToMany(Allergen::class);
    }
    public function inputCalc()
    {
        return $this->hasOne(InputCalculation::class);
    }

    public function details()
    {
        return $this->hasOne(PatientDetail::class);
    }
}
