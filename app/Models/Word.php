<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['name', 'small_category_id'];

    public function smallCategory()
    {
        return $this->belongsTo('App\Models\SmallCategory');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
