<footer class="relative w-full py-12 lg:py-16 z-10" style="background:#4c1d95;">
    <div class="w-full px-6 lg:px-12">
        <div class="footer-grid mb-12">

            {{-- Brand --}}
            <div class="footer-brand">
                <div class="flex items-center gap-2 mb-4">
                    <div class="logo-icon"><span style="color:white;font-weight:700;font-size:1.25rem;">E</span></div>
                    <span class="heading-section" style="font-size:1.25rem;color:white;">Edubuddy</span>
                </div>
                <p style="color:rgba(255,255,255,0.7);max-width:24rem;margin-bottom:1.5rem;">
                    Your smart study partner. Courses, exams, and community—all in one place.
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="social-btn" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                    </a>
                    <a href="#" class="social-btn" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="social-btn" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            {{-- Platform links --}}
            <div>
                <h4 style="color:white;font-weight:600;margin-bottom:1rem;">Platform</h4>
                <ul class="footer-links">
                    <li><a href="#features" onclick="smoothScroll(event,'features')">Courses</a></li>
                    <li><a href="#features" onclick="smoothScroll(event,'features')">Exams</a></li>
                    <li><a href="#community" onclick="smoothScroll(event,'community')">Community</a></li>
                    <li><a href="#streak" onclick="smoothScroll(event,'streak')">Study Streak</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 style="color:white;font-weight:600;margin-bottom:1rem;">Contact</h4>
                <ul class="footer-links">
                    <li>
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            hello@edubuddy.com
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="footer-bottom">
            <p style="color:rgba(255,255,255,0.5);font-size:.875rem;">© {{ date('Y') }} Edubuddy. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" style="color:rgba(255,255,255,0.5);font-size:.875rem;">Privacy Policy</a>
                <a href="#" style="color:rgba(255,255,255,0.5);font-size:.875rem;">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
