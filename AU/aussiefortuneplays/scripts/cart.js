
document.addEventListener("DOMContentLoaded", function () {
  // === Ticket Logic ===
  const inputs = document.querySelectorAll('#number-inputs input');
  const ticketItem = document.querySelector('#ticket-item');
  const ballWrap = ticketItem?.querySelector('.flex.items-center.gap-3.flex-wrap');
  const ticketLabel = `<span class="text-sm font-bold">#1</span>`;

  const ticketCountEl = document.getElementById("ticket-count");
  const ticketTotalEl = document.getElementById("ticket-total");
  const ticketTotalTwoEl = document.getElementById("ticket-total-two");
  const totalAmountEl = document.getElementById("total-amount");
  const ticketLabelEl = document.getElementById("ticket-label");
  const increaseBtn = document.getElementById("increase");
  const decreaseBtn = document.getElementById("decrease");
  const removeBtn = document.getElementById("remove-ticket");

  const ticketPrice = 10.0;
  let ticketCount = 1;

  function updateCart(count) {
    const plural = count === 1 ? 'Ticket' : 'Tickets';
    const total = (count * ticketPrice).toFixed(2);
    if (ticketLabelEl) ticketLabelEl.textContent = `${count} ${plural}`;
    if (ticketTotalEl) ticketTotalEl.textContent = total;
    if (ticketTotalTwoEl) ticketTotalTwoEl.textContent = `$${total}`;
    if (totalAmountEl) totalAmountEl.textContent = `$${total}`;
    if (ticketCountEl) ticketCountEl.textContent = count;
  }

  if (inputs.length && ballWrap) {
    inputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9]/g, '').slice(0, 2);
        const numbers = Array.from(inputs).map(i => i.value.trim()).filter(Boolean);
        const balls = numbers.map(n => `
          <span class="bg-red-500 text-white font-bold w-9 h-9 flex items-center justify-center rounded-full">${n}</span>
        `).join('');
        ballWrap.innerHTML = ticketLabel + balls;
      });
    });
  }

  increaseBtn?.addEventListener("click", () => {
    ticketCount++;
    updateCart(ticketCount);
  });

  decreaseBtn?.addEventListener("click", () => {
    if (ticketCount > 1) {
      ticketCount--;
      updateCart(ticketCount);
    }
  });

  removeBtn?.addEventListener("click", () => {
    inputs.forEach(input => input.value = '');
    if (ballWrap) ballWrap.innerHTML = ticketLabel;
  });

  updateCart(ticketCount);

  // === Modal Logic ===
  const modal = document.getElementById('orderModal');
  const openBtn = document.querySelector('[data-open-pay]');
  const closeBtn = document.getElementById('closeModalBtn');

  if (modal && openBtn && closeBtn) {
    openBtn.addEventListener('click', (e) => {
      e.preventDefault();
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    });

    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }
    });
  }
});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJjYXJ0LmpzIl0sInNvdXJjZXNDb250ZW50IjpbIlxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbiAoKSB7XHJcbiAgLy8gPT09IFRpY2tldCBMb2dpYyA9PT1cclxuICBjb25zdCBpbnB1dHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcjbnVtYmVyLWlucHV0cyBpbnB1dCcpO1xyXG4gIGNvbnN0IHRpY2tldEl0ZW0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdGlja2V0LWl0ZW0nKTtcclxuICBjb25zdCBiYWxsV3JhcCA9IHRpY2tldEl0ZW0/LnF1ZXJ5U2VsZWN0b3IoJy5mbGV4Lml0ZW1zLWNlbnRlci5nYXAtMy5mbGV4LXdyYXAnKTtcclxuICBjb25zdCB0aWNrZXRMYWJlbCA9IGA8c3BhbiBjbGFzcz1cInRleHQtc20gZm9udC1ib2xkXCI+IzE8L3NwYW4+YDtcclxuXHJcbiAgY29uc3QgdGlja2V0Q291bnRFbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidGlja2V0LWNvdW50XCIpO1xyXG4gIGNvbnN0IHRpY2tldFRvdGFsRWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRpY2tldC10b3RhbFwiKTtcclxuICBjb25zdCB0aWNrZXRUb3RhbFR3b0VsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0aWNrZXQtdG90YWwtdHdvXCIpO1xyXG4gIGNvbnN0IHRvdGFsQW1vdW50RWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRvdGFsLWFtb3VudFwiKTtcclxuICBjb25zdCB0aWNrZXRMYWJlbEVsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0aWNrZXQtbGFiZWxcIik7XHJcbiAgY29uc3QgaW5jcmVhc2VCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImluY3JlYXNlXCIpO1xyXG4gIGNvbnN0IGRlY3JlYXNlQnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJkZWNyZWFzZVwiKTtcclxuICBjb25zdCByZW1vdmVCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInJlbW92ZS10aWNrZXRcIik7XHJcblxyXG4gIGNvbnN0IHRpY2tldFByaWNlID0gMTAuMDtcclxuICBsZXQgdGlja2V0Q291bnQgPSAxO1xyXG5cclxuICBmdW5jdGlvbiB1cGRhdGVDYXJ0KGNvdW50KSB7XHJcbiAgICBjb25zdCBwbHVyYWwgPSBjb3VudCA9PT0gMSA/ICdUaWNrZXQnIDogJ1RpY2tldHMnO1xyXG4gICAgY29uc3QgdG90YWwgPSAoY291bnQgKiB0aWNrZXRQcmljZSkudG9GaXhlZCgyKTtcclxuICAgIGlmICh0aWNrZXRMYWJlbEVsKSB0aWNrZXRMYWJlbEVsLnRleHRDb250ZW50ID0gYCR7Y291bnR9ICR7cGx1cmFsfWA7XHJcbiAgICBpZiAodGlja2V0VG90YWxFbCkgdGlja2V0VG90YWxFbC50ZXh0Q29udGVudCA9IHRvdGFsO1xyXG4gICAgaWYgKHRpY2tldFRvdGFsVHdvRWwpIHRpY2tldFRvdGFsVHdvRWwudGV4dENvbnRlbnQgPSBgJCR7dG90YWx9YDtcclxuICAgIGlmICh0b3RhbEFtb3VudEVsKSB0b3RhbEFtb3VudEVsLnRleHRDb250ZW50ID0gYCQke3RvdGFsfWA7XHJcbiAgICBpZiAodGlja2V0Q291bnRFbCkgdGlja2V0Q291bnRFbC50ZXh0Q29udGVudCA9IGNvdW50O1xyXG4gIH1cclxuXHJcbiAgaWYgKGlucHV0cy5sZW5ndGggJiYgYmFsbFdyYXApIHtcclxuICAgIGlucHV0cy5mb3JFYWNoKChpbnB1dCwgaW5kZXgpID0+IHtcclxuICAgICAgaW5wdXQuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCAoZSkgPT4ge1xyXG4gICAgICAgIGUudGFyZ2V0LnZhbHVlID0gZS50YXJnZXQudmFsdWUucmVwbGFjZSgvW14wLTldL2csICcnKS5zbGljZSgwLCAyKTtcclxuICAgICAgICBjb25zdCBudW1iZXJzID0gQXJyYXkuZnJvbShpbnB1dHMpLm1hcChpID0+IGkudmFsdWUudHJpbSgpKS5maWx0ZXIoQm9vbGVhbik7XHJcbiAgICAgICAgY29uc3QgYmFsbHMgPSBudW1iZXJzLm1hcChuID0+IGBcclxuICAgICAgICAgIDxzcGFuIGNsYXNzPVwiYmctcmVkLTUwMCB0ZXh0LXdoaXRlIGZvbnQtYm9sZCB3LTkgaC05IGZsZXggaXRlbXMtY2VudGVyIGp1c3RpZnktY2VudGVyIHJvdW5kZWQtZnVsbFwiPiR7bn08L3NwYW4+XHJcbiAgICAgICAgYCkuam9pbignJyk7XHJcbiAgICAgICAgYmFsbFdyYXAuaW5uZXJIVE1MID0gdGlja2V0TGFiZWwgKyBiYWxscztcclxuICAgICAgfSk7XHJcbiAgICB9KTtcclxuICB9XHJcblxyXG4gIGluY3JlYXNlQnRuPy5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xyXG4gICAgdGlja2V0Q291bnQrKztcclxuICAgIHVwZGF0ZUNhcnQodGlja2V0Q291bnQpO1xyXG4gIH0pO1xyXG5cclxuICBkZWNyZWFzZUJ0bj8uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcclxuICAgIGlmICh0aWNrZXRDb3VudCA+IDEpIHtcclxuICAgICAgdGlja2V0Q291bnQtLTtcclxuICAgICAgdXBkYXRlQ2FydCh0aWNrZXRDb3VudCk7XHJcbiAgICB9XHJcbiAgfSk7XHJcblxyXG4gIHJlbW92ZUJ0bj8uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcclxuICAgIGlucHV0cy5mb3JFYWNoKGlucHV0ID0+IGlucHV0LnZhbHVlID0gJycpO1xyXG4gICAgaWYgKGJhbGxXcmFwKSBiYWxsV3JhcC5pbm5lckhUTUwgPSB0aWNrZXRMYWJlbDtcclxuICB9KTtcclxuXHJcbiAgdXBkYXRlQ2FydCh0aWNrZXRDb3VudCk7XHJcblxyXG4gIC8vID09PSBNb2RhbCBMb2dpYyA9PT1cclxuICBjb25zdCBtb2RhbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdvcmRlck1vZGFsJyk7XHJcbiAgY29uc3Qgb3BlbkJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLW9wZW4tcGF5XScpO1xyXG4gIGNvbnN0IGNsb3NlQnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Nsb3NlTW9kYWxCdG4nKTtcclxuXHJcbiAgaWYgKG1vZGFsICYmIG9wZW5CdG4gJiYgY2xvc2VCdG4pIHtcclxuICAgIG9wZW5CdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZSkgPT4ge1xyXG4gICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgIG1vZGFsLmNsYXNzTGlzdC5yZW1vdmUoJ2hpZGRlbicpO1xyXG4gICAgICBtb2RhbC5jbGFzc0xpc3QuYWRkKCdmbGV4Jyk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBjbG9zZUJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuICAgICAgbW9kYWwuY2xhc3NMaXN0LmFkZCgnaGlkZGVuJyk7XHJcbiAgICAgIG1vZGFsLmNsYXNzTGlzdC5yZW1vdmUoJ2ZsZXgnKTtcclxuICAgIH0pO1xyXG5cclxuICAgIG1vZGFsLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGUpID0+IHtcclxuICAgICAgaWYgKGUudGFyZ2V0ID09PSBtb2RhbCkge1xyXG4gICAgICAgIG1vZGFsLmNsYXNzTGlzdC5hZGQoJ2hpZGRlbicpO1xyXG4gICAgICAgIG1vZGFsLmNsYXNzTGlzdC5yZW1vdmUoJ2ZsZXgnKTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfVxyXG59KTtcclxuIl0sImZpbGUiOiJjYXJ0LmpzIn0=
