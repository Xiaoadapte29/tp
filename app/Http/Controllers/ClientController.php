<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
{
    $clients = Client::all();
    return view('clients.index', compact('clients'));
}

public function create()
{
    return view('clients.create'); 
}
    public function show($id)
{
    $client = Client::with('factures')->findOrFail($id);
    return view('clients.show', compact('client'));
}
public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
         'prenom' => 'required|string|max:255',
    ]);

    Client::create($request->all());

    return redirect()->route('clients.index')->with('success', 'Client ajouté');
}

}
