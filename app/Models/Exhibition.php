<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [
        'name',
        'museum_id'
    ];

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }

    public function artworks()
    {
        return $this->belongsToMany(
            Artwork::class,
            'exhibitions_has_artworks',
            'exhibition_id',
            'artwork_id'
        );
    }
}
