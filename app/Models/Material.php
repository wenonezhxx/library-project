<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['name'];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
