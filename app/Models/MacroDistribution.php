<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MacroDistribution extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'min_cho', 'ideal_cho', 'max_cho',
        'min_protien', 'ideal_protien', 'max_protien',
        'min_fat', 'ideal_fat', 'max_fat'
    ];
}
