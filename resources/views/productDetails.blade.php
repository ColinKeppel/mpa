@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="table-wrapper ">
            <div class="table-title navbar-dark bg-dark">
                <div class="row">
                    <div class="col-sm-4 ">
						<h2>Product details</h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
						<th>Price</th>												
						<th>Details</th>
						<th>Back</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="imageSize" src='/assets/{{ $productItems['id'] }}.png' alt="no logo"></td>
                        <td>{{ $productItems['name'] }}</td>
                        <td>{{ $productItems["price"] }}</td>                        
						<td>{{ $productItems['details'] }}</td>
						<td><a href="{{ URL::previous() }}" class="view" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>    
                </tbody> 
              </table>    
        </div>
    </div>     
@endsection                   		                            