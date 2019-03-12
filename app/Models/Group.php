<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'groupId'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
