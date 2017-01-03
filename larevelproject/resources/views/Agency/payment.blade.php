@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1>Order List</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Customer Name</th>
              <th>Email</th>
              <th>Product Name</th>
             <th>Category</th>
             <th>Order Cost</th>              
              <th>Paid</th>
             <th>remaining</th>
             <th>Pay now</th>
             <th></th>

            </tr>
          </thead>
          <tbody>
          	@foreach($user as $a)
          	</tr>	
          	  <td><code>{{$a->customer_name}}</code></td>
              <td><code>{{$a->customer_mail}}</code></td>
              <td><code>{{$a->product_name}}</code></td>
              <td><code>{{$a->type}}</code></td>
              <td><code>{{$a->order_cost}}</code></td>
              <td><code>{{$a->payment}}</code></td>
              <td><code><?php $rem=$a->order_cost-$a->payment; echo $rem; ?></code></td>
              {!!Form::open(array('route'=>'Payment.store'))!!}
              <input type="hidden" name= "order_id"  value=<?php echo $a->order_id ;?>/>
              <input type="hidden" name= "cost"  value=<?php echo $a->order_cost ;?>/>
              <input type="hidden" name= "payed"  value=<?php echo $a->payment ;?>/>
                   
              <td>  <input type="number" name="payment"  type="text" maxlength="255" value=""/></td>
              <td>  <input type="submit" name="login" class="btn btn-primary" value="Update now"></td>
              {!!Form::close()!!}
                
            	</tr>
            @endforeach
            
          </tbody>
  </table>
<div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
@endsection
