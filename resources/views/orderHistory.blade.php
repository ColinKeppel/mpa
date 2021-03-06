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
						<th>Order Date</th>												
						<th>Total price</th>
						<th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($Orders as $Order)
                    <tr>
                        <td>{{ $Order['id'] }}</td>
                        <td>{{ $Order["created_at"] }}</td>                        
						<td>€{{ $Order['total_price'] }}</td>
						<td><a href="{{ route('orderDetails', $Order->id) }}" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
                @endforeach      
                </tbody> 
              </table>    
        </div>
            <div class="text-center">
                {!! $Orders->links(); !!}
            </div>
    </div>     
@endsection                         		                            