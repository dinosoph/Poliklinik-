@extends('master.admin_layout')

@section('content')

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