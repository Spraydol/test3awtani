/* app.js – shared JS loaded on every page */

// ── Sticky nav scroll effect ──
(function () {
  const nav = document.getElementById('main-nav');
  if (!nav) return;
  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }, { passive: true });
})();

// ── Mobile menu toggle ──
function toggleMobileMenu() {
  const menu = document.getElementById('mobile-menu');
  const iconMenu  = document.getElementById('icon-menu');
  const iconClose = document.getElementById('icon-close');
  if (!menu) return;
  const isOpen = menu.style.display === 'block';
  menu.style.display = isOpen ? 'none' : 'block';
  if (iconMenu)  iconMenu.style.display  = isOpen ? 'block' : 'none';
  if (iconClose) iconClose.style.display = isOpen ? 'none'  : 'block';
}

// ── Smooth scroll helper ──
function smoothScroll(event, targetId) {
  event.preventDefault();
  const el = document.getElementById(targetId);
  if (el) el.scrollIntoView({ behavior: 'smooth' });
}

// ── Scroll-reveal observer ──
(function () {
  const targets = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .section-title');
  if (!targets.length) return;

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  targets.forEach(function (el) { observer.observe(el); });
})();
