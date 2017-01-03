<?php namespace App\Http\Controllers;
use Validator;
use Redirect;
use Request;
use Session;
use \Input as Input;
use DB;
class empController extends Controller 
{
  public function empimg()
  {
    // getting all of the post data
    echo "yahoo";
    $id=session('key2');
        $string=$id.'.jpg';
        Input::file('image')->move('upload/Employee',$string);
         DB::table('employee')->where('empid',$id)->update(array('image' => "$string"));
    
  }
  
}