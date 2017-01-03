<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Update_Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Agency/Update_Product');
    }
    public function save1()
    {
       echo "hihi";
       return view('oi');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //   $category = $request->input('cat');
        // $type=$request->input('Type');
        //$price=$request->input('Price');
        //$name=$request->input('Name');
       // $photo=$request->input('image');
        //$imagename=$request->file('image');
        //$imagedata=mysql_real_escape_string(file_get_contents(Input::file('image')));
        //$imagetype=mysql_real_escape_string($_FILES["image"]["type"]);
      //  if(substr($imagetype,0,5)=="image"){
        ///    mysql_query("INSERT INTO `image` VALUES ('','$imagename','$imagedata')");
         //   echo "uploading image";
       // }
      //  else{
         //   echo "insert image";
       // }
       // echo $imagename;
       
            
            $file = array('file' => Input::file('file'));
           // $image = base64_encode(file_get_contents( $request->input('imgInp')->getRealPath()));
            if($file==null) echo "string";;
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
