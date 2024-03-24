<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name',
        'description',
        'activity_id'

    ];
    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
