@extends('header')

@section('content')

  <div class="bs-docs-example" style="float:middle">

           <form action="{{ URL::to('cust_imu') }}" method="POST" enctype="multipart/form-data">
              <li class="divider"></li>
              <label for="salary"> </label>
              <label for="salary">Profile Setting anything</label>
              <label for="salary"> Name</label>
              <input type="text" name="name" id="name" value="" placeholder="null" size="80" />
              <label for="salary"> Email</label>
              <input type="text" name="salary" id="salary" value="" placeholder="null" size="80" />
              <label for="salary"> Password</label>
              <input type="password" name="password" id="password" placeholder="null" value="" size="80" />
              <label for="salary"> Phone</label>
              <input type="text" name="phone" id="phone" value="" placeholder="null" size="80" />
              <label for="salary"> Address</label>
              <input type="text" name="address" id="address" value="" placeholder="null" size="80" />
              <label for="salary">old password</label>
              <input type="text" name="old" id="old" value="" placeholder="null" size="80" />
              <label for="salary"> Image</label>
              <input type="file" name="image">
              <label for="salary"> submit</label>
              <input type="submit" id="send-message" value="Update" class="btn btn-success" />
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
               <li class="divider"></li>
            </form>
  </div>
</div>
@endsection
      