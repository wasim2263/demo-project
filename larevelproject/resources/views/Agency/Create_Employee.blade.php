@extends('Agency.header')

@section('content')

<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Create Employee Account</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6" style="float:left">
      <div class="question-section">
        <h4> Neque porro quisquam est qui?</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
    </div>
     <div class="span6" >
      <div class="wpcf7" id="wpcf7-f75-t1-o1" >
        {!!Form::open(array('route'=>'Create_Employee.store', 'class'=>'wpcf7-form','id'=>'cform'))!!}
          <div id="output" class="alert"> </div>
          <div class="form-meta clearfix">
            <div class="formcol">
              <label for="Name"> Name</label>
              <input type="text" name="Name" value="" id="Name" size="80" />
            </div>
            <div class="formcol">
              <label for="email"> Email Address</label>
              <input type="text" name="email" id="email" value="" size="80" />
              <label for="Password"> Password</label>
              <input type="Password" name="Password" id="Password" value="" size="80" />
               <label for="Phone"> Phone</label>
              <input type="text" name="Phone" id="Phone" value="" size="80" />
               <label for="salary"> salary</label>
              <input type="text" name="salary" id="salary" value="" size="80" />
            </div>
          </div>
          <input type="submit" id="send-message" value="Create" class="btn btn-success" />
        {!!Form::close()!!} 
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
@endsection