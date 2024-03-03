<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('magazijn', 'productperallergeens')->orderBy('barcode', 'asc')->get();

        return view('overzicht', ['products' => $products]);
    }
}
