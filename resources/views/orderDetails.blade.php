@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="table-wrapper ">
            <div class="table-title navbar-dark bg-dark">
                <div class="row">
                    <div class="col-sm-4 ">
						<h2>Order History</h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>OrderId</th>
                        <th>Product</th>
						<th>Order Date</th>												
						<th>Quantity</th>
						<th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderItems as $orderItem)
                    <tr>
                        <td>{{ $orderItem['order_id'] }}</td>
                        <td>{{ $orderItem['name'] }}</td>
                        <td>{{ $orderItem["created_at"] }}</td>                        
						<td>{{ $orderItem['quantity'] }}</td>
						<td><a href="{{ URL::previous() }}" class="view" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
                @endforeach      
                </tbody> 
              </table>    
        </div>
    </div>     
@endsection                   		                            