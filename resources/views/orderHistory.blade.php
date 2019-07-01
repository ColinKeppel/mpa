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
			<div class="table-filter">
				<div class="row">
                    <div class="col-sm-3">
						<div class="show-entries">
							<span>Show</span>
							<select class="form-control">
								<option>5</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
							<span>entries</span>
						</div>
					</div>
			</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
						<th>Product</th>
						<th>Order Date</th>						
                        <th>Quantity</th>						
						<th>Total price</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><p>Martin Sommer</p></td>
						<td>Minecraft</td>
                        <td>Jun 15, 2017</td>                        
						<td>5</td>
						<td>$254</td>
						<td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
					<tr>
                        <td>2</td>
                        <td><p>Martin Sommer</p></td>
                        <td>Fallout 76</td>                       
						<td>Jun 21, 2017</td>
						<td>3</td>
						<td>$1,260</td>
						<td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
					<tr>
                        <td>3</td>
                        <td><p>Martin Sommer</p></td>
						<td>Dota 2</td>
                        <td>Jul 04, 2017</td>
                        <td>2</td>
						<td>$350</td>
						<td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>                        
                    </tr>
					<tr>
                        <td>4</td>
                        <td><p>Martin Sommer</p></td>
						<td>Pokemon Go</td>
                        <td>Jul 16, 2017</td>						
						<td>8</td>
						<td>$1,572</td>
						<td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
					<tr>
                        <td>5</td>
                        <td><p>Martin Sommer</p></td>
						<td>Risk</td>
                        <td>Aug 04, 2017</td>
						<td>4</td>
						<td>$580</td>
						<td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="fas fa-directions"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>     
@endsection                         		                            