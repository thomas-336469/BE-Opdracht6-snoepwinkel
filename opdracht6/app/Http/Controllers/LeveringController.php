<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeveringController extends Controller
{
    public function index($id)
    {
        $Levering = Leverancier::with('productPerLeveranciers.product.magazijn')->find($id);

        return view('levering.create', ['Levering' => $Levering]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'datum_eerstvolgende_levering' => 'required|date|after_or_equal:today',
            // andere validatieregels...
        ]);

        $leverancier = Leverancier::with('productPerLeveranciers.product.magazijn')->find($id);
        $product = $leverancier->productPerLeveranciers->first()->product;

        // Update het aantal in het magazijn en de laatste leveringsdatum
        $product->magazijn->aantal_aanwezig += $request->input('aantal_producteenheden');
        $product->datum_levering = $request->input('datum_eerstvolgende_levering');
        $product->magazijn->save();

        session()->flash('message', 'Levering succesvol opgeslagen.');

        return redirect()->route('leverancier.producten', ['id' => $id]);
    }
}
