<?php namespace App\Http\Controllers;
use Validator;
use Redirect;
use Request;
use Session;
use \Input as Input;
use DB;
class achController extends Controller 
{
  public function achimg()
  {
    // getting all of the post data
    $category=Input::input('cat');
    $sub=Input::input('sub');
    $intro=Input::input('Type');
    $det=Input::input('message');
    $year=Input::input('Price');
    //echo $Type;
    if($category=='Company')
    {
        echo 'Company';
      $id = DB::table('achievement')->insertGetId( array(
                                'subject' => $sub,
                              'intro' => $intro,
                            'detail' => $det,
                           'year' => $year)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/company_achieve',$string);
      DB::table('achievement')->where('id',$id)->update(array('image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );

      return Redirect('index2');
    }
    else if($category=='Member')
    {
        echo 'Member';
      $id = DB::table('memberachieve')->insertGetId( array(
                                'subject' => $sub,
                              'intro' => $intro,
                            'detail' => $det,
                           'year' => $year)
                  
                  );
      echo $id;
      $string=$id.'.jpg';
      Input::file('file')->move('upload/member_achieve',$string);
      DB::table('memberachieve')->where('id',$id)->update(array('image' => "$string"));
                  //$fileName = Input::get('rename_to');
                   //Input::file('file')->move('upload','1105112.jpg');
                  //   DB::table('kids')->insert(
                 //           array(
                //               'kidspro_name' => 'john',
               //               'kids_image' => '$image',
              //              'kidsprice' => '1000',
             //              'type' => 'pant')
            //    );
      return Redirect('index2');
    }
    

    
  }
  
}