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
             <th>Amount</th>              
              <th>Order Cost</th>
             <th>Shipment Date</th>
             <th></th>
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
              <td><code>{{$a->amount}}</code></td>
              <td><code>{{$a->order_cost}}</code></td>
              <td><code>{{$a->date}}</code></td>
              
              <td>  <a href="{{route('Orderlist.edit',$a->order_id)}}" class="btn btn-primary">accept</a></td>
              <td>  <a href="{{route('Orderlist.show',$a->order_id)}}" class="btn btn-primary">delete</a>&nbsp;</td>
              
                
            	</tr>
            @endforeach
           
          </tbody>
  </table>
<div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
@endsection
