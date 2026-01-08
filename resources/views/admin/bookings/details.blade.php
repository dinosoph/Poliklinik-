@extends('master.admin_layout')

@section('content')
<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb justify-content-center" style="background: transparent;">
        <li class="breadcrumb-item">
            <a href="{{ route('bookings.index') }}" style="color: #6c757d; text-decoration: none;">Booking List</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="color: #499FB6;">
            Booking Details
        </li>
    </ol>
</nav>

<div class="container">
    <h4 class="mb-4" style="color: #499FB6;">Booking Details</h4>

    <div class="card p-4 shadow-sm border-0" style="border-radius: 15px;">
        <form action="{{ route('bookings.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">

                <!-- Booking ID -->
                <div class="col-md-6">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-card-checklist me-1"></i> Booking ID
                    </label>
                    <input type="text" class="form-control bg-light shadow-sm" value="{{ $appointment->id }}" readonly>
                </div>

                <!-- Appointment Date -->
                <div class="col-md-6">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-calendar-event me-1"></i> Appointment Date
                    </label>
                    <input type="date" class="form-control bg-light shadow-sm" value="{{ $appointment->date }}" readonly>
                </div>

                <!-- Appointment Time -->
                <div class="col-md-4">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-clock me-1"></i> Assign Time
                    </label>
                    <input type="time" name="time" id="appointment-time" class="form-control shadow-sm" required>
                </div>

                <!-- Patient Name -->
                <div class="col-md-12">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-person-fill me-1"></i> Patient Name
                    </label>
                    <input type="text" class="form-control bg-light shadow-sm" value="{{ $appointment->name }}" readonly>
                </div>

                <!-- Reason -->
                <div class="col-md-12">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-journal-text me-1"></i> Reason For Visit
                    </label>
                    <textarea class="form-control bg-light shadow-sm" rows="3" readonly>{{ $appointment->message }}</textarea>
                </div>

                <!-- Department -->
                <div class="col-md-12">
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-building me-1"></i> Department
                    </label>
                    <select name="department" id="department" class="form-select shadow-sm" required>
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
                    <label class="form-label fw-bold text-primary-blue">
                        <i class="bi bi-person-badge me-1"></i> Doctor
                    </label>
                    <select name="doctor" id="doctor" class="form-select shadow-sm" required>
                        <option value="">Select Doctor</option>
                    </select>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn btn-info text-white px-5 shadow" style="background-color: #499FB6;">
                    <i class="bi bi-check2-circle me-1"></i> Confirm
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

<!-- SET MIN TIME TO CURRENT TIME -->
<script>
    const timeInput = document.getElementById('appointment-time');

    function setMinTime() {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();

        // Pad single digits
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;

        timeInput.min = `${hours}:${minutes}`;
    }

    // Set min time on page load
    setMinTime();

    // Optional: update min time every minute if page stays open
    setInterval(setMinTime, 60000);
</script>

<!-- Optional: Hover & Focus effects for inputs/selects -->
<style>
    /* Blue for subheaders */
    .text-primary-blue {
        color: #499FB6 !important;
    }

    input.form-control, textarea.form-control, select.form-select {
        transition: all 0.2s ease;
    }
    input.form-control:focus, textarea.form-control:focus, select.form-select:focus {
        box-shadow: 0 0 6px rgba(73, 159, 182, 0.4);
        border-color: #499FB6;
    }
</style>
@endsection
