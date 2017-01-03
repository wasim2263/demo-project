<?php namespace App\Http\Controllers;
use Validator;
use Redirect;
use Request;
use Session;
use \Input as Input;
use DB;
class ApplyController extends Controller 
{
  public function imu()
  {
    // getting all of the post data
    $category=Input::input('cat');
    
    $Type=Input::input('Type');
    $Name=Input::input('Name');
    $Price=Input::input('Price');
    //echo $Type;
    if($category=='Woman')
    {
        echo 'woman';
      $id = DB::table('woman')->insertGetId( array(
                              'woman_name' => $Name,
                            'womanprice' => $Price,
                           'type' => $Type)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/Woman',$string);
      DB::table('woman')->where('woman_id',$id)->update(array('woman_image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );

      return Redirect('Update_Product');
    }
    else if($category=='Kids')
    {
        echo 'kids';
      $id = DB::table('kids')->insertGetId( array(
                              'kidspro_name' => $Name,
                            'kidsprice' => $Price,
                           'type' => $Type)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/Kids',$string);
      DB::table('kids')->where('kidspro_id',$id)->update(array('kids_image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );
     return Redirect('Update_Product');
   }
    else if($category=='Man')
    {
        echo 'man';
      $id = DB::table('man')->insertGetId( array(
                              'man_name' => $Name,
                            'manprice' => $Price,
                           'type' => $Type)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/Man',$string);
      DB::table('man')->where('man_id',$id)->update(array('man_image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );
   return Redirect('Update_Product');
    }

        else if($category=='Wedding')
    {
        echo 'wedding';
      $id = DB::table('wedding')->insertGetId( array(
                              'wed_name' => $Name,
                            'wed_price' => $Price,
                           'type' => $Type)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/Wedding',$string);
      DB::table('wedding')->where('wed_id',$id)->update(array('wed_image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );
   return Redirect('Update_Product');
    }

  }
  
}