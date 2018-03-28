<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingItem extends Model
{
    protected $fillable = ['description', 'url', 'recommended_by'];
}
