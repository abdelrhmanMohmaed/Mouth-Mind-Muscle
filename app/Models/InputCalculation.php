<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputCalculation extends Model
{
    use HasFactory;
    protected $fillable = [
        'milk_s',
        'milk_l',
        'milk_f',
        'vegetable',
        'fruit',
        'starch',
        'proteins_l',
        'proteins_m',
        'proteins_h',
        'fat',
        'halfstlmfat_s',
        'halfstlmfat_a',
        'stlmfat_p',
        'stlmfat_f',
        'beverages',
        'alcohol',
        'cho',
        'miscellaneous',
        'supplements',
        'slug',
        'patient_id'
    ];
}
