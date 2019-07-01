<?php

namespace App\Classes;

use Session;
use App\Product;
use App\Classes\ShoppingCart;
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

        /**
         * @return float
         */
        public static function getTotalPrice() : float
        {
            $cart = self::getCart();
            $totalPrice = 0;
            $products = Product::find(array_column($cart, 'id'), ['id', 'price']);
            foreach ($products as $product) {
                
                $quantity = $cart[$product->id]['quantity'];
                $totalPrice += $quantity * floatval($product["price"]);
            }
            return $totalPrice;
        }

        public static function delete($id)
        {
            $cart = self::getCart();
            unset($cart[$id]);
            session(['cart' => $cart ]);
        }
 }