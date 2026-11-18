<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = [
        'name',
        'artist_id',
        'genre_id',
        'material_id'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function exhibitions()
    {
        return $this->belongsToMany(
            Exhibition::class,
            'exhibitions_has_artworks',
            'artwork_id',
            'exhibition_id'
        );
    }
}
