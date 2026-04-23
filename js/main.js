// RWW Bouw - Main JavaScript

document.addEventListener('DOMContentLoaded', function () {

  // --- Sticky Header ---
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
  }

  // --- Mobile Menu ---
  const menuBtn = document.getElementById('menu-toggle');
  const menuClose = document.getElementById('menu-close');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuOverlay = document.getElementById('menu-overlay');
  const menuLinks = mobileMenu ? mobileMenu.querySelectorAll('a') : [];

  function openMenu() {
    mobileMenu.classList.add('open');
    menuOverlay.classList.add('open');
    menuOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('open');
    menuOverlay.classList.remove('open');
    setTimeout(() => {
      menuOverlay.classList.add('hidden');
    }, 300);
    document.body.style.overflow = '';
  }

  if (menuBtn) menuBtn.addEventListener('click', openMenu);
  if (menuClose) menuClose.addEventListener('click', closeMenu);
  if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);
  menuLinks.forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  // --- Smooth Scroll for Anchor Links ---
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var offset = header ? header.offsetHeight : 0;
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  // --- Fade In on Scroll ---
  var fadeElements = document.querySelectorAll('.fade-in');
  if (fadeElements.length > 0) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    fadeElements.forEach(function (el) {
      observer.observe(el);
    });
  }

  // --- Contact Form ---
  var form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('button[type="submit"]');
      var originalText = btn.textContent;
      btn.textContent = 'Verstuurd!';
      btn.disabled = true;
      btn.classList.remove('bg-rww-red');
      btn.classList.add('bg-green-700');
      setTimeout(function () {
        btn.textContent = originalText;
        btn.disabled = false;
        btn.classList.remove('bg-green-700');
        btn.classList.add('bg-rww-red');
        form.reset();
      }, 3000);
    });
  }

  // --- Project Sliders ---
  function initSlider(container) {
    var track    = container.querySelector('[data-slider-track]');
    var dotsEl   = container.querySelector('[data-slider-dots]');
    var prevBtn  = container.querySelector('.slider-btn-prev');
    var nextBtn  = container.querySelector('.slider-btn-next');
    var controls = container.querySelector('.slider-controls');
    var slides   = track ? Array.from(track.children) : [];

    if (!track || slides.length === 0) return;

    var GAP     = 16;
    var current = 0;
    var perView = 1;
    var total   = slides.length;

    function getSlidesPerView() {
      var override = parseInt(container.dataset.sliderPerView, 10);
      if (!isNaN(override) && override > 0) return override;
      var w = container.offsetWidth;
      if (w >= 1024) return 3;
      if (w >= 640)  return 2;
      return 1;
    }

    function getSlideWidth() {
      return (container.offsetWidth - GAP * (perView - 1)) / perView;
    }

    function maxIndex() {
      return Math.max(0, total - perView);
    }

    function updateControls() {
      if (controls) {
        controls.style.display = maxIndex() === 0 ? 'none' : '';
      }
      if (prevBtn) prevBtn.disabled = (current === 0);
      if (nextBtn) nextBtn.disabled = (current >= maxIndex());

      if (!dotsEl) return;
      dotsEl.innerHTML = '';
      var pages = maxIndex() + 1;
      for (var i = 0; i < pages; i++) {
        var dot = document.createElement('button');
        dot.className = 'slider-dot' + (i === current ? ' active' : '');
        dot.setAttribute('aria-label', 'Slide ' + (i + 1));
        (function (idx) {
          dot.addEventListener('click', function () { moveTo(idx); });
        })(i);
        dotsEl.appendChild(dot);
      }
    }

    function moveTo(index) {
      current = Math.min(Math.max(index, 0), maxIndex());
      var offset = current * (getSlideWidth() + GAP);
      track.style.transform = 'translateX(-' + offset + 'px)';
      updateControls();
    }

    function layout() {
      perView = getSlidesPerView();
      var sw = getSlideWidth();
      slides.forEach(function (slide) {
        slide.style.width = sw + 'px';
      });
      current = Math.min(current, maxIndex());
      moveTo(current);
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () { moveTo(current - 1); });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () { moveTo(current + 1); });
    }

    var touchStartX = 0;
    track.addEventListener('touchstart', function (e) {
      touchStartX = e.touches[0].clientX;
    }, { passive: true });
    track.addEventListener('touchend', function (e) {
      var diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) {
        moveTo(diff > 0 ? current + 1 : current - 1);
      }
    }, { passive: true });

    var resizeTimer;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(layout, 150);
    });

    requestAnimationFrame(layout);
  }

  document.querySelectorAll('[data-slider]').forEach(function (container) {
    initSlider(container);
  });

  // --- Telefoon-klik tracking ---
  // Delegated, zodat dynamisch toegevoegde tel: links ook getracked worden.
  document.addEventListener('click', function (e) {
    var link = e.target.closest && e.target.closest('a[href^="tel:"]');
    if (!link) return;
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      'event': 'telefoon_klik',
      'phone_number': link.getAttribute('href').replace(/^tel:/, '')
    });
  });

});
