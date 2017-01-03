<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class orderlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $user = DB::table('order')->where('status', 0)->paginate(6);
        
         return view('Agency.orderlist',compact('user'));
       
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
        DB::table('order')->where('order_id',$id)->delete();
        echo $id;
         DB::table('customerorder')
            ->where('order_id', $id)
            ->update(['status' => 2]);
            
        return Redirect('Orderlist');
      
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
         $user = DB::table('order')->where('order_id', $id)->first();
           DB::table('customerorder')
            ->where('order_id', $id)
            ->update(['status' => 1]);
                 
                 DB::table('order')
            ->where('order_id', $id)
            ->update(['status' => 1]);
           
        return Redirect('Orderlist');
    
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
