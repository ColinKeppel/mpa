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
                    <div class="col-sm-9">
						<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
						<div class="filter-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="filter-group">
							<label>Location</label>
							<select class="form-control">
								<option>All</option>
								<option>Berlin</option>
								<option>London</option>
								<option>Madrid</option>
								<option>New York</option>
								<option>Paris</option>								
							</select>
						</div>
						<div class="filter-group">
							<label>Status</label>
							<select class="form-control">
								<option>Any</option>
								<option>Delivered</option>
								<option>Shipped</option>
								<option>Pending</option>
								<option>Cancelled</option>
							</select>
						</div>
						<span class="filter-icon"><i class="fa fa-filter"></i></span>
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
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">6</a></li>
					<li class="page-item"><a href="#" class="page-link">7</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>     
@endsection                         		                            