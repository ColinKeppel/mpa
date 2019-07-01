@extends('layouts.app')
@section('content')

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cartItems as $product)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $product['name'] }}</a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" value="{{ $product['quantity'] }}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>€{{ $product['price'] }}</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <form action="{{ route('shoppingcart.destroy', $product['id']) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <input hidden name="id" type="text" value="{{$product['id']}}">
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form></td>
                    </tr>
                @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>€{{ number_format($totalPrice, 2, ",", ".") }}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 @endsection