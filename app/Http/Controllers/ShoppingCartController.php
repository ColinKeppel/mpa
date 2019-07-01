<?php

namespace App\Http\Controllers;

use Session;
use App\Classes\ShoppingCart;
use App\product;
use App\category;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = ShoppingCart::getCart();//gets all the items in cart
        $products = Product::find(array_column($cart, 'id'))->toArray();//gets the corresponding products to the cart items. Then gets the properties as an array so I can add them to objects in $cartItems
        $cartItems = array();
        foreach ($cart as $cartItem) {//loops through every object in $cartItems and gets the corresponding array from $products and puts them in the $cartItems object
            $product = $products[array_search($cartItem["id"], array_column($products, 'id'))];// gets the corresponding array
            $cartItems[] = array_merge($cartItem, $product);   
        }

        $data = [
            'cartItems' => $cartItems,
            'totalPrice' => ShoppingCart::getTotalPrice()
        ];
        return view('shopping-cart', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productId = $request->get('id');
        $productAmount = $request->get('quantity');

        $product = Product::find($productId);

        $productArray = [
            'id' => $product->id,
            'quantity' => $productAmount
        ];

        ShoppingCart::addCartItem($productArray);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = ShoppingCart::getCartItem($id);
        $item['quantity'] = $request->input('quantity');
        ShoppingCart::saveCartItem($item);
        return redirect("/shoppingcart");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShoppingCart::delete($id);
        return redirect('/shoppingcart');
    }
}
