<?php

namespace App\Http\Controllers;
use App\Classes\ShoppingCart;
use App\Order;
use Auth;
use App\Product;
use App\Category;
use App\Order_Item;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Orders = Order::where('user_id', Auth::id())->paginate(5);

        return view('orderHistory', compact('Orders'));
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
        $cart = ShoppingCart::getCart();
        $NewOrder = new Order();
        $NewOrder->user_id = Auth::id();
        $NewOrder->total_price = ShoppingCart::getTotalPrice();
        $NewOrder->save();
        foreach ($cart as $item) {
            $OrderItem = new Order_Item();
            $OrderItem->order_id = $NewOrder->id;
            $OrderItem->product_id = $item["id"];
            $OrderItem->quantity = $item["quantity"];
            $OrderItem->save();
        }
        ShoppingCart::clearCart();
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
        $orderItems = Order_Item::where('order_id', $id)
            ->select('orders_items.*', 'products.name')
            ->join('products', 'orders_items.product_id', '=', 'products.id')
            ->get();
        return view('orderDetails', compact('orderItems'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
