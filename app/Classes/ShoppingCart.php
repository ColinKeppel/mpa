<?php

namespace App\Classes;

use Session;
use Illuminate\Http\Request;
 
 class ShoppingCart {
     
        public static function getCart() {
            $cart = session('cart');
            if (!is_array($cart)) {
                $cart = array();
            };
            return $cart;
        }

        public static function addCartItem($product) {
            $cart = self::getCart();
            if(array_key_exists($product['id'], $cart)) {
                $currentQuantity = self::getCartItem($product['id'])["quantity"];
                $product['quantity'] = intval($product['quantity']) + intval($currentQuantity);
                session(['cart.' . $product['id'] => $product]);
            } else {
                session(['cart.' . $product['id'] => $product]);
            }
            
        }

        public static function getCartItem($id) {
            $cart = self::getCart();
            return $cart[$id];
        }
 }