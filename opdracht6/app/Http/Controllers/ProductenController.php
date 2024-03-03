<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class ProductenController extends Controller
{
    public function index($id)
    {
        $leveranciers = Leverancier::with('productPerLeveranciers.product.magazijn')->findOrFail($id);

        return view('leverancier.producten', ['leveranciers' => $leveranciers]);
    }
}
