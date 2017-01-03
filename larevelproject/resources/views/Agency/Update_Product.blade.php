@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Update Product</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid contact">
    <div class="span4">
      <ul class="bordered-list">

      </ul>
    </div>
    <div class="span6">
      <div class="wpcf7" id="wpcf7-f75-t1-o1">
     
      <form action="{{ URL::to('imu') }}" method="POST" enctype="multipart/form-data">
          <div class="bs-docs-example">
          <div class="btn-toolbar" style="margin: 0;">
          
            <!-- /btn-group -->
            <div class="btn-group">
                   <select name="cat">
                            <option value="Man">Man</option>
                            <option value="Woman">Woman</option>
                            <option value="Kids">Kids</option>
                    </select>
            </div>
            
           
            <!-- /btn-group --> 
          </div>
          <!-- /btn-toolbar --> 
        </div>
          <div id="output" class="alert"> </div>
          <div class="form-meta clearfix">
            <div class="formcol">
              <label for="fname"> <font color="white">Type</font></label>
              <input type="text" name="Type" value="" id="Type" size="40" />
              <label for="fname"> <font color="white">Name</font></label>
              <input type="text" name="Name" value="" id="Name" size="40" />
              <label for="fname"> <font color="white">Price</font></label>
              <input type="text" name="Price" value="" id="Price" size="40" />
              <label for="fname"> <font color="white">Photo</font></label>
              <input type="file" value="file" id="file" name="file" />
             
            </div>
            <div class="formcol">
               
            </div>
          </div>
          <input type="submit" id="submit" value="Upload" class="btn btn-success" />
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
       </form> 
        
      </div>
    </div>
  </div>
</div>
<!-- Footer
    ================================================== -->
@endsection