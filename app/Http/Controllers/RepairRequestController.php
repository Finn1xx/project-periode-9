<?php

namespace App\Http\Controllers;

use App\Models\RepairRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RepairRequestController extends Controller
{
    // Methode om het formulier voor een reparatieverzoek weer te geven
    public function create()
    {
        return view('reparatieverzoek'); // Laadt alleen de formulierpagina zonder $requests
    }

    // Methode om het reparatieverzoek op te slaan
    public function store(Request $request)
    {
        // Valideer de invoer
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
        ]);

        // Als de validatie faalt, retourneer een foutmelding
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Maak een nieuw reparatieverzoek aan
        $repairRequest = new RepairRequest();
        $repairRequest->name = $request->input('name');
        $repairRequest->email = $request->input('email');
        $repairRequest->description = $request->input('description');
        $repairRequest->save();

        // Geef een succesvolle respons terug
        return response()->json(['message' => 'Reparatieverzoek succesvol verzonden!'], 201);
    }

    // Methode om alle reparatieverzoeken op te halen (voor admin)
    public function index()
    {
        // Haal alle verzoeken op
        $requests = RepairRequest::all();
        return view('verzoeken', compact('requests')); // Zorg dat de 'verzoeken' view bestaat
    }
}
