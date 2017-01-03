<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settingsModel extends Model
{
    //
    protected $table='employee';
    protected $fillable=['id','empname','emp_mail','emp_phone'];
}
