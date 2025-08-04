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

  const cookieBanner = document.getElementById('cookie-banner');
  const acceptBtn = document.getElementById('accept-cookies');
  
  if (localStorage.getItem('cookieConsent') === 'accepted') {
    cookieBanner.style.display = 'none';
  }
  
  acceptBtn?.addEventListener('click', () => {
    localStorage.setItem('cookieConsent', 'accepted');
    cookieBanner.style.display = 'none';
  });