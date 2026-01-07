@extends('master.admin_layout')

@section('content')

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
                Edit Staff
            </li>
        </ol>
    </nav>

<div class="container">
    <h5 class="mb-4">Edit Staff Details</h5>
    <div class="card p-4 border-0 shadow-sm" style="border-radius: 15px;">
        {{-- Action points to update; method must be changed to PATCH for Laravel --}}
        <form action="{{ route('staff.update', $member->id) }}" method="POST">
            @csrf
            @method('PATCH') {{-- Required for udate actions --}}

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label text-muted">Staff ID</label>
                    <input type="text" name="staff_id" class="form-control" value="{{ $member->staff_id }}" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-muted">Role</label>
                    <select name="role" class="form-select">
                        <option value="Doctor" {{ $member->role == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                        <option value="Assistant" {{ $member->role == 'Assistant' ? 'selected' : '' }}>Assistant</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $member->name }}">
            </div>

            <div class="mb-4">
                <label class="form-label text-muted">Department</label>
                <select name="department" class="form-select">
                    <option {{ $member->department == 'Neurology' ? 'selected' : '' }}>Neurology</option>
                    <option {{ $member->department == 'Surgery' ? 'selected' : '' }}>Surgery</option>
                    <option {{ $member->department == 'Dermatology' ? 'selected' : '' }}>Dermatology</option>
                    <option {{ $member->department == 'Oncology' ? 'selected' : '' }}>Oncology</option>
                    <option {{ $member->department == 'Cardiology' ? 'selected' : '' }}>Cardiology</option>
                    <option {{ $member->department == 'Neurology' ? 'selected' : '' }}>Neurology</option>
                    <option {{ $member->department == 'Orthopedics' ? 'selected' : '' }}>Orthopedics</option>
                    <option {{ $member->department == 'Pediatrics' ? 'selected' : '' }}>Pediatrics</option>
                    <option {{ $member->department == 'Pharmacy' ? 'selected' : '' }}>Pharmacy</option>
                    {{-- Add other options similarly --}}
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn text-white px-5" style="background-color: #499FB6;">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
