<?php

namespace App\Classes;

use Session;
use Illuminate\Http\Request;
 
 class ShoppingCart {
     
        public static function getCart() {
            return Session::get('cart');
        }

        public static function addCartItem($product) {
            Session::push('cart', $product);
        }
 }