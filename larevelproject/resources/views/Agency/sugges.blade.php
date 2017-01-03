@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Details</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="work" >
    <div class="row-fluid" >
      <div class="span4">
        <h5> Name</h5>
        <p> {{$user->name}}</p>
        <h5> Email</h5>
        <p> {{$user->email}}</p>
        <h5> Subject</h5>
        <p> {{$user->subject}}</p>
        <h5> Year</h5>
        <p> {{$user->subject}}</p>
        <h5> Detail</h5>
        <p> {{$user->detail}} </p>
        <h5> Time</h5>
        <p> {{$user->updated_at}}</p>
      
    </div>
  </div>
</div>
@endsection