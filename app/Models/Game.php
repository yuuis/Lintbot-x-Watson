<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['majority_word_id', 'wolf_word_id', 'group_id', 'game_status_id'];

    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

    public function majorityWord()
    {
        return $this->belongsTo('App\Models\Word', 'majority_word_id');
    }

    public function minorityWord()
    {
        return $this->belongsTo('App\Models\Word', 'wolf_word_id');
    }

    public function status()
    {
        return $this->hasMany('App\Models\GameStatus');
    }
    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }
}