<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'start_time', 'finish_time', 'color', 'description', 'slug', 'patient_id', 'user_id'];

    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);

        if ($this->where('slug', $slug)->first())
            $this->attributes["slug"] = $slug . '-' . rand(20, 9999999);
        else
            $this->attributes["slug"] = $slug;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
