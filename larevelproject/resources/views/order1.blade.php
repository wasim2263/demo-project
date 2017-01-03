@extends('header')

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
              <th>no</th>
              
              <th>Product Name</th>
             <th>Amount</th>              
              <th>Order Cost</th>
             <th>Shipment Date</th>
             <th>Status</th>
             <th></th>

            </tr>
          </thead>
          <tbody>
          	@foreach($user as $a)
          	</tr>	
          	  <td><code>{{$a->id}}</code></td>
              <td><code>{{$a->product_name}}</code></td>
              <td><code>{{$a->amount}}</code></td>
              <td><code>{{$a->cost}}</code></td>
              <td><code>{{$a->date}}</code></td>
              
              <td><?php if ($a->status===0) {
                # code...
                echo "pending";
              } else if ($a->status===1) {
                # code...
                echo "accepted(pay now)";
              } else if ($a->status===3) {
                # code...
                echo "delivered successfully";
              } else if ($a->status===4) {
                # code...
                echo "payment conpleted";
              }else {
                # code...
                echo "rejected";
              }
              
               ?>  </td>
              <td>  <a href="{{route('order1.show',$a->order_id)}}" class="btn btn-primary">delete</a>&nbsp;</td>
              
                
            	</tr>
            @endforeach
           
          </tbody>
  </table>
<div class="pagiantion">
       <ul class="pagination"> {!! $user->render() !!}</ul>
      </div>
@endsection
