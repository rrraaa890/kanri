<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['h-no','model','material','plate-thickness','number-of-sheets','supplement'];
}
