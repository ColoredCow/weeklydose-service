<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingItem extends Model
{
    protected $fillable = ['topic', 'url', 'recommended_by'];
}
