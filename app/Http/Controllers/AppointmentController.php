<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        Appointment::create($request->all());

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
