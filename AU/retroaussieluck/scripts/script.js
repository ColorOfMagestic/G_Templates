document.addEventListener("DOMContentLoaded", () => {
  // --- Mobile Burger Menu ---
  const menuToggle = document.getElementById('toggle-menu');
  const menuButton = document.getElementById('menu-button');
  const burgerButton = document.getElementById('burger-button');

  function toggleMenu() {
    menuToggle.classList.toggle('hidden');
  }

  menuButton?.addEventListener('click', toggleMenu);
  burgerButton?.addEventListener('click', toggleMenu);

  // --- Contact Form Alert ---
  const alertBox = document.getElementById("form-alert");
  const sendBtn = document.getElementById("send-btn");

  if (sendBtn && alertBox) {
    sendBtn.addEventListener("click", () => {
      alertBox.classList.remove("hidden");
      setTimeout(() => {
        alertBox.classList.add("hidden");
      }, 6000);
    });
  }

  // --- FAQ Accordion (Single open) ---
  document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const open = !content.classList.contains('hidden');
      document.querySelectorAll('.faq-content').forEach(el => el.classList.add('hidden'));
      document.querySelectorAll('.faq-toggle span:last-child').forEach(icon => icon.textContent = '+');
      if (!open) {
        content.classList.remove('hidden');
        button.querySelector('span:last-child').textContent = '–';
      }
    });
  });

  // --- Cookie Banner Logic ---
  
    const acceptBtn = document.getElementById('acceptCookies');
    const banner = document.getElementById('cookieBanner');

    if (acceptBtn && banner) {
      acceptBtn.addEventListener('click', function () {
        banner.style.display = 'none';
        localStorage.setItem('cookieConsent', 'accepted');
      });
    }

    // Optional: Hide banner if already accepted
    if (localStorage.getItem('cookieConsent') === 'accepted') {
      if (banner) banner.style.display = 'none';
    }

  // --- Modal Logic (Login/Register) ---
  const openButtons = document.querySelectorAll("[data-modal-open]");
  const closeButtons = document.querySelectorAll("[data-modal-close]");

  openButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      const modalId = btn.getAttribute("data-modal-open");
      const targetModal = document.getElementById(`modal-${modalId}`);

      document.querySelectorAll(".fixed[id^='modal-']").forEach((modal) => {
        modal.classList.add("hidden");
      });

      if (targetModal) {
        targetModal.classList.remove("hidden");
      }
    });
  });

  closeButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const modal = btn.closest(".fixed");
      if (modal) modal.classList.add("hidden");
    });
  });

  document.querySelectorAll(".review-card").forEach((card) => {
    const toggle = card.querySelector(".review-toggle");
    const content = card.querySelector(".review-content");

    card.addEventListener("click", () => {
      const isOpen = !content.classList.contains("hidden");

      document
        .querySelectorAll(".review-content")
        .forEach((c) => c.classList.add("hidden"));
      document
        .querySelectorAll(".review-toggle")
        .forEach((icon) => icon.classList.remove("rotate-180"));

      if (!isOpen) {
        content.classList.remove("hidden");
        toggle.classList.add("rotate-180");
      }
    });
  });
});
