@extends('master.admin_layout')

@section('content')
<h5>Add Staff</h5>
<div class="card p-4 border-0 shadow-sm" style="border-radius: 15px;">
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label>Staff ID</label>
                <input type="text" name="staff_id" class="form-control" placeholder="e.g. 201">
            </div>
            <div class="col-md-6">
                <label>Role</label>
                <select name="role" class="form-select">
                    <option>Doctor</option>
                    <option>Assistant</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Department</label>
            <select name="department" class="form-select">
                <option>Dermatology</option>
                    <option>Oncology</option>
                    <option>Cardiology</option>
                    <option>Neurology</option>
                    <option>Orthopedics</option>
                    <option>Pediatrics</option>
                    <option>Surgery</option>
                    <option>Pharmacy</option>
            </select>
        </div>
        <button type="submit" class="btn btn-info text-white float-end">Save</button>
    </form>
</div>
@endsection