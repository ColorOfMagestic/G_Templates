  document.addEventListener("DOMContentLoaded", () => {
    // Бургер-меню
    const burger = document.getElementById("menu-toggle");
    const menu = document.getElementById("mobile-menu");

    if (burger && menu) {
      burger.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    }

    // Обновление таймстемпа (если элемент существует)
    const el = document.getElementById("timestamp");
    if (el) {
      const now = new Date();
      const formatted = now.toLocaleString("en-AU", {
        dateStyle: "medium",
        timeStyle: "short",
      });
      el.textContent = formatted;
    }

    // Запуск всех таймеров
    const timers = document.querySelectorAll(".jackpot-timer");

    timers.forEach((timer) => {
      const deadline = new Date(timer.getAttribute("data-deadline")).getTime();
      const daysEl = timer.querySelector(".days");
      const hoursEl = timer.querySelector(".hours");
      const minutesEl = timer.querySelector(".minutes");
      const secondsEl = timer.querySelector(".seconds");

      function updateTimer() {
        const now = new Date().getTime();
        const distance = deadline - now;

        if (distance < 0) {
          daysEl.textContent = "0";
          hoursEl.textContent = "0";
          minutesEl.textContent = "0";
          secondsEl.textContent = "0";
          return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        daysEl.textContent = days;
        hoursEl.textContent = hours;
        minutesEl.textContent = minutes;
        secondsEl.textContent = seconds;
      }

      updateTimer();
      setInterval(updateTimer, 1000);
    });

    const banner = document.getElementById("cookieBanner");
    const accept = document.getElementById("cookieAccept");
  
    if (!localStorage.getItem("cookieAccepted")) {
      setTimeout(() => {
        banner.classList.remove("opacity-0", "pointer-events-none");
      }, 1000);
    }
  
    accept.addEventListener("click", () => {
      localStorage.setItem("cookieAccepted", "true");
      banner.classList.add("opacity-0", "pointer-events-none");
    });

    const notice = document.getElementById("ageNotice");
    if (notice) {
      notice.classList.remove("opacity-0", "pointer-events-none");
      notice.addEventListener("click", () => {
        notice.classList.add("opacity-0", "pointer-events-none");
      });
    }
  });


    