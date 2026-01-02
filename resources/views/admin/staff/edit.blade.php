@extends('master.admin_layout')

@section('content')
<div class="container">
    <h5 class="mb-4">Edit Staff Details</h5>
    <div class="card p-4 border-0 shadow-sm" style="border-radius: 15px;">
        {{-- Action points to update; method must be changed to PATCH for Laravel --}}
        <form action="{{ route('staff.update', $member->id) }}" method="POST">
            @csrf
            @method('PATCH') {{-- Required for update actions --}}

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
