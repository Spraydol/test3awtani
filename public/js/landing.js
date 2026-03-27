/* landing.js – GSAP animations for the landing page */

document.addEventListener('DOMContentLoaded', function () {

  // ── Floating particles ──
  const container = document.getElementById('particles');
  if (container) {
    for (let i = 0; i < 20; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      p.style.left  = Math.random() * 100 + '%';
      p.style.top   = Math.random() * 100 + '%';
      p.style.animationDuration = (3 + Math.random() * 2) + 's';
      p.style.animationDelay    = (Math.random() * 2) + 's';
      container.appendChild(p);
    }
  }

  // ── GSAP Hero entrance (runs only if GSAP loaded) ──
  if (typeof gsap === 'undefined') return;

  gsap.registerPlugin(ScrollTrigger);

  // ── Hero entrance timeline ──
  const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

  const imgWrap   = document.getElementById('hero-image-wrap');
  const bubble1   = document.getElementById('bubble1');
  const bubble2   = document.getElementById('bubble2');
  const bubble3   = document.getElementById('bubble3');
  const headline  = document.getElementById('hero-headline');
  const words     = headline ? headline.querySelectorAll('.word') : [];
  const subline   = document.getElementById('hero-sub');
  const cta       = document.getElementById('hero-cta');

  if (imgWrap) {
    tl.fromTo(imgWrap,
      { opacity: 0, x: '-12vw', scale: 0.96 },
      { opacity: 1, x: 0, scale: 1, duration: 0.9 }
    );
  }

  if (bubble1 || bubble2 || bubble3) {
    const bubbles = [bubble1, bubble2, bubble3].filter(Boolean);
    tl.fromTo(bubbles,
      { opacity: 0, scale: 0 },
      { opacity: 1, scale: 1, duration: 0.7, stagger: 0.12, ease: 'back.out(1.7)' },
      '-=0.5'
    );
  }

  if (words.length) {
    tl.fromTo(words,
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.6, stagger: 0.06 },
      '-=0.4'
    );
  }

  if (subline) {
    tl.fromTo(subline,
      { opacity: 0, y: 18 },
      { opacity: 1, y: 0, duration: 0.5 },
      '-=0.3'
    );
  }

  if (cta) {
    tl.fromTo(cta,
      { opacity: 0, y: 18 },
      { opacity: 1, y: 0, duration: 0.5 },
      '-=0.3'
    );
  }

  // ── Hero scroll-exit animation ──
  const heroSection = document.getElementById('hero');
  if (heroSection && headline && subline && cta && imgWrap) {
    const scrollTl = gsap.timeline({
      scrollTrigger: {
        trigger: heroSection,
        start: 'top top',
        end: 'bottom top',
        scrub: 0.6,
      }
    });

    scrollTl
      .fromTo(headline,  { x: 0, opacity: 1 }, { x: '18vw', opacity: 0, ease: 'power2.in' }, 0.7)
      .fromTo(subline,   { x: 0, opacity: 1 }, { x: '12vw', opacity: 0, ease: 'power2.in' }, 0.72)
      .fromTo(cta,       { x: 0, opacity: 1 }, { x: '10vw', opacity: 0, ease: 'power2.in' }, 0.74)
      .fromTo(imgWrap,   { x: 0, opacity: 1 }, { x: '-18vw', opacity: 0, ease: 'power2.in' }, 0.7);

    const bubbles = [bubble1, bubble2, bubble3].filter(Boolean);
    if (bubbles.length) {
      scrollTl.fromTo(bubbles,
        { y: 0, opacity: 1 },
        { y: '-10vh', opacity: 0, ease: 'power2.in' },
        0.75
      );
    }
  }

});
