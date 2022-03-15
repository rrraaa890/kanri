<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['h_no')->unique();

    $table->string('model');
    $table->string('material');
    $table->string('plate_thickness''number_of_sheets','supplement'];
}
