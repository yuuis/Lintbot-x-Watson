<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['text', "small_category_id"];

    public function small_category_id()
    {
        return $this->belongsToMany('App\Models\Word');
    }
}
