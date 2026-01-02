@extends('layouts.admin')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-gray-400 uppercase font-bold">Welcome to Poliklinik Alisya's Admin Dashboard</h1>
        <div class="flex gap-2">
            <a href="{{ route('admin.staff.index') }}" class="px-4 py-2 border border-red-400 text-red-400 rounded">Staff List</a>
            <a href="{{ route('admin.staff.create') }}" class="px-4 py-2 bg-teal-500 text-white rounded">+ Add Staff</a>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        @foreach($staffs as $staff)
            <div class="border rounded-lg p-4 text-center">
                <span class="px-2 py-1 text-white rounded text-sm {{ $staff['role'] == 'Dr' ? 'bg-teal-200 text-teal-800' : 'bg-purple-600' }}">
                    {{ $staff['role'] }}
                </span>
                <div class="my-4">
                    <div class="w-16 h-16 border-2 border-teal-200 rounded-full mx-auto"></div>
                </div>
                <h2 class="font-semibold">{{ $staff['name'] }}</h2>
                <p class="text-teal-500 font-bold">{{ $staff['department'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
