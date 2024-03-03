<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LeverantieController extends Controller
{
    public function show($id)
    {
        $products = Product::with('productPerLeveranciers.leverancier', 'magazijn')->find($id);

        return view('leverantie.show', ['products' => $products]);
    }
}
