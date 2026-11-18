<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'style_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    public function techniques()
    {
        return $this->belongsToMany(
            Technique::class,
            'artists_has_techniques',
            'artist_id',
            'technique_id'
        );
    }
}
