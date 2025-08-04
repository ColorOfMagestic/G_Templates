
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

  const targetDate = new Date("2025-07-11T22:00:00+10:00"); // AEST next draw
  const timer = () => {
    const now = new Date();
    const diff = targetDate - now;
    if (diff <= 0) return;

    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const m = Math.floor((diff / (1000 * 60)) % 60);
    const s = Math.floor((diff / 1000) % 60);

    document.getElementById("days").textContent = String(d).padStart(2, "0");
    document.getElementById("hours").textContent = String(h).padStart(2, "0");
    document.getElementById("minutes").textContent = String(m).padStart(2, "0");
    document.getElementById("seconds").textContent = String(s).padStart(2, "0");
  };

  setInterval(timer, 1000);
  timer();
  });

