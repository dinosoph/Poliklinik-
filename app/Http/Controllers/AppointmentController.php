<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Staff;
use Carbon\Carbon;
use App\Mail\AppointmentConfirmed;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        Appointment::create($request->all());

        return redirect()->back()->with('success', 'Appointment booked successfully!');

        
    }

     // This handles the Poliklinik Alisya Admin view [3]
    public function index()
    {
        // All appointments for the table
        $appointment = Appointment::all();

        // Current time in your timezone
        $now = Carbon::now('Asia/Kuala_Lumpur'); 

        // Next upcoming APPROVED appointment
        $nextAppointment = Appointment::whereNotNull('doctor')
            ->whereRaw("STR_TO_DATE(CONCAT(date, ' ', time), '%Y-%m-%d %H:%i:%s') >= ?", [$now->format('Y-m-d H:i:s')])
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->first();

        // Pass both variables to the view
        return view('admin.bookings.index', compact('appointment', 'nextAppointment'));
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'doctor' => $request->doctor,
            'appointment_date' => $request->appointment_date,
            'department' => $request->department,
            'time' => $request->time,
        ]);

        // Redirect to the email log page instead of bookings
        return redirect()->route('bookings.index')->with('success', 'Doctor assigned successfully! Email is logged.');
    }



    public function show($id)
    {
        // Find the appointment by its ID or fail if it doesn't exist
        $appointment = Appointment::findOrFail($id);
        
        // Return a read-only view
        return view('admin.bookings.show', compact('appointment'));
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $doctors = Staff::all(); // or filter by role/department if needed

        return view('admin.bookings.details', compact('appointment', 'doctors'));
    }


}


