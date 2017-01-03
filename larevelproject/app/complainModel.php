<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complainModel extends Model
{
    //
      protected $table="complain";
    protected $fillable=['name','email','complain'];

}
