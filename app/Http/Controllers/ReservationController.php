<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', [
            'title' => 'Reservations',
            'reservations' => $reservations
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'hospital' => 'required|string|max:255',
            'service' => 'required|string|max:255',
        ]);

        Reservation::create([
            ...$validated,
            'status' => 'Pending'
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservation submitted!');
    }
}
