
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

    const ageModal = document.getElementById("ageModal");
    const confirmAgeBtn = document.getElementById("confirmAgeBtn");
    const ageKey = "ageConfirmed";

    if (ageModal && !localStorage.getItem(ageKey)) {
      ageModal.classList.remove("hidden");
    }

    if (confirmAgeBtn) {
      confirmAgeBtn.addEventListener("click", () => {
        localStorage.setItem(ageKey, "true");
        ageModal.classList.add("opacity-0");
        setTimeout(() => {
          ageModal.classList.add("hidden");
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
  });

