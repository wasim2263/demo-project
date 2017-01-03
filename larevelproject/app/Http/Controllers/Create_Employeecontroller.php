<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Create_Employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Agency/Create_Employee');
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
       
              
              
              $Name=$request->input ('Name');
            
              $email=$request->input ('email');
              
              $Password=$request->input ('Password');
               
              $Phone=$request->input ('Phone');
               
              $salary=$request->input ('salary');
              $fileName = Input::get('rename_to');
                DB::table('employee')->insert(array(
                                'empname' => $Name,
                              'emp_mail' => $email,
                            'emp_pass' =>  $Password,
                          'emp_phone' =>  $Phone,
                          'emp_salary' => $salary)
               );
                return Redirect('Create_Employee');
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
