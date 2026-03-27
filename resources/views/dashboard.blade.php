@extends('layouts.app')
@section('title', 'Dashboard – Edubuddy')

@section('content')

@include('partials.navigation')

<main class="dashboard-main">
    <div class="w-full px-6 lg:px-12 py-12">

        {{-- Welcome header --}}
        <div class="mb-10">
            <h1 class="heading-display mb-2" style="font-size:clamp(2rem,4vw,3rem);color:white;">
                Welcome back, {{ $user->name }} 👋
            </h1>
            <p style="color:rgba(255,255,255,0.7);">Ready to study smarter today?</p>
        </div>

        {{-- Stats row --}}
        <div class="dashboard-stats mb-10">
            <div class="stat-card glass-card">
                <div class="stat-icon" style="background:rgba(245,158,11,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                </div>
                <div>
                    <p class="stat-value">0</p>
                    <p class="stat-label">Courses</p>
                </div>
            </div>
            <div class="stat-card glass-card">
                <div class="stat-icon" style="background:rgba(59,130,246,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <div>
                    <p class="stat-value">0</p>
                    <p class="stat-label">Exams done</p>
                </div>
            </div>
            <div class="stat-card glass-card">
                <div class="stat-icon" style="background:rgba(167,139,250,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <p class="stat-value">0 days</p>
                    <p class="stat-label">Study streak</p>
                </div>
            </div>
        </div>

        {{-- Quick actions --}}
        <h2 class="heading-section mb-6" style="font-size:1.5rem;color:white;">Quick actions</h2>
        <div class="dashboard-actions mb-10">
            <a href="#" class="action-card glass-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                <span>Browse Courses</span>
            </a>
            <a href="#" class="action-card glass-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                <span>Past Exams</span>
            </a>
            <a href="#" class="action-card glass-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>Community</span>
            </a>
        </div>

        {{-- Account info --}}
        <div class="glass-card p-6 max-w-lg">
            <h3 class="heading-section mb-4" style="font-size:1.25rem;color:white;">Account</h3>
            <div class="space-y-3">
                <div class="flex justify-between" style="color:rgba(255,255,255,0.8);">
                    <span style="color:rgba(255,255,255,0.5);">Name</span>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="flex justify-between" style="color:rgba(255,255,255,0.8);">
                    <span style="color:rgba(255,255,255,0.5);">Email</span>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="flex justify-between" style="color:rgba(255,255,255,0.8);">
                    <span style="color:rgba(255,255,255,0.5);">Member since</span>
                    <span>{{ $user->created_at->format('M Y') }}</span>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-6">
                @csrf
                <button type="submit" class="btn-secondary">Log out</button>
            </form>
        </div>

    </div>
</main>

@endsection
