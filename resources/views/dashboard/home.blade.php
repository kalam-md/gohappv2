@extends('dashboard.layouts.main')

@section('title', 'Dashboard')
@section('header', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Quick Actions</h3>
        </div>
        <div class="p-6 grid grid-cols-1">
            <a href="{{ route('dashboard.hero-sections.create') }}" class="bg-amber-50 hover:bg-amber-100 text-amber-700 p-4 rounded-lg text-center transition">
                <i class="fas fa-plus-circle text-xl mb-2"></i>
                <p>Add Hero Section</p>
            </a>
        </div>
    </div>
</div>
@endsection