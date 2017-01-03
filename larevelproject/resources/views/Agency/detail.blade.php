@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Work Details</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="work">
    <div class="row-fluid">
      <div class="span4" style="float:left">
        <h5>  Introduction</h5>
        <p> {{$user->intro}}</p>
        <h5> Project Year</h5>
        <p> {{$user->year}}</p>
        <h5> About Project</h5>
        <p> {{$user->detail}} </p>
      </div>
      <div class="span8">
        <ul class="portfolio_showcase">
          <li><img src="{{ asset('upload/company_achieve/' . $user->image) }}" alt="Image" style="width:604px;height:404px;"/> </li>
        </ul>
        <div id="number" class="work-pagination"> </div>
    </div>
  </div>
</div>
@endsection