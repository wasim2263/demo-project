<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
  //  protected $table="users";
   // protected $fillable=['name','email','password'];
    protected $table="course";
    protected $fillable=['course_title','course_code','imag'];

}
