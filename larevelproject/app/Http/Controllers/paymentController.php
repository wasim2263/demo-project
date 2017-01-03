<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $user = DB::table('order')->where('shipment_status', 0)->paginate(6);
        
         return view('Agency.payment',compact('user'));
     
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
         $order_id=$request->input('order_id');
         $payment=$request->input('payment');
         $cost=$request->input('cost');
         $payed=$request->input('payed');
         $new=$payed+$payment;
         $rem=$cost-$new;
         echo $rem;
         if ($rem==0) {
             # code...

                DB::table('order')
            ->where('order_id', $order_id)
            ->update(['payment' => $new,'shipment_status' => 1]);
               
         } else {
 DB::table('order')
            ->where('order_id', $order_id)
            ->update(['payment' => $new]);
                           # code...

        DB::table('customerorder')
            ->where('order_id', $order_id)
            ->update(['status' =>3]);
         }
         
        return Redirect('Payment');
    
       

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
