<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AllergenenController extends Controller
{
    public function show($id)
    {
        $product = Product::with('productperallergeens')->findOrFail($id);

        return view('allergenen.show', ['product' => $product]);
    }
}
