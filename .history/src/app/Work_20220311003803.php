<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['h_no','model','material','plate-thickness','number_of_sheets','supplement'];
}
