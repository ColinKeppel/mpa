@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Games & Go</h1>
        <div class="list-group">

        @foreach ($categories as $category)
        
          <a href="#" class="list-group-item">{{$category['name']}}</a>

        @endforeach

        </div>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">

        <div class="row mt-3">
            @foreach ($products as $product)

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$product['name']}} </a>
                  </h4>
                  <h5>€ {{$product['price']}}</h5>
                  <p class="card-text">{{$product['details']}}</p>
                </div>
                <div id="footerBox" class="card-footer">
                <a class="btn btn-primary" href="#" role="button">Add to cart</a><p id="stock">{{$product['stock']}} in stock</p>
                </div>
              </div>
            </div>
  @endforeach

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
 @endsection