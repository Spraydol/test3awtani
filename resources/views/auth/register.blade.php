@extends('layouts.app')
@section('title', 'Create Account – Edubuddy')

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

        <h1 class="heading-section text-center mb-2" style="font-size:1.875rem;color:white;">Create your account</h1>
        <p class="text-center mb-8" style="color:rgba(255,255,255,0.7);">Join thousands of students studying smarter.</p>

        @if($errors->any())
            <div class="alert-error mb-6">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div>
                <label class="form-label">Full name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="form-input @error('name') input-error @enderror"
                    placeholder="Ada Lovelace" required autofocus>
                @error('name')<p class="input-error-msg">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="form-label">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-input @error('email') input-error @enderror"
                    placeholder="you@university.edu" required>
                @error('email')<p class="input-error-msg">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-input @error('password') input-error @enderror"
                    placeholder="At least 8 characters" required>
                @error('password')<p class="input-error-msg">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation"
                    class="form-input"
                    placeholder="Repeat your password" required>
            </div>

            <button type="submit" class="btn-primary w-full justify-center text-center">
                Create free account
            </button>
        </form>

        <p class="text-center mt-6" style="color:rgba(255,255,255,0.7);font-size:.875rem;">
            Already have an account?
            <a href="{{ route('login') }}" style="color:#F59E0B;font-weight:600;">Log in</a>
        </p>
    </div>
</div>
@endsection
