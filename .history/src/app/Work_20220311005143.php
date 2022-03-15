<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['h_no' => 'required',
    'model' => 'required',
    'material' => 'required',
    'plate_thickness' => 'required',
    'number_of_sheets' => 'required',
    'supplement'];
}
