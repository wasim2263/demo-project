@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span4">
            <h1> Our Company</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="work">
    <div class="row">
      <div class="span12">
        <div id="portfolio" class="row">
          @foreach($user as $a)
          <div class="span4  work-item graphics">
            <h2> {{$a->subject}}</h2>
            <p>{{$a->intro}}</p>

            <div class="sample work-item-image-container">
              <div class="work-item-overlay">
                <div class="inner">
                  <ul>
                    <li><a rel="prettyPhoto[gallery]" href="{{ asset('upload/company_achieve/' . $a->image) }}" class="gallery-btn">View
                      Gallery</a></li>
                    <li><a class="detail-link" href="{{route('Our_Company_achieve.show',$a->id)}}">View Details</a></li>
                  </ul>
                </div>
              </div>
              <img src="{{ asset('upload/company_achieve/' . $a->image) }}" alt="iPhonegraphy" style="width:604px;height:270px;"/> </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>
<div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
@endsection