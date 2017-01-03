<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class weddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $user = DB::table('wedding')->paginate(6);
        //return view('message');
       
         return view('wedding',compact('user'));
     }
    public function woman()
    {
        //
          $user = DB::table('wedding')->where('type','woman')->paginate(6);

         return view('wedding',compact('user'));
    }
    public function man()
    {
        //
          $user = DB::table('wedding')->where('type','man')->paginate(6);

         return view('wedding',compact('user'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $color=$request->input('color');
            $price=$request->input('price');
            $type=$request->input('type');
            $amount=$request->input('amount');
            $size=$request->input('size');
            $date=$request->input('date');
            $product_id=$request->input('product_id');
            $email=session('key');
            $cost=$price*$amount;
            $product_name=$request->input('product_name');
            $name=session('keyname');
            
        if ($color!=null && $amount!=null && $size!=null && $date!=null) {
            # code...
        //if($color==null){


           $nid= DB::table('order')->insertGetId(
            array('order_cost' => $cost, 'customer_mail' =>$email,'date'=>$date,'size'=>$size,'color'=>$color,'type'=>$type,
                'product_id'=>$product_id,'amount'=>$amount,'customer_name'=>$name,'product_name'=>$product_name));
            echo $cost;
               DB::table('customerorder')->insert(
                array('cost' => $cost,'order_id'=>$nid,'email' =>$email,'date'=>$date,'product_name'=>$product_name,'amount'=>$amount));  
          
            return Redirect ('order')->with('status','Order is succrssfully submitted');
        } else {
            # code...
            return Redirect ('order')->with('status','Order submission failed');
        }
    


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
        return view('ass',compact('id'));
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
         $user = DB::table('wedding')->where('wed_id',$id)->first();

    
        return Redirect ('order')->with('wedid',$user);
    
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
