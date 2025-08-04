document.addEventListener("DOMContentLoaded", function () {
    // Age Gate
    const ageModal = document.getElementById('age-gate-modal');
    if (ageModal && !localStorage.getItem('ageGateAccepted')) {
      ageModal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }

    window.acceptAgeGate = function () {
      localStorage.setItem('ageGateAccepted', '1');
      if (ageModal) {
        ageModal.style.display = 'none';
        document.body.style.overflow = '';
      }
    };

    // Modal: Open
    document.querySelectorAll("[data-modal-target]").forEach((trigger) => {
      trigger.addEventListener("click", function () {
        const modalId = this.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.remove("hidden");
      });
    });

    // Modal: Close
    document.querySelectorAll("[data-modal-close]").forEach((closer) => {
      closer.addEventListener("click", function () {
        const modalId = this.getAttribute("data-modal-close");
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.add("hidden");
      });
    });

    // Modal: Click outside to close
    document.querySelectorAll(".fixed[id$='Modal']").forEach((modal) => {
      modal.addEventListener("click", function (e) {
        if (e.target === modal) modal.classList.add("hidden");
      });
    });

    // Simulated modal form handler
    function handleSimulatedForm(formId, modalId, successHTML, delay = 1800) {
      const form = document.querySelector(formId);
      if (!form) return;

      const modalContent = form.closest("div");

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const button = form.querySelector("button[type='submit']");
        button.disabled = true;
        button.innerText = "Senden...";

        setTimeout(() => {
          modalContent.innerHTML = successHTML;

          const closeBtn = modalContent.querySelector("[data-modal-close]");
          if (closeBtn) {
            closeBtn.addEventListener("click", function () {
              const modal = document.getElementById(modalId);
              if (modal) modal.classList.add("hidden");
            });
          }
        }, delay);
      });
    }

    // Register form (modal)
    handleSimulatedForm(
      "#registerModal form",
      "registerModal",
      `
      <div class="text-center p-6 sm:p-10">
        <h2 class="text-2xl font-bold text-[#0E1A2B] mb-4">Vielen Dank!</h2>
        <p class="text-sm text-[#4B5563] mb-6">
          Deine Registrierung war erfolgreich. Alle weiteren Informationen wurden per E-Mail gesendet.
        </p>
        <button
          type="button"
          class="px-6 py-2 rounded-full bg-[#D00000] text-white font-semibold hover:bg-[#B00000] transition"
          data-modal-close="registerModal"
        >
          Zurück zur Startseite
        </button>
      </div>
      `
    );

    // Login form (modal)
    handleSimulatedForm(
      "#loginForm",
      "loginModal",
      `
      <div class="text-center p-6 sm:p-10">
        <h2 class="text-2xl font-bold text-[#0E1A2B] mb-4">E-Mail gesendet</h2>
        <p class="text-sm text-[#4B5563] mb-6">
          Wir haben dir einen Bestätigungscode per E-Mail geschickt. Bitte überprüfe dein Postfach.
        </p>
        <button
          type="button"
          class="px-6 py-2 rounded-full bg-[#D00000] text-white font-semibold hover:bg-[#B00000] transition"
          data-modal-close="loginModal"
        >
          Zurück
        </button>
      </div>
      `,
      1500
    );

    // Contact form (separate section)
    const contactForm = document.getElementById("contact-form");
    const contactWrapper = document.getElementById("contact-form-wrapper");
    const contactSuccess = document.getElementById("contact-success");

    if (contactForm && contactWrapper && contactSuccess) {
      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const submitBtn = contactForm.querySelector("button[type='submit']");
        submitBtn.disabled = true;
        submitBtn.innerText = "Wird gesendet...";

        setTimeout(() => {
          contactWrapper.classList.add("hidden");
          contactSuccess.classList.remove("hidden");
        }, 1500);
      });
    }
  });

