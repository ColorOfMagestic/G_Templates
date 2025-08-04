document.addEventListener("DOMContentLoaded", function () {
const cookieBanner = document.getElementById("cookieBanner");
  const areCookiesAccepted = localStorage.getItem("cookiesAccepted");

  if (areCookiesAccepted) {
    cookieBanner.classList.add("hidden");
  } else {
    cookieBanner.classList.remove("hidden");
  }

  const acceptCookies = document.getElementById("acceptCookies");

  if (acceptCookies) {
    acceptCookies.addEventListener("click", function () {
      localStorage.setItem("cookiesAccepted", "true");
      cookieBanner.classList.add("hidden");
    });
  }
  
    if (window.location.pathname.includes('/contact')) {
      const form = document.getElementById('contactForm');
      const successMessage = document.getElementById('formSuccess');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        form.reset(); 
        successMessage.classList.remove('hidden');
      });
    }

});
