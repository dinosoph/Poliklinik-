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
    <h4 style="color: #499FB6;">Booking Details</h4>

    <div class="card p-4 shadow-sm border-0" style="border-radius: 15px;">
        <form action="{{ route('bookings.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">

                <!-- Booking ID -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Booking ID</label>
                    <input type="text" class="form-control bg-light" value="{{ $appointment->id }}" readonly>
                </div>

                <!-- Appointment Date -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Appointment Date</label>
                    <input type="date" class="form-control bg-light" value="{{ $appointment->date }}" readonly>
                </div>

                <!-- Appointment Time -->
                <div class="col-md-4">
                    <label class="form-label fw-bold">Assign Time</label>
                    <input type="time" name="time" class="form-control" required>
                </div>

                <!-- Patient Name -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Patient Name</label>
                    <input type="text" class="form-control bg-light" value="{{ $appointment->name }}" readonly>
                </div>

                <!-- Reason -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Reason For Visit</label>
                    <textarea class="form-control bg-light" rows="3" readonly>{{ $appointment->message }}</textarea>
                </div>

                <!-- Department -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Department</label>
                    <select name="department" id="department" class="form-select" required>
                        <option value="">Select Department</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Orthopedics">Orthopedics</option>
                        <option value="Dermatology">Dermatology</option>
                    </select>
                </div>

                <!-- Doctor -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Doctor</label>
                    <select name="doctor" id="doctor" class="form-select" required>
                        <option value="">Select Doctor</option>
                    </select>
                </div>

            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn btn-info text-white px-5" style="background-color: #499FB6;">
                    Confirm
                </button>
            </div>
        </form>
    </div>
</div>

<!-- PASS DOCTORS DATA TO JS -->
<script>
    const doctors = @json($doctors);
</script>

<!-- FILTER DOCTORS BY DEPARTMENT -->
<script>
    document.getElementById('department').addEventListener('change', function () {
        const selectedDepartment = this.value;
        const doctorSelect = document.getElementById('doctor');

        // Reset doctor dropdown
        doctorSelect.innerHTML = '<option value="">Select Doctor</option>';

        doctors.forEach(doc => {
            if (doc.department === selectedDepartment) {
                const option = document.createElement('option');
                option.value = doc.name;
                option.textContent = doc.name;
                doctorSelect.appendChild(option);
            }
        });
    });
</script>
@endsection
