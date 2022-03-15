<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['h_no')->unique();

    $table->string('model');
    $table->string('material');
    $table->string('plate_thickness');
    $table->string('number_of_sheets');
    $table->text('supplement'];
}
