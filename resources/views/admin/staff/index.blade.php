@extends('master.admin_layout')

@section('content')

<style>
/* =========================
    GENERAL CARD STYLING
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
    border-spacing: 0 10px;
}

thead th {
    background: transparent;
    font-weight: 600;
    color: #495057;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

tbody tr {
    background: #f8f9fa;
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

tbody tr:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.1);
}

/* Remove default borders and spacing for cleaner look */
table td, table th {
    border: none !important;
    vertical-align: middle;
}

/* =========================
    BUTTON STYLING
========================= */
.btn-info {
    background-color: #499FB6;
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    padding: 6px 14px;
    transition: all 0.3s ease;
}

.btn-info:hover {
    background-color: #317f94;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(73, 159, 182, 0.2);
}

.btn-sm {
    border-radius: 6px;
    transition: all 0.3s ease;
}

.btn-sm:hover i {
    transform: scale(1.2);
}

/* Edit button */
.btn-sm[style*="color: #499FB6"] {
    border: 1px solid #499FB6;
    color: #499FB6;
}

.btn-sm[style*="color: #499FB6"]:hover {
    background-color: #499FB6;
    color: white;
    box-shadow: 0 4px 10px rgba(73, 159, 182, 0.2);
}

/* Delete button */
.btn-outline-danger {
    border: 1px solid #FF6B6B;
    color: #FF6B6B;
}

.btn-outline-danger:hover {
    background-color: #FF6B6B;
    color: white;
    box-shadow: 0 4px 10px rgba(255, 107, 107, 0.2);
}

/* =========================
    BREADCRUMBS
========================= */
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

/* =========================
    HEADER SECTION
========================= */
.d-flex h5.text-secondary {
    font-weight: 600;
    letter-spacing: 0.5px;
}

.d-flex .btn-info {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* RESPONSIVE TABLE */
@media (max-width: 767px) {
    table {
        font-size: 0.9rem;
    }
    .d-flex {
        flex-direction: column;
        gap: 10px;
    }
}
</style>


<!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb justify-content-center" style="background: transparent;">
            <li class="breadcrumb-item" style="color: #6c757d;">
                <a href="{{ route('staff.dashboard') }}" style="color: #6c757d; text-decoration: none;">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #499FB6;">
                Staff List
            </li>
        </ol>
    </nav>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="text-secondary">Staff List</h5>
    <a href="{{ route('staff.create') }} " class="btn btn-info text-white">+ ADD STAFF</a>
</div>

<div class="card shadow-sm border-0" style="border-radius: 15px;">
    <div class="card-body">
        <table class="table align-middle">
            <thead class="text-muted">
                <tr>
                    <th>Staff ID</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $member)
                <tr>
                    <td>{{ $member->staff_id }}</td>
                    <td>{{ $member->role }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->department }}</td>
                    <td>
                        {{-- Edit Button --}}
                        <a href="{{ route('staff.edit', $member->id) }}" class="btn btn-sm" style="color: #499FB6; border: 1px solid #499FB6;">
                            <i class="bi bi-pencil"></i>
                        </a>

                        {{-- Delete Button Form (Triggers staff.destroy) --}}
                        <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display:inline;" 
                            onsubmit="return confirm('Are you sure you want to delete Staff ID {{ $member->staff_id }}? This action cannot be undone.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection