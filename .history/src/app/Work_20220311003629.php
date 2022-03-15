<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['hno','model','material','plate_thickness','number_of_sheets','supplement'];
}
