<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatsonLog extends Model
{
    protected $fillable = ['request', 'response'];
}
