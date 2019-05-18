<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tmail extends Model
{
    protected $guarded = [];
    use SoftDeletes;
}
