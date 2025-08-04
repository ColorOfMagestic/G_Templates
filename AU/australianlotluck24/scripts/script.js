
  document.addEventListener("DOMContentLoaded", () => {
    const burgerButton = document.getElementById('burger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (burgerButton && mobileMenu) {
      burgerButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }

    const reviewForm = document.getElementById('reviewForm');
    const successMsg = document.getElementById('reviewSuccess');
    if (reviewForm && successMsg) {
      reviewForm.addEventListener('submit', function (e) {
        e.preventDefault();
        successMsg.classList.remove('hidden');
        reviewForm.reset();
      });
    }

    const cookieBanner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("accept-cookies");
    const consentKey = "cookieConsentAccepted";

    if (cookieBanner && !localStorage.getItem(consentKey)) {
      cookieBanner.classList.remove("hidden");
    }

    if (acceptBtn) {
      acceptBtn.addEventListener("click", () => {
        localStorage.setItem(consentKey, "true");
        cookieBanner.classList.add("opacity-0");
        setTimeout(() => {
          cookieBanner.classList.add("hidden");
        }, 300);
      });
    }

    // Ticket logic
    let ticketCount = 1;
    const pricePerTicket = 10;

    const ticketCountElem = document.getElementById('ticket-count');
    const ticketNumberElem = document.getElementById('ticket-number');
    const totalAmountElem = document.getElementById('total-amount');
    const confirmationMessage = document.getElementById('confirmation-message');

    function updateCart() {
      if (ticketCountElem) ticketCountElem.textContent = ticketCount;
      if (ticketNumberElem) ticketNumberElem.textContent = ticketCount;
      if (totalAmountElem) totalAmountElem.textContent = `$${(ticketCount * pricePerTicket).toFixed(2)}`;
    }

    window.increaseCount = () => {
      ticketCount++;
      updateCart();
    };

    window.decreaseCount = () => {
      if (ticketCount > 1) {
        ticketCount--;
        updateCart();
      }
    };

    window.submitForm = () => {
      if (confirmationMessage) {
        confirmationMessage.classList.remove('hidden');
        confirmationMessage.textContent = 'All details have been sent to your email.';
      }
    };

    updateCart();

    const contactForm = document.getElementById('contactForm');
  const contactSuccess = document.getElementById('contactSuccess');

  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      contactSuccess.classList.remove('hidden');
      contactForm.reset();
    });
  }

  const drawEndTime = new Date('2025-07-25T19:00:00+10:00');

  function pad(n) {
    return n.toString().padStart(2, '0');
  }

  function updateCountdown() {
    const now = new Date();
    const diff = drawEndTime - now;
    let days = 0, hours = 0, minutes = 0, seconds = 0;

    if (diff > 0) {
      days = Math.floor(diff / (1000 * 60 * 60 * 24));
      hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      minutes = Math.floor((diff / (1000 * 60)) % 60);
      seconds = Math.floor((diff / 1000) % 60);
    }

    document.getElementById('days').textContent = pad(days);
    document.getElementById('hours').textContent = pad(hours);
    document.getElementById('minutes').textContent = pad(minutes);
    document.getElementById('seconds').textContent = pad(seconds);

  }

  updateCountdown();
  setInterval(updateCountdown, 1000);

  if (!localStorage.getItem('age_verified')) {
    document.getElementById('age-gate').style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }

  document.getElementById('age-yes').onclick = function() {
    localStorage.setItem('age_verified', 'yes');
    document.getElementById('age-gate').style.display = 'none';
    document.body.style.overflow = '';
  };

  document.getElementById('age-no').onclick = function() {
    localStorage.setItem('age_verified', 'no');
    window.location.href = 'https://www.google.com';
  };
  });

