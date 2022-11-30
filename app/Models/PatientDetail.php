<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PatientDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'height', 'weight', 'activity_value', 'bmr', 'tde', 'goal', 'start_goal', 'ideal_goal',
        'max_goal', 'macro_distribution_id', 'diet_type_id', 'age_range_id', 'fasting', 'slug', 'patient_id',
    ];

    
    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);

        if ($this->where('slug', $slug)->first())
            $this->attributes["slug"] = $slug . '-' . rand(20, 9999999);
        else
            $this->attributes["slug"] = $slug;
    }

    public function macro()
    {
        return $this->belongsTo(MacroDistribution::class, 'macro_distribution_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
