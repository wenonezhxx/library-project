<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
