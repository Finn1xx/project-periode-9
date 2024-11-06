<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('afsprakensysteem', compact('appointments'));
    }

    public function create()
    {
        return view('afsprakensysteem_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
        ]);

        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol aangemaakt');
    }

    public function show(Appointment $appointment)
    {
        return view('afsprakensysteem_show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        return view('afsprakensysteem_edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol bijgewerkt');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol verwijderd');
    }
}
