document.addEventListener("DOMContentLoaded", () => {
  // Burger menu
  const burger = document.getElementById("burger");
  const menu = document.getElementById("mobile-menu");
  if (burger && menu) {
    burger.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  }

  // Contact form
  const form = document.getElementById("contactForm");
  const successMessage = document.getElementById("successMessage");
  if (form && successMessage) {
    form.addEventListener("submit", e => {
      e.preventDefault();
      successMessage.classList.add("hidden");
      setTimeout(() => {
        form.reset();
        successMessage.classList.remove("hidden");
      }, 2000);
    });
  }

  // Open modal by data attribute
  document.querySelectorAll("[data-modal]").forEach(trigger => {
    trigger.addEventListener("click", e => {
      e.preventDefault();
      const target = trigger.getAttribute("data-modal");
      const modal = document.getElementById("modal-" + target);
      if (modal) modal.showModal();
    });
  });
});

// Simulate login
function simulateLogin(form) {
  const btn = form.querySelector("button[type=submit]");
  const text = btn.querySelector(".btn-text");
  const spinner = btn.querySelector(".btn-spinner");
  text.textContent = "Loading...";
  spinner.classList.remove("hidden");
  btn.disabled = true;

  setTimeout(() => {
    window.location.href = "/";
  }, 1500);
}

// Simulate signup
function simulateSignup(form) {
  const btn = form.querySelector("button[type=submit]");
  const text = btn.querySelector(".btn-text");
  const spinner = btn.querySelector(".btn-spinner");
  text.textContent = "Creating...";
  spinner.classList.remove("hidden");
  btn.disabled = true;

  setTimeout(() => {
    window.location.href = "/";
  }, 1500);
}
