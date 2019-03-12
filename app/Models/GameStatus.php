<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameStatus extends Model
{
    protected $fillable = ['name'];

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}
