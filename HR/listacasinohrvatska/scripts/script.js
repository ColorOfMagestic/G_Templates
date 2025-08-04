  // Burger menu toggle
  const toggleBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleBtn?.addEventListener('click', () => {
    mobileMenu?.classList.toggle('hidden');
  });

  // Contact form submission (simulation)
  const form = document.getElementById('contact-form');
  const successMessage = document.getElementById('form-success');

  form?.addEventListener('submit', function (e) {
    e.preventDefault();
    form.classList.add('pointer-events-none', 'opacity-50');

    setTimeout(() => {
      successMessage?.classList.remove('hidden');
      form.reset();
      form.classList.remove('pointer-events-none', 'opacity-50');
    }, 1000);
  });

  const cookieModal = document.getElementById('cookie-modal');
  const acceptBtn = document.getElementById('accept-cookies');

  // Check cookie consent
  if (localStorage.getItem('cookieConsent') === 'accepted') {
    cookieModal.style.display = 'none';
  }

  acceptBtn?.addEventListener('click', () => {
    localStorage.setItem('cookieConsent', 'accepted');
    cookieModal.style.display = 'none';
  });