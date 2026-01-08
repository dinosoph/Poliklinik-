<?php
namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

class StaffController extends Controller {
    
    public function dashboard()
    {


        // Fetch all staff members to display on cards
        $staff = Staff::all(); 
        //return view('admin.staff.dashboard', compact('staff'));

        // Current time in your timezone
        $now = Carbon::now('Asia/Kuala_Lumpur'); // make sure timezone is correct

        // Next upcoming APPROVED appointment
        $nextAppointment = Appointment::whereNotNull('doctor')
            ->whereRaw("STR_TO_DATE(CONCAT(date, ' ', time), '%Y-%m-%d %H:%i:%s') >= ?", [$now->format('Y-m-d H:i:s')])
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->first();

        // Pass both variables to the view
        return view('admin.staff.dashboard', compact('staff', 'nextAppointment'));

        }

    public function nextAppointmentJson() {
        $nextAppointment = Appointment::whereNotNull('doctor')
            ->where(function ($query) {
                $query->where('date', '>', Carbon::today())
                    ->orWhere(function ($q) {
                        $q->where('date', Carbon::today())
                            ->where('time', '>=', Carbon::now()->format('H:i:s'));
                    });
            })
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->first();

        // format the date/time for frontend
        if($nextAppointment) {
            $nextAppointment->date = \Carbon\Carbon::parse($nextAppointment->date)->format('d M Y');
            $nextAppointment->time = \Carbon\Carbon::parse($nextAppointment->time)->format('h:i A');
        }

        return response()->json(['nextAppointment' => $nextAppointment]);
    }

    

    public function index() {
        $staff = Staff::all();
        return view('admin.staff.index', compact('staff'));

    }

    // Show the Add Staff Form [5]
    public function create() {
        return view('admin.staff.create');
    }

    // Save New Staff to Database [6]
    public function store(Request $request) {
        Staff::create($request->all());
        return redirect()->route('staff.index');
    }

    // Show Edit Form [3]
    public function edit($id) {
        $member = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('member'));
    }

    // Update Staff and Delete Logic [7]
    public function update(Request $request, $id) {
        Staff::findOrFail($id)->update($request->all());
        return redirect()->route('staff.index');
    }

    public function destroy($id) {
        Staff::findOrFail($id)->delete();
        return back();
    }

    
}