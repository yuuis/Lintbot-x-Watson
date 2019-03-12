<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LargeCategory extends Model
{
    protected $fillable = ['name'];

    public function smallCategories()
    {
        return $this->hasMany('App\Models\SmallCategory');
    }
}
