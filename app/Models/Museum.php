<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $fillable = [
        'name',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function exhibitions()
    {
        return $this->hasMany(Exhibition::class);
    }
}
