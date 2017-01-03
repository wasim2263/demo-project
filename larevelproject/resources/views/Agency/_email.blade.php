@extends('Agency.header')

@section('content')



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

           {!!Form::open(array('route'=>'_email.store', 'class'=>'wpcf7-form','id'=>'cform'))!!}
              <label for="salary"> Email</label>
              <input type="text" name="salary" id="salary" value="" size="80" />
               <label for="salary"> Password</label>
              <input type="password" name="password" id="password" value="" size="80" />
              <label for="salary"> submit</label>
              <input type="submit" id="send-message" value="Update" class="btn btn-success" />

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
            {!!Form::close()!!} 
  </div>
</div>
@endsection
      