<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class womenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $user = DB::table('woman')->paginate(6);
        //return view('message');
       
         return view('women',compact('user'));

    }
    public function sare()
    {
        //
          $user = DB::table('woman')->where('type','sare')->paginate(6);

         return view('women',compact('user'));
    }
    public function salwarkameez()
    {
        //
          $user = DB::table('woman')->where('type','salwar kameez')->paginate(6);

         return view('women',compact('user'));
    }

 public function nightwear()
    {
        //
          $user = DB::table('woman')->where('type','nightwear')->paginate(6);

         return view('women',compact('user'));
    }
    public function scarves()
    {
        //
          $user = DB::table('woman')->where('type','scarves')->paginate(6);

         return view('women',compact('user'));
    }
     public function dupatta()
    {
        //
          $user = DB::table('woman')->where('type','dupatta')->paginate(6);

         return view('women',compact('user'));
    }
    public function shawls()
    {
        //
          $user = DB::table('woman')->where('type','shawls')->paginate(6);

         return view('women',compact('user'));
    }

 public function fabric()
    {
        //
          $user = DB::table('woman')->where('type','fabric')->paginate(6);

         return view('women',compact('user'));
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
         $user = DB::table('woman')->where('type',$id)->paginate(6);
        return view('women',compact('user'));
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
          $user = DB::table('woman')->where('woman_id',$id)->first();

    
        return Redirect ('order')->with('womanid',$user);
    
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
