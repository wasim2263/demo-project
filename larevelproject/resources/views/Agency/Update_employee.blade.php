@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1>Order List</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Employee Id</th>
              
              <th>Employee Name</th>
             <th>Email</th>
             <th>Designation</th>
             <th>Change Designation</th>
             <th>Salary</th>
              <th>New Salary</th>   
              <th>status</th>
             <th>New status</th>
             <th></th>

            </tr>
          </thead>
          <tbody>
            @foreach($user as $a)
            {!!Form::open(array('route'=>'Update_employee.store'))!!}
            </tr> 
              <td><code>{{$a->empid}}</code></td>
              <td><code>{{$a->empname}}</code></td>
              <td><code>{{$a->emp_mail}}</code></td>
              <td><code>{{$a->degi}}</code></td>
              <td><input  name="degi"  type="text"   value="" style="width:100px;"/></td>
    
              <td><code>{{$a->emp_salary}}</code></td>
              <td>  <input type="number" name="salary"    value="" style="width:100px;"/></td>
              <td><code><?php if ($a->admin_status==1) {
                # code...
                echo "Admin";
              } else {
                # code...
                echo "Employee";
              }
              ?></code></td>
              
              <input type="hidden" name= "empid"  value=<?php echo $a->empid ;?>/>
                   
              <td>  <select name="status" style="width:100px;"> 
      <option value="" selected="selected"></option>
<option value="1" >Admin</option>
<option value="2" >Employee</option>

    </select></td>
              <td>  <input type="submit" name="login" class="btn btn-primary" value="Update now"></td>
              {!!Form::close()!!}
                
              </tr>
            @endforeach
            
          </tbody>
  </table>
    <div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
@endsection
