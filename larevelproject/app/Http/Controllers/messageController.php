<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Agency.message');
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
       $type=$request->input('cat');
       $sub=$request->input('subject');
       $mess=$request->input('message');
       $id=session('key2');
       $user = DB::table('employee')->where('empid', '1105113')->first();
       $mytime = Carbon\Carbon::now();
       
        DB::table('suggestion')->insert(array(
                                
                              'name' => $user->empname,
                            'email' =>  $user->emp_mail,
                          'detail' =>  $mess,
                          'subject' =>  $sub,
                          'type' =>  $type,
                          'updated_at' => $mytime->toDateTimeString(),
                          'isshown'=>'0')
               );
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
