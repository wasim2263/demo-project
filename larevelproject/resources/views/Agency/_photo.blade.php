@extends('Agency.header')

@section('content')

  <div class="bs-docs-example">
          <div class="well" style="max-width: 340px; padding: 8px 0;float:left">
            <ul class="nav nav-list">
              <li class="nav-header">List header</li>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">Applications</a></li>
              <li class="nav-header">Another list header</li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li class="divider"></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>

           <form action="{{ URL::to('empimg') }}" method="POST" enctype="multipart/form-data">
              <label for="salary"> Photo </label>
              <input type="file" name="image">
              <input type="submit" name="submit" value="upload" class="btn btn-success"> 
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
              <div>
                 <li><a href="#"> </a></li>
                  <li><a href="#"> </a></li>
                   <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                     <li><a href="#"> </a></li>
                      <li><a href="#"> </a></li>
                       <li><a href="#"> </a></li>
              </div>
               <li class="divider"></li>
            </form>
  </div>
</div>
@endsection