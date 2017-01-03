<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class menController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //

        $user = DB::table('man')->paginate(6);
        //return view('message');
       
         return view('men',compact('user'));
        //return Redirect('men');
        //return Redirect::to('index');
 
       
    }
    public function panjabi()
    {
        //
          $user = DB::table('man')->where('type','panjabi')->paginate(6);

         return view('men',compact('user'));
    }
    public function pajama()
    {
        //
          $user = DB::table('man')->where('type','pajama')->paginate(6);

         return view('men',compact('user'));
    }

 public function ppSet()
    {
        //
          $user = DB::table('man')->where('type','Panjabi Pajama Set')->paginate(6);

         return view('men',compact('user'));
    }
    public function shirt()
    {
        //
          $user = DB::table('man')->where('type','shirt')->paginate(6);

         return view('men',compact('user'));
    }
     public function tshirt()
    {
        //
          $user = DB::table('man')->where('type','tshirt')->paginate(6);

         return view('men',compact('user'));
    }
    public function polo()
    {
        //
          $user = DB::table('man')->where('type','polo')->paginate(6);

         return view('men',compact('user'));
    }

 public function fatua()
    {
        //
          $user = DB::table('man')->where('type','fatua')->paginate(6);

         return view('men',compact('user'));
    }
    public function lungi()
    {
        //
          $user = DB::table('man')->where('lungi')->paginate(6);

         return view('men',compact('user'));
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
            $product_name=$request->input('product_name');
            $name=session('keyname');
            $cost=$price*$amount;
        if ($color!=null && $amount!=null && $size!=null && $date!=null) {
            # code...
        //if($color==null){

          
            $nid=DB::table('order')->insertGetId(
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
          $user = DB::table('man')->where('type',$id)->paginate(6);

       // echo $user->name;
         //$users = DB::table('kids')->get();
        //return view('message');
       
         return view('men',compact('user'));
        //return Redirect('men');
        //return Redirect::to('index');
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
         $user = DB::table('man')->where('man_id',$id)->first();

    
        return Redirect ('order')->with('manid',$user);
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
