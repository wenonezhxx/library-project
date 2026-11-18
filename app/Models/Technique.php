<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = ['name'];

    public function artists()
    {
        return $this->belongsToMany(
            Artist::class,
            'artists_has_techniques',
            'technique_id',
            'artist_id'
        );
    }
}
