@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Games & Go</h1>
        <div class="list-group">

        @foreach ($categories as $category)
        
        <a href="{{ route('categories', $category->id)  }}" class="list-group-item">{{$category['name']}}</a>

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
                  <h5>€{{number_format($product['price'], 2, ",", ".")}}</h5>
                  <p class="card-text">{{$product['details']}}</p>
                </div>
                
                <div id="footerBox" class="card-footer">
                  <form action="shoppingcart" method="POST">
                  {{ csrf_field() }}
                    <input value="{{$product['id']}}" name="id" hidden>
                    <button class="btn btn-primary" type="submit" href="" role="button">Add to cart</button>
                    <input type="number" class="form-control col-5 float-right" value="1" name="quantity">
                  </form>
                </div>
                
              </div>
            </div>
            @endforeach

  
{{-- {{ route('getAddToCart', ['id' => $product->id]) }} --}}
        </div>
        <!-- /.row -->

        <div class="text-center">
          {!! $products->links(); !!}
        </div>


      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
  </div>
 @endsection
