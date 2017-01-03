<?php namespace App\Http\Controllers;
use Validator;
use Redirect;
use Request;
use Session;
use \Input as Input;
use DB;
class cust_imuController extends Controller 
{
  public function cust_imu()
  {
    $name=Input::input('name');
        $email=Input::input('email');
        $phone=Input::input('phone');
        $address=Input::input('address');
        $password=Input::input('password');
        $pass=Input::input('old');
        $im=Input::file('image');
        $id=session('kept');
        echo $name;
        $user = DB::table('customer')->where('custid',$id)->first();
        echo $user->pass;
        if ($pass==$user->pass){
        if($name!=null){
                    DB::table('customer')->where('custid',$id)->update(array('name' => "$name"));
            }
        
        if($email!=null){
            
                    DB::table('customer')->where('custid',$id)->update(array('email' => "$email"));
            }
    
        if($phone!=null){
           
                    DB::table('customer')->where('custid',$id)->update(array('phone' => "$phone"));
            }
            if($password!=null){
           
                    DB::table('customer')->where('custid',$id)->update(array('pass' => "$password"));
            }
            if($address!=null){
           
                    DB::table('customer')->where('custid',$id)->update(array('address' => "$address"));
            }
            if($im!=null){
                $string=$id.'.jpg';
                $im->move('upload/customer',$string);
                DB::table('customer')->where('custid',$id)->update(array('image' => "$string"));
            }
            return Redirect('customer_profile');
        }
         return Redirect('cust_setting');
      }

  
}