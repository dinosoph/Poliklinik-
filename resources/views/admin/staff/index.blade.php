@extends('master.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="text-secondary">Staff List</h5>
    <a href="{{ route('staff.create') }}" class="btn btn-info text-white">+ ADD STAFF</a>
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