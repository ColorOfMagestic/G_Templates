document.addEventListener("DOMContentLoaded", () => {
  // --- Age Verification Modal ---
  const modal = document.getElementById("ageModal");
  const btnOver18 = document.getElementById("btnOver18");
  const btnUnder18 = document.getElementById("btnUnder18");

  if (modal && localStorage.getItem("ageVerified") !== "true") {
    modal.classList.remove("hidden");
  } else if (modal) {
    modal.remove();
  }

  if (btnOver18) {
    btnOver18.addEventListener("click", () => {
      localStorage.setItem("ageVerified", "true");
      modal.classList.add("hidden");
    });
  }

  if (btnUnder18) {
    window.location.href = "https://www.google.com";
  }

  // --- Mobile Burger Menu ---
  const burger = document.getElementById("burger-button");
  const menu = document.getElementById("mobile-menu");

  if (burger && menu) {
    burger.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  }

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
  document.querySelectorAll('.faq-toggle').forEach(toggle => {
    toggle.addEventListener('click', () => {
      const card = toggle.closest('.faq-card');
      const content = card.querySelector('.faq-content');
      const icon = toggle.querySelector('svg');

      const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

      // Скрыть все
      document.querySelectorAll('.faq-content').forEach(c => {
        c.style.maxHeight = null;
        c.classList.remove('opacity-100');
        c.classList.add('opacity-0');
      });

      document.querySelectorAll('.faq-toggle svg').forEach(svg => {
        svg.classList.remove('rotate-45');
      });

      // Показать текущий
      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + 'px';
        content.classList.remove('opacity-0');
        content.classList.add('opacity-100');
        icon.classList.add('rotate-45');
      }
    });
  });

  // --- Cookie Banner Logic ---
  const cookieBanner = document.getElementById("cookieBanner");
  const acceptCookies = document.getElementById("acceptCookies");
  const rejectCookies = document.getElementById("rejectCookies");

  if (cookieBanner && acceptCookies && rejectCookies) {
    if (localStorage.getItem("cookiesAccepted") === null) {
      cookieBanner.style.display = "block";
    } else {
      cookieBanner.style.display = "none";
    }

    acceptCookies.addEventListener("click", () => {
      localStorage.setItem("cookiesAccepted", "true");
      cookieBanner.style.display = "none";
    });

    rejectCookies.addEventListener("click", () => {
      localStorage.setItem("cookiesAccepted", "false");
      cookieBanner.style.display = "none";
    });
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

  document.querySelectorAll('.review-card').forEach(card => {
    const toggle = card.querySelector('.review-toggle');
    const content = card.querySelector('.review-content');

    card.addEventListener('click', () => {
      const isOpen = !content.classList.contains('hidden');

      document.querySelectorAll('.review-content').forEach(c => c.classList.add('hidden'));
      document.querySelectorAll('.review-toggle').forEach(icon => icon.classList.remove('rotate-180'));

      if (!isOpen) {
        content.classList.remove('hidden');
        toggle.classList.add('rotate-180');
      }
    });
  });
});
