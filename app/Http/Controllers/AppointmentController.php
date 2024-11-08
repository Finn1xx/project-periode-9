<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all(); // Haal alle afspraken op
        return view('afsprakensysteem', compact('appointments')); // Stuur data naar de view
    }

    public function create()
    {
        return view('afsprakensysteem_create'); // Formulier voor nieuwe afspraak
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
        ]);

        Appointment::create($request->all()); // Sla nieuwe afspraak op
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol aangemaakt');
    }

    public function show(Appointment $appointment)
    {
        return view('afsprakensysteem_show', compact('appointment')); // Toon specifieke afspraak
    }

    public function edit(Appointment $appointment)
    {
        return view('afsprakensysteem_edit', compact('appointment')); // Formulier voor bewerken afspraak
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
        ]);

        $appointment->update($request->all()); // Werk de afspraak bij
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol bijgewerkt');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete(); // Verwijder de afspraak
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol verwijderd');
    }
}
