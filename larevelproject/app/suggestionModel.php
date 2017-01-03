<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestionModel extends Model
{
    //
      protected $table="suggestion";
    protected $fillable=['name','email','suggestion'];
}
