<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallCategory extends Model
{
    protected $fillable = ['name'];

    public function topics()
    {
        return $this->hasMany('App\Models\Topic');
    }

    public function words()
    {
        return $this->hasMany('App\Models\Word');
    }

    public function largeCategory()
    {
        return $this->belongsTo('App\Models\LargeCategory');
    }
}
