<nav id="main-nav" class="nav-bar">
    <div class="w-full px-6 lg:px-12">
        <div class="flex items-center justify-between nav-inner">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="logo-icon">
                    <span style="color:white;font-weight:700;font-size:1.25rem;">E</span>
                </div>
                <span class="heading-section" style="font-size:1.25rem;color:white;">Edubuddy</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="desktop-nav">
                <a href="#features" class="nav-link" onclick="smoothScroll(event,'features')">Courses</a>
                <a href="#features" class="nav-link" onclick="smoothScroll(event,'features')">Exams</a>
                <a href="#community" class="nav-link" onclick="smoothScroll(event,'community')">Community</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="glass-button px-6 py-2" style="color:white;font-weight:500;">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="glass-button px-6 py-2" style="color:white;font-weight:500;">Login</a>
                @endauth
            </div>

            {{-- Mobile toggle --}}
            <button class="mobile-toggle" onclick="toggleMobileMenu()" aria-label="Menu">
                <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="mobile-menu" style="display:none;">
        <div class="px-6 py-4 space-y-4">
            <a href="#features" class="block text-white py-2" onclick="smoothScroll(event,'features');toggleMobileMenu()">Courses</a>
            <a href="#features" class="block text-white py-2" onclick="smoothScroll(event,'features');toggleMobileMenu()">Exams</a>
            <a href="#community" class="block text-white py-2" onclick="smoothScroll(event,'community');toggleMobileMenu()">Community</a>
            @auth
                <a href="{{ route('dashboard') }}" class="block text-white py-2">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-white py-2 w-full text-left">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block text-white py-2">Login</a>
                <a href="{{ route('register') }}" class="block text-white py-2">Register</a>
            @endauth
        </div>
    </div>
</nav>
