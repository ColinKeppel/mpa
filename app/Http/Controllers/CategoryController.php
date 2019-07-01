<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $products = Category::find($id)->products()->paginate(6);

        $categories = Category::all();

        return view('category', compact('products', 'categories'));
    }
}
