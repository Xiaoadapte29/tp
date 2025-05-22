<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{

    public function index()
{
    $factures = Facture::all();
    return view('factures.index', compact('factures'));
}

 public function show($numeroFacture)
{
    $facture = Facture::with('produits')->findOrFail($numeroFacture);

    return view('factures.show', compact('facture'));
}
public function create()
{
    $clients = Client::all(); 
    return view('factures.create', compact('clients'));
}

 public function store(Request $request)
    {
        $request->validate([
            'id_client' => 'required|exists:clients,id',
            'date' => 'required|date',
        ]);

        Facture::create($request->all());

        return redirect()->route('factures.index')->with('success', 'Facture ajoutée avec succès.');
    }
}
