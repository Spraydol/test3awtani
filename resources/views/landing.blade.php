@extends('layouts.app')

@section('title', 'Edubuddy - Smart Study Partner')

@section('content')

{{-- Navigation --}}
@include('partials.navigation')

{{-- Hero Section --}}
<section id="hero" class="relative min-h-screen w-full flex items-center overflow-hidden z-10">
    <div class="absolute inset-0 gradient-bg"></div>

    {{-- Floating particles --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" id="particles"></div>

    <div class="relative w-full px-6 lg:px-12 pt-20">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center min-h-screen-80">

            {{-- Left - Image --}}
            <div class="relative order-2 lg:order-1" id="hero-image-wrap">
                <div class="glass-card overflow-hidden aspect-4-3">
                    <img src="{{ asset('images/hero_student.jpg') }}" alt="Student studying" class="w-full h-full object-cover">
                </div>
                <div class="icon-bubble absolute" style="top:-1rem;right:2rem;" id="bubble1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                </div>
                <div class="icon-bubble absolute floating-delayed" style="bottom:2rem;right:-1rem;width:84px;height:84px;" id="bubble2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-1.54Z"/><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-1.54Z"/></svg>
                </div>
                <div class="icon-bubble absolute floating-slow" style="bottom:-1rem;left:2rem;" id="bubble3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
            </div>

            {{-- Right - Content --}}
            <div class="order-1 lg:order-2 text-center lg:text-left">
                <div id="hero-headline" class="mb-6">
                    <h1 class="heading-display" style="font-size:clamp(2.5rem,6vw,4.5rem);color:white;line-height:0.95;">
                        <span class="word inline-block">Study</span>&nbsp;
                        <span class="word inline-block">smarter,</span><br>
                        <span class="word inline-block">stress</span>&nbsp;
                        <span class="word inline-block">less.</span>
                    </h1>
                </div>
                <p id="hero-sub" class="text-lg lg:text-xl mb-8 max-w-md mx-auto lg:mx-0" style="color:rgba(255,255,255,0.8);">
                    Courses, past exams, and a community that actually helps—all in one place.
                </p>
                <div id="hero-cta" class="space-y-4">
                    <a href="#features" class="btn-primary inline-flex items-center gap-2 text-lg" onclick="smoothScroll(event,'features')">
                        Start learning
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <p style="color:rgba(255,255,255,0.7);font-size:.875rem;">
                        Already part of the community?
                        <a href="{{ route('login') }}" style="color:#F59E0B;font-weight:600;">Log in</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Features Section --}}
<section id="features" class="relative w-full py-20 lg:py-28 z-20 section-blue">
    <div class="w-full px-6 lg:px-12">
        <h2 class="heading-section text-center mb-12 lg:mb-16 section-title" style="font-size:clamp(1.875rem,4vw,3rem);color:white;">
            Everything you need to ace your year.
        </h2>
        <div class="grid-features">
            @php
            $features = [
                ['icon'=>'book','title'=>'Courses','desc'=>'Organized by subject, easy to follow.','img'=>'features_courses.jpg'],
                ['icon'=>'file','title'=>'Exams','desc'=>'Past papers + corrections.','img'=>'features_exams.jpg'],
                ['icon'=>'play','title'=>'Videos','desc'=>'Lessons & motivation.','img'=>'features_videos.jpg'],
                ['icon'=>'users','title'=>'Community','desc'=>'Ask, answer, grow.','img'=>'features_community.jpg'],
            ];
            @endphp
            @foreach($features as $f)
            <div class="feature-card scroll-reveal">
                <div class="aspect-16-10 overflow-hidden">
                    <img src="{{ asset('images/'.$f['img']) }}" alt="{{ $f['title'] }}" class="feature-img">
                </div>
                <div class="p-5 lg:p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="feature-icon-wrap">
                            @include('partials.icon', ['name' => $f['icon']])
                        </div>
                        <h3 class="heading-section" style="font-size:1.25rem;color:white;">{{ $f['title'] }}</h3>
                    </div>
                    <p style="color:rgba(255,255,255,0.7);font-size:.875rem;">{{ $f['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Login / Get Started Section --}}
<section id="login" class="relative w-full py-20 lg:py-28 z-10 section-blue">
    <div class="w-full px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image --}}
            <div class="relative order-2 lg:order-1 scroll-reveal-left">
                <div class="glass-card overflow-hidden aspect-4-3">
                    <img src="{{ asset('images/login_student.jpg') }}" alt="Student using laptop" class="w-full h-full object-cover">
                </div>
                <div class="absolute" style="bottom:-1rem;right:1.5rem;">
                    <div class="glass-card px-4 py-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        <span style="color:white;font-size:.875rem;font-weight:500;">Secure login</span>
                    </div>
                </div>
            </div>

            {{-- Steps / Register form --}}
            <div class="order-1 lg:order-2 scroll-reveal-right">
                <h2 class="heading-section mb-8" style="font-size:clamp(1.875rem,4vw,3rem);color:white;">
                    Get started in seconds.
                </h2>

                @if(session('success'))
                    <div class="alert-success mb-4">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" placeholder="Your name"
                            value="{{ old('name') }}"
                            class="form-input @error('name') input-error @enderror"
                            required>
                        @error('name')<p class="input-error-msg">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Academic email"
                            value="{{ old('email') }}"
                            class="form-input @error('email') input-error @enderror"
                            required>
                        @error('email')<p class="input-error-msg">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password (min 8 chars)"
                            class="form-input @error('password') input-error @enderror"
                            required>
                        @error('password')<p class="input-error-msg">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" placeholder="Confirm password"
                            class="form-input" required>
                    </div>
                    <button type="submit" class="btn-primary w-full text-center justify-center">
                        Create free account
                    </button>
                    <p style="color:rgba(255,255,255,0.7);font-size:.875rem;text-align:center;">
                        Already have an account?
                        <a href="{{ route('login') }}" style="color:#F59E0B;font-weight:600;">Log in</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>

{{-- Footer --}}
@include('partials.footer')

@endsection

@push('scripts')
<script src="{{ asset('js/landing.js') }}"></script>
@endpush
