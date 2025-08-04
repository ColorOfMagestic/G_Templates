document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const burger = document.getElementById("burger-button");
  const mobileMenu = document.getElementById("mobile-menu");
  if (burger && mobileMenu) {
    burger.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }

  // Dropdown toggle
  const dropdownToggle = document.getElementById("dropdown-toggle");
  const dropdownMenu = document.getElementById("dropdown-menu");
  if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener("click", () => {
      dropdownMenu.classList.toggle("hidden");
    });
  }


  // Countdown timer logic
  const countdownEl = document.getElementById("countdown");
  if (countdownEl) {
    const target = new Date();
    target.setHours(target.getHours() + 3, 0, 0, 0);

    const updateCountdown = () => {
      const now = Date.now();
      const distance = target - now;

      if (distance <= 0) {
        countdownEl.textContent = "00:00:00";
        clearInterval(timer);
        return;
      }

      const hours = String(Math.floor((distance / (1000 * 60 * 60)) % 24)).padStart(2, "0");
      const minutes = String(Math.floor((distance / (1000 * 60)) % 60)).padStart(2, "0");
      const seconds = String(Math.floor((distance / 1000) % 60)).padStart(2, "0");

      countdownEl.textContent = `${hours}:${minutes}:${seconds}`;
    };

    updateCountdown();
    const timer = setInterval(updateCountdown, 1000);
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const cookieBanner = document.getElementById("cookie-consent");
  const acceptCookiesBtn = document.getElementById("accept-cookies");
  const consentKey = "cookieConsentAccepted";


    if (localStorage.getItem(consentKey)) {
      cookieBanner.classList.add("hidden", "opacity-0");
    }

    acceptCookiesBtn.addEventListener("click", () => {
      localStorage.setItem(consentKey, "true");
      cookieBanner.classList.add("hidden");
      setTimeout(() => {
        cookieBanner.classList.add("hidden");
      }, 300);
    });
});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJzY3JpcHQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgKCkgPT4ge1xyXG4gIC8vIE1vYmlsZSBtZW51IHRvZ2dsZVxyXG4gIGNvbnN0IGJ1cmdlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYnVyZ2VyLWJ1dHRvblwiKTtcclxuICBjb25zdCBtb2JpbGVNZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtb2JpbGUtbWVudVwiKTtcclxuICBpZiAoYnVyZ2VyICYmIG1vYmlsZU1lbnUpIHtcclxuICAgIGJ1cmdlci5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xyXG4gICAgICBtb2JpbGVNZW51LmNsYXNzTGlzdC50b2dnbGUoXCJoaWRkZW5cIik7XHJcbiAgICB9KTtcclxuICB9XHJcblxyXG4gIC8vIERyb3Bkb3duIHRvZ2dsZVxyXG4gIGNvbnN0IGRyb3Bkb3duVG9nZ2xlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJkcm9wZG93bi10b2dnbGVcIik7XHJcbiAgY29uc3QgZHJvcGRvd25NZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJkcm9wZG93bi1tZW51XCIpO1xyXG4gIGlmIChkcm9wZG93blRvZ2dsZSAmJiBkcm9wZG93bk1lbnUpIHtcclxuICAgIGRyb3Bkb3duVG9nZ2xlLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XHJcbiAgICAgIGRyb3Bkb3duTWVudS5jbGFzc0xpc3QudG9nZ2xlKFwiaGlkZGVuXCIpO1xyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuXHJcbiAgLy8gQ291bnRkb3duIHRpbWVyIGxvZ2ljXHJcbiAgY29uc3QgY291bnRkb3duRWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNvdW50ZG93blwiKTtcclxuICBpZiAoY291bnRkb3duRWwpIHtcclxuICAgIGNvbnN0IHRhcmdldCA9IG5ldyBEYXRlKCk7XHJcbiAgICB0YXJnZXQuc2V0SG91cnModGFyZ2V0LmdldEhvdXJzKCkgKyAzLCAwLCAwLCAwKTtcclxuXHJcbiAgICBjb25zdCB1cGRhdGVDb3VudGRvd24gPSAoKSA9PiB7XHJcbiAgICAgIGNvbnN0IG5vdyA9IERhdGUubm93KCk7XHJcbiAgICAgIGNvbnN0IGRpc3RhbmNlID0gdGFyZ2V0IC0gbm93O1xyXG5cclxuICAgICAgaWYgKGRpc3RhbmNlIDw9IDApIHtcclxuICAgICAgICBjb3VudGRvd25FbC50ZXh0Q29udGVudCA9IFwiMDA6MDA6MDBcIjtcclxuICAgICAgICBjbGVhckludGVydmFsKHRpbWVyKTtcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIH1cclxuXHJcbiAgICAgIGNvbnN0IGhvdXJzID0gU3RyaW5nKE1hdGguZmxvb3IoKGRpc3RhbmNlIC8gKDEwMDAgKiA2MCAqIDYwKSkgJSAyNCkpLnBhZFN0YXJ0KDIsIFwiMFwiKTtcclxuICAgICAgY29uc3QgbWludXRlcyA9IFN0cmluZyhNYXRoLmZsb29yKChkaXN0YW5jZSAvICgxMDAwICogNjApKSAlIDYwKSkucGFkU3RhcnQoMiwgXCIwXCIpO1xyXG4gICAgICBjb25zdCBzZWNvbmRzID0gU3RyaW5nKE1hdGguZmxvb3IoKGRpc3RhbmNlIC8gMTAwMCkgJSA2MCkpLnBhZFN0YXJ0KDIsIFwiMFwiKTtcclxuXHJcbiAgICAgIGNvdW50ZG93bkVsLnRleHRDb250ZW50ID0gYCR7aG91cnN9OiR7bWludXRlc306JHtzZWNvbmRzfWA7XHJcbiAgICB9O1xyXG5cclxuICAgIHVwZGF0ZUNvdW50ZG93bigpO1xyXG4gICAgY29uc3QgdGltZXIgPSBzZXRJbnRlcnZhbCh1cGRhdGVDb3VudGRvd24sIDEwMDApO1xyXG4gIH1cclxufSk7XHJcblxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCAoKSA9PiB7XHJcbiAgY29uc3QgY29va2llQmFubmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJjb29raWUtY29uc2VudFwiKTtcclxuICBjb25zdCBhY2NlcHRDb29raWVzQnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJhY2NlcHQtY29va2llc1wiKTtcclxuICBjb25zdCBjb25zZW50S2V5ID0gXCJjb29raWVDb25zZW50QWNjZXB0ZWRcIjtcclxuXHJcblxyXG4gICAgaWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKGNvbnNlbnRLZXkpKSB7XHJcbiAgICAgIGNvb2tpZUJhbm5lci5jbGFzc0xpc3QuYWRkKFwiaGlkZGVuXCIsIFwib3BhY2l0eS0wXCIpO1xyXG4gICAgfVxyXG5cclxuICAgIGFjY2VwdENvb2tpZXNCdG4uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcclxuICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oY29uc2VudEtleSwgXCJ0cnVlXCIpO1xyXG4gICAgICBjb29raWVCYW5uZXIuY2xhc3NMaXN0LmFkZChcImhpZGRlblwiKTtcclxuICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgY29va2llQmFubmVyLmNsYXNzTGlzdC5hZGQoXCJoaWRkZW5cIik7XHJcbiAgICAgIH0sIDMwMCk7XHJcbiAgICB9KTtcclxufSk7XHJcbiJdLCJmaWxlIjoic2NyaXB0LmpzIn0=
