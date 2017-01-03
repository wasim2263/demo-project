@extends('header')
@section('content')
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Our products</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              @foreach($user as $a)
              <li class="span4">
                <div class="thumbnail">
                    <?php echo  '<img src=upload/Wedding/'.$a->wed_image.'  />';?>
                    <div class="caption">
                    <h3>{{$a->wed_name}}</h3>
                    <p>Price:{{$a->wed_price}}</p>
                  </div>
                  <div class="widget-footer">
                    <p>
                   <a href="{{route('wedding.edit',$a->wed_id)}}" class="btn btn-primary">Buy now</a>&nbsp;
                       <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              @endforeach
              
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
    @endsection