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
                  <?php echo  '<img src=upload/Woman/'.$a->woman_image.'  style="width:500px;height:500px;"/>';?>
                   <div class="caption">
                    <h3>{{$a->woman_name}}</h3>
                    <p>Price:{{$a->womanprice}}</p>
                  </div>
                  <div class="widget-footer">
                    <p>
                    <a href="{{route('women.edit',$a->woman_id)}}" class="btn btn-primary">Buy now</a>&nbsp;
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