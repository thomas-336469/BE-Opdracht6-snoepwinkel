<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::with('productPerLeveranciers.product')->get();

        foreach ($leveranciers as $leverancier) {
            $leverancier->uniqueProductCount = $leverancier->productPerLeveranciers->unique('product_id')->count();
        }

        $leveranciers = $leveranciers->sortByDesc('uniqueProductCount');

        return view('leverancier', ['leveranciers' => $leveranciers]);
    }
}
