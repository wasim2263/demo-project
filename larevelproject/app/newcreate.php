<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newcreate extends Model
{
    //
      protected $table="course";
    protected $fillable=['course_code','course_title'];
}
