<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Paginate 10 products per page
        $products = Product::paginate(10);

        // Pass products to the view
        return view('products.index', compact('products'));
    } 
}
