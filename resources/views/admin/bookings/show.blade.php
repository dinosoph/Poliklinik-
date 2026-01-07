@extends('master.admin_layout')

@section('content')

<!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb justify-content-center" style="background: transparent;">
            <li class="breadcrumb-item" style="color: #6c757d;">
                <a href="{{ route('bookings.index') }}" style="color: #6c757d; text-decoration: none;">Booking List</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #499FB6;">
                Booking Details
            </li>
        </ol>
    </nav>

<div class="container">
    <h4 style="color: #499FB6;">View Booking Details</h4>
    <div class="card p-4 shadow-sm border-0" style="border-radius: 15px;">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label fw-bold">Booking ID</label>
                <p class="form-control bg-light">{{ $appointment->id }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold">Appointment Date</label>
                <p class="form-control bg-light">{{ $appointment->date }}</p>
            </div>
                <div class="col-md-6">
                <label class="form-label fw-bold">Appointment Time</label>
                <p class="form-control bg-light">{{ $appointment->time }}</p>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold">Patient Name</label>
                <p class="form-control bg-light">{{ $appointment->name }}</p>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold">Reason For Visit</label>
                <p class="form-control bg-light">{{ $appointment->message }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold">Department</label>
                <p class="form-control bg-light">{{ $appointment->department }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold">Assigned Doctor</label>
                <p class="form-control bg-light">{{ $appointment->doctor ?? 'Not Assigned' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection