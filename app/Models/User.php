<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'userId'];

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    public function lineLogs()
    {
        return $this->hasMany('App\Models\LineLog');
    }
}