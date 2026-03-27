@extends('layouts.app')
@section('title', 'Login – Edubuddy')

@section('content')
<div class="auth-page">
    <div class="auth-card glass-card">

        {{-- Logo --}}
        <div class="flex justify-center mb-8">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="logo-icon"><span style="color:white;font-weight:700;font-size:1.25rem;">E</span></div>
                <span class="heading-section" style="font-size:1.5rem;color:white;">Edubuddy</span>
            </a>
        </div>

        <h1 class="heading-section text-center mb-2" style="font-size:1.875rem;color:white;">Welcome back</h1>
        <p class="text-center mb-8" style="color:rgba(255,255,255,0.7);">Log in to your account to continue learning.</p>

        {{-- Error --}}
        @if($errors->any())
            <div class="alert-error mb-6">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label class="form-label">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-input @error('email') input-error @enderror"
                    placeholder="you@university.edu" required autofocus>
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-input @error('password') input-error @enderror"
                    placeholder="••••••••" required>
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2" style="color:rgba(255,255,255,0.7);font-size:.875rem;">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember me
                </label>
            </div>

            <button type="submit" class="btn-primary w-full justify-center text-center">
                Log in
            </button>
        </form>

        <p class="text-center mt-6" style="color:rgba(255,255,255,0.7);font-size:.875rem;">
            Don't have an account?
            <a href="{{ route('register') }}" style="color:#F59E0B;font-weight:600;">Sign up free</a>
        </p>
    </div>
</div>
@endsection
