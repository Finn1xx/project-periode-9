<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest;

class RepairRequestController extends Controller
{
    // Methode om het formulier weer te geven voor het aanmaken van een nieuw reparatieverzoek
    public function create()
    {
        // Zorg ervoor dat de view 'repair_requests.create' bestaat en correct is
        return view('repair_requests.create');
    }

    // Methode om een nieuw reparatieverzoek op te slaan in de database
    public function store(Request $request)
    {
        // Valideer de gegevens die van het formulier komen
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Maak een nieuw reparatieverzoek aan en sla het op in de database
        RepairRequest::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'status' => 'pending',  // Standaard status is 'pending'
        ]);

        // Redirect naar het formulier met een succesbericht
        return redirect()->route('repair.request.create')->with('success', 'Reparatieverzoek aangemaakt');
    }

    // Methode om alle reparatieverzoeken weer te geven (voor admin bijvoorbeeld)
    public function index()
    {
        $verzoeken = RepairRequest::all();
        return view('index', compact('verzoeken'));
    }
}
