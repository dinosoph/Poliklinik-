<?php
namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller {
    // Show the Staff List Table [2]
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