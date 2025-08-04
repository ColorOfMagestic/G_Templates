document
  .getElementById("mobile-menu-button")
  .addEventListener("click", function () {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
  });

document.querySelectorAll("[data-login-button]").forEach((button) => {
  button.addEventListener("click", () => {
    document.getElementById("login-form").classList.remove("hidden");
    document.getElementById("signup-form").classList.add("hidden");
  });
});

if (!localStorage.getItem('cookiesAccepted')) {
  document.getElementById('cookieNotice').classList.remove('hidden');
} else {
  document.getElementById('cookieNotice')?.remove();
}

document.querySelector('#cookieNotice button')?.addEventListener('click', () => {
  localStorage.setItem('cookiesAccepted', 'true');
});

document.querySelectorAll("[data-signup-button]").forEach((button) => {
  button.addEventListener("click", () => {
    document.getElementById("signup-form").classList.remove("hidden");
    document.getElementById("login-form").classList.add("hidden");
  });
});

document.getElementById("close-signup").addEventListener("click", () => {
  document.getElementById("signup-form").classList.add("hidden");
});

document.getElementById("signup-form").addEventListener("click", (e) => {
  if (e.target === document.getElementById("signup-form")) {
    document.getElementById("signup-form").classList.add("hidden");
  }
});


 document.getElementById('close-login').addEventListener('click', () => {
  document.getElementById('login-form').classList.add('hidden');
});


document.getElementById('loginForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const successMsg = document.getElementById('login-success');
  successMsg.classList.remove('hidden');

  setTimeout(() => {
    successMsg.classList.add('hidden');
    document.getElementById('login-form').classList.add('hidden');
  }, 3000);
});






