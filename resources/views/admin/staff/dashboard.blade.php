@extends('master.admin_layout')

@section('content')

<style>
    /* BUTTON STYLING */
    .btn-outline-primary, .btn-outline-danger, .btn-info {
    border-width: 2px;
    transition: all 0.2s ease;

    /* UPCOMING APPOINTMENT CARD */
    #next-appointment-card .card {
    border-left: 5px solid #499FB6; 
}
}

</style>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="text-muted">WELCOME TO POLIKLINIK ALISYA'S ADMIN DASHBOARD</h5>
        <div>
            <!-- Button to go to the detailed Staff List (Table View) -->
            <a href="{{ route('staff.index') }}" class="btn btn-outline-danger me-2">
                <i class="bi bi-list-check"></i> STAFF LIST
            </a>
            <a href="{{ route('staff.create') }}" class="btn btn-info text-white" style="background-color: #499FB6;">
                <i class="bi bi-plus"></i> ADD STAFF
            </a>
        </div>
    </div>

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

    <!-- Staff Cards Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($staff as $member)
         <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center p-3" style="border-radius: 20px;">
                 <div class="card-body">
                    <!-- Role Badge (Dr or Assistant) -->
                    <span class="badge {{ $member->role == 'Doctor' ? 'bg-info' : 'bg-primary' }} mb-3">
                        {{ $member->role == 'Doctor' ? 'Dr' : 'Assistant' }}
                    </span>
                    <div class="mx-auto mb-3" style="width: 80px; height: 80px; border: 2px solid #ddd; border-radius: 50%;"></div>
                    <h5 class="card-title fw-bold">{{ $member->name }}</h5>
                    <p class="text-uppercase small fw-bold" style="color: #499FB6;">{{ $member->department }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Live update script -->
<script>
setInterval(() => {
    fetch('{{ route("staff.nextAppointmentJson") }}')
        .then(res => res.json())
        .then(data => {
            if (data.nextAppointment) {
                document.getElementById('next-appointment-card').innerHTML = `
                    <div class="card mb-4 shadow-sm border-0" style="max-width: 500px;">
                        <div class="card-body">
                            <h5 class="card-title mb-3" style="color: #499FB6;">
                                🕒 Next Appointment
                            </h5>
                            <p class="mb-1"><strong>Patient:</strong> ${data.nextAppointment.name}</p>
                            <p class="mb-1"><strong>Date:</strong> ${data.nextAppointment.date}</p>
                            <p class="mb-3"><strong>Time:</strong> ${data.nextAppointment.time}</p>
                            <a href="/admin/bookings/${data.nextAppointment.id}/view"
                               class="btn btn-outline-primary btn-sm" style="border-color: #499FB6; color: #499FB6;">
                               View Appointment
                            </a>
                        </div>
                    </div>
                `;
            } else {
                document.getElementById('next-appointment-card').innerHTML = `
                    <div class="alert alert-info mb-4">
                        No upcoming approved appointments.
                    </div>
                `;
            }
        });
}, 30000); // update every 30 seconds
</script>
@endsection