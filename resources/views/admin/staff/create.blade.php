@extends('master.admin_layout')

@section('content')

<style>
/* =========================
    CARD STYLING
========================= */
.card {
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #ffffff;
}

.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

/* =========================
    FORM INPUTS
========================= */
.form-control, .form-select {
    border-radius: 10px;
    border: 1px solid #ced4da;
    transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
    border-color: #499FB6;
    box-shadow: 0 0 8px rgba(73, 159, 182, 0.2);
    outline: none;
}

/* LABELS */
label {
    font-weight: 600;
    margin-bottom: 5px;
    display: inline-block;
}

/* BUTTONS */
.btn-info {
    background-color: #499FB6;
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    padding: 8px 16px;
    transition: all 0.3s ease;
}

.btn-info:hover {
    background-color: #317f94;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.2);
}

/* FLOAT END BUTTON */
.float-end {
    display: flex;
    justify-content: flex-end;
}

/* BREADCRUMBS */
.breadcrumb {
    background: transparent !important;
    padding: 0;
    margin-bottom: 20px;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
    color: #6c757d;
    padding: 0 6px;
}

.breadcrumb a {
    text-decoration: none;
    color: #6c757d;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: #499FB6;
}

/* HEADINGS */
h5 {
    font-weight: 600;
    margin-bottom: 20px;
    color: #495057;
}

/* RESPONSIVE FORM */
@media (max-width: 767px) {
    .row.mb-3 .col-md-6 {
        margin-bottom: 15px;
    }
}
</style>


<!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb justify-content-center" style="background: transparent;">
            <li class="breadcrumb-item" style="color: #6c757d;">
                <a href="{{ route('staff.dashboard') }}" style="color: #6c757d; text-decoration: none;">Dashboard</a>
            </li>
            <li class="breadcrumb-item" style="color: #6c757d;">
                <a href="{{ route('staff.index') }}" style="color: #6c757d; text-decoration: none;">Staff List</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #499FB6;">
                Add Staff
            </li>
        </ol>
    </nav>

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