@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
            <h1> Hi</h1>

    </div>
  </div>

  <div class="row-fluid" id="pricing">
   
    <div class="span3">
      <div class="price-plan  most-popular">
        <h2> {{$user->empname}}</h2>

        <div class="price">
          <div class="inside"> <span class="super">ooo</span> <span class="amt">{{$user->empid}}</span> </div>
        </div>
        <div class="info">
          <ul>
            <li class="feature-page-limit"> <img src="{{ asset('upload/employee/' . $user->image) }}" alt="Mountain View" style="width:604px;height:270px;"></li>
            <li class="feature-bandwidth-limit">{{$user->emp_mail}}</li>
            <li class="feature-storage-limit">{{$user->degi}}</li>
            <li class="feature-free-domain">{{$user->emp_salary}} <span class="free">Free</span></li>
            <li class="feature-support">{{$user->emp_phone}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection