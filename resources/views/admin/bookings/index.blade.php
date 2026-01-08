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
    TABLE STYLING
========================= */
table {
    border-collapse: separate;
    border-spacing: 0 8px;
    overflow: hidden;
}

thead th {
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

tbody tr {
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

tbody tr:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.1);
}

tbody tr.table-success {
    background-color: #e6f9f0 !important;
}

table td, table th {
    vertical-align: middle;
    border: none !important;
}

/* =========================
    BUTTONS & BADGES
========================= */
.btn-outline-primary, .btn-outline-info, .btn-outline-secondary {
    border-width: 2px;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.btn-outline-primary:hover {
    background-color: #499FB6;
    color: white !important;
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.2);
}

.btn-outline-info:hover {
    background-color: #499FB6;
    color: white !important;
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.2);
}

.btn-outline-secondary:hover {
    background-color: #6c757d;
    color: white !important;
    box-shadow: 0 4px 12px rgba(108, 117, 125, 0.2);
}

.badge {
    border-radius: 12px;
    font-size: 0.85rem;
    padding: 0.4em 0.8em;
    transition: all 0.3s ease;
}

/* =========================
    UPCOMING APPOINTMENT CARD
========================= */
#next-appointment-card .card {
    border-left: 5px solid #499FB6;
    border-radius: 15px;
    background: linear-gradient(145deg, #FFFFFF, #E6F7FF);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

#next-appointment-card .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(73, 159, 182, 0.2);
}

/* =========================
    HEADINGS & SPACING
========================= */
h3, h5 {
    font-weight: 600;
    color: #495057;
    margin-bottom: 20px;
}

/* =========================
    BREADCRUMBS
========================= */
.breadcrumb {
    background: transparent !important;   /* remove background */
    padding: 0 !important;               /* remove padding */
    margin-bottom: 20px;                 /* spacing below heading */
    border-radius: 0 !important;         /* remove rounded edges */
    box-shadow: none !important;         /* remove any shadow */
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";                         /* arrow separator */
    color: #6c757d;
    padding: 0 6px;
    font-weight: 500;
}

.breadcrumb a {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: #499FB6;
}

.breadcrumb-item.active {
    color: #499FB6; /* active item color */
    font-weight: 600;
}

/* RESPONSIVE */
@media (max-width: 767px) {
    table {
        font-size: 0.9rem;
    }
    .d-flex.justify-content-center {
        flex-direction: column;
        gap: 10px;
    }
}
</style>

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb justify-content-center" style="background: transparent;">
            <li class="breadcrumb-item" style="color: #6c757d;">
                <a href="{{ route('bookings.index') }}" style="color: #499FB6; text-decoration: none;">Booking List</a>
            </li>
        </ol>
    </nav>

      @if($nextAppointment)
    <div class="card mb-4 shadow-sm border-0" style="max-width: 500px;">
        <div class="card-body">
            <h5 class="card-title mb-3" style="color: #499FB6;">
                🕒 Upcoming Doctor Appointment
            </h5>

            <p class="mb-1">
                <strong>Doctor:</strong> {{ $nextAppointment->doctor }}
            </p>

            <p class="mb-1">
                <strong>Patient:</strong> {{ $nextAppointment->name }}
            </p>

            <p class="mb-1">
                <strong>Date:</strong>
                {{ \Carbon\Carbon::parse($nextAppointment->date)->format('d M Y') }}
            </p>

            <p class="mb-3">
                <strong>Time:</strong>
                {{ \Carbon\Carbon::parse($nextAppointment->time)->format('h:i A') }}
            </p>

            <a href="{{ route('bookings.show', $nextAppointment->id) }}"
            class="btn btn-outline-primary btn-sm" style="border-color: #499FB6; color: #499FB6;">
                View Appointment
            </a>
        </div>
    </div>
    @else
    <div class="alert alert-info mb-4">
        No upcoming approved appointments.
    </div>
    @endif

    <h3 class="mb-4">Patient Booking List</h3>
    <table class="table table-hover" style="background: white; border-radius: 10px; overflow: hidden;">
        <thead style="color: #499FB6;">
            <tr>
                <th>Booking ID</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointment as $booking)
            <tr class="{{ $booking->doctor ? 'table-success' : '' }}">
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        @if($booking->doctor)
                            <span class="badge bg-success py-2 px-3">Booking Approved</span>
                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-outline-secondary btn-sm">View</a>
                        @else
                            <a href="{{ route('bookings.assign', $booking->id) }}" class="btn btn-outline-info btn-sm">Assign Doctor</a>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection