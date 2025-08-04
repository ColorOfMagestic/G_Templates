  const form = document.getElementById("contactForm");
  const modal = document.getElementById("successModal");

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    setTimeout(() => {
      modal.classList.remove("hidden");
      form.reset();
    }, 500); // simulate delay
  });

  function closeModal() {
    modal.classList.add("hidden");
  }