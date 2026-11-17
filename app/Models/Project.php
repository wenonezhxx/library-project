<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
public function client()
{
    return $this->belongsTo(Client::class);
}

public function tasks()
{
    return $this->hasMany(Task::class);
}

public function services()
{
    return $this->belongsToMany(Service::class);
}

public function reviews()
{
    return $this->hasMany(Review::class);
} 
}
