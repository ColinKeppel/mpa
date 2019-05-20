<?php

namespace App\Classes;
 
 class ShoppingCart {
     public static function getCart() {
         return Session::get('shoppingCart');
     }
 }