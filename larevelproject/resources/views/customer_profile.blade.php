@extends('header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
            <h1> Hi</h1>

    </div>
  </div>

  <div class="row-fluid" id="pricing" >
   
    <div class="span3">
      <div class="price-plan  most-popular">
        <h2> {{$user->name}}</h2>

        <div class="price">
          <div class="inside"> <span class="super">ooo</span> <span class="amt">{{$user->custid}}</span> </div>
        </div>
        <div class="info">
          <ul>
            <li class="feature-page-limit"> <img src="{{ asset('upload/customer/' . $user->image) }}" alt="Mountain View" style="width:604px;height:270px;"></li>
            <li class="feature-bandwidth-limit">{{$user->email}}</li>
            <li class="feature-free-domain">{{$user->address}} <span class="free">Free</span></li>
            <li class="feature-support">{{$user->phone}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection