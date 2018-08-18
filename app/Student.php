<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'roll_no','first_name','last_name','dob','gender','class','image',
    ];
}
