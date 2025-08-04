
  document.addEventListener("DOMContentLoaded", function () {
    const orderModal = document.getElementById('orderModal');
    const orderModalContent = document.getElementById('orderModalContent');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const openModalBtn = document.querySelector('[data-open-pay]');

    function showModal() {
      if (!orderModal || !orderModalContent) return;
      orderModal.classList.remove('hidden');
      setTimeout(() => {
        orderModalContent.classList.add('scale-100', 'opacity-100');
        orderModalContent.classList.remove('scale-95', 'opacity-0');
      }, 50);
    }

    function hideModal() {
      if (!orderModal || !orderModalContent) return;
      orderModalContent.classList.remove('scale-100', 'opacity-100');
      orderModalContent.classList.add('scale-95', 'opacity-0');
      setTimeout(() => {
        orderModal.classList.add('hidden');
      }, 300);
    }

    if (openModalBtn) openModalBtn.addEventListener('click', showModal);
    if (closeModalBtn) closeModalBtn.addEventListener('click', hideModal);

    const timerElement = document.getElementById("draw-timer");

    if (timerElement) {
      const targetTime = new Date();
      targetTime.setHours(20, 0, 0, 0);
      if (targetTime.getTime() < Date.now()) {
        targetTime.setDate(targetTime.getDate() + 1);
      }

      function updateTimer() {
        const now = new Date();
        const diff = targetTime - now;

        if (diff <= 0) {
          timerElement.textContent = "00:00:00";
          return;
        }

        const hours = String(Math.floor(diff / (1000 * 60 * 60))).padStart(2, "0");
        const minutes = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(2, "0");
        const seconds = String(Math.floor((diff / 1000) % 60)).padStart(2, "0");

        timerElement.textContent = `${hours}:${minutes}:${seconds}`;
      }

      updateTimer();
      setInterval(updateTimer, 1000);
    }
  });

  let ticketCount = 1;
  const pricePerTicket = 10;

  function adjustTickets(change) {
    ticketCount = Math.max(1, ticketCount + change);
    const countEl = document.getElementById('ticket-count');
    const priceEl = document.getElementById('ticket-price');
    if (countEl) countEl.textContent = ticketCount;
    if (priceEl) priceEl.textContent = `$${(ticketCount * pricePerTicket).toFixed(2)}`;
  }

//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJjYXJ0LmpzIl0sInNvdXJjZXNDb250ZW50IjpbIlxyXG4gIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IG9yZGVyTW9kYWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnb3JkZXJNb2RhbCcpO1xyXG4gICAgY29uc3Qgb3JkZXJNb2RhbENvbnRlbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnb3JkZXJNb2RhbENvbnRlbnQnKTtcclxuICAgIGNvbnN0IGNsb3NlTW9kYWxCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VNb2RhbEJ0bicpO1xyXG4gICAgY29uc3Qgb3Blbk1vZGFsQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtb3Blbi1wYXldJyk7XHJcblxyXG4gICAgZnVuY3Rpb24gc2hvd01vZGFsKCkge1xyXG4gICAgICBpZiAoIW9yZGVyTW9kYWwgfHwgIW9yZGVyTW9kYWxDb250ZW50KSByZXR1cm47XHJcbiAgICAgIG9yZGVyTW9kYWwuY2xhc3NMaXN0LnJlbW92ZSgnaGlkZGVuJyk7XHJcbiAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xyXG4gICAgICAgIG9yZGVyTW9kYWxDb250ZW50LmNsYXNzTGlzdC5hZGQoJ3NjYWxlLTEwMCcsICdvcGFjaXR5LTEwMCcpO1xyXG4gICAgICAgIG9yZGVyTW9kYWxDb250ZW50LmNsYXNzTGlzdC5yZW1vdmUoJ3NjYWxlLTk1JywgJ29wYWNpdHktMCcpO1xyXG4gICAgICB9LCA1MCk7XHJcbiAgICB9XHJcblxyXG4gICAgZnVuY3Rpb24gaGlkZU1vZGFsKCkge1xyXG4gICAgICBpZiAoIW9yZGVyTW9kYWwgfHwgIW9yZGVyTW9kYWxDb250ZW50KSByZXR1cm47XHJcbiAgICAgIG9yZGVyTW9kYWxDb250ZW50LmNsYXNzTGlzdC5yZW1vdmUoJ3NjYWxlLTEwMCcsICdvcGFjaXR5LTEwMCcpO1xyXG4gICAgICBvcmRlck1vZGFsQ29udGVudC5jbGFzc0xpc3QuYWRkKCdzY2FsZS05NScsICdvcGFjaXR5LTAnKTtcclxuICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgb3JkZXJNb2RhbC5jbGFzc0xpc3QuYWRkKCdoaWRkZW4nKTtcclxuICAgICAgfSwgMzAwKTtcclxuICAgIH1cclxuXHJcbiAgICBpZiAob3Blbk1vZGFsQnRuKSBvcGVuTW9kYWxCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBzaG93TW9kYWwpO1xyXG4gICAgaWYgKGNsb3NlTW9kYWxCdG4pIGNsb3NlTW9kYWxCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBoaWRlTW9kYWwpO1xyXG5cclxuICAgIGNvbnN0IHRpbWVyRWxlbWVudCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZHJhdy10aW1lclwiKTtcclxuXHJcbiAgICBpZiAodGltZXJFbGVtZW50KSB7XHJcbiAgICAgIGNvbnN0IHRhcmdldFRpbWUgPSBuZXcgRGF0ZSgpO1xyXG4gICAgICB0YXJnZXRUaW1lLnNldEhvdXJzKDIwLCAwLCAwLCAwKTtcclxuICAgICAgaWYgKHRhcmdldFRpbWUuZ2V0VGltZSgpIDwgRGF0ZS5ub3coKSkge1xyXG4gICAgICAgIHRhcmdldFRpbWUuc2V0RGF0ZSh0YXJnZXRUaW1lLmdldERhdGUoKSArIDEpO1xyXG4gICAgICB9XHJcblxyXG4gICAgICBmdW5jdGlvbiB1cGRhdGVUaW1lcigpIHtcclxuICAgICAgICBjb25zdCBub3cgPSBuZXcgRGF0ZSgpO1xyXG4gICAgICAgIGNvbnN0IGRpZmYgPSB0YXJnZXRUaW1lIC0gbm93O1xyXG5cclxuICAgICAgICBpZiAoZGlmZiA8PSAwKSB7XHJcbiAgICAgICAgICB0aW1lckVsZW1lbnQudGV4dENvbnRlbnQgPSBcIjAwOjAwOjAwXCI7XHJcbiAgICAgICAgICByZXR1cm47XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICBjb25zdCBob3VycyA9IFN0cmluZyhNYXRoLmZsb29yKGRpZmYgLyAoMTAwMCAqIDYwICogNjApKSkucGFkU3RhcnQoMiwgXCIwXCIpO1xyXG4gICAgICAgIGNvbnN0IG1pbnV0ZXMgPSBTdHJpbmcoTWF0aC5mbG9vcigoZGlmZiAvICgxMDAwICogNjApKSAlIDYwKSkucGFkU3RhcnQoMiwgXCIwXCIpO1xyXG4gICAgICAgIGNvbnN0IHNlY29uZHMgPSBTdHJpbmcoTWF0aC5mbG9vcigoZGlmZiAvIDEwMDApICUgNjApKS5wYWRTdGFydCgyLCBcIjBcIik7XHJcblxyXG4gICAgICAgIHRpbWVyRWxlbWVudC50ZXh0Q29udGVudCA9IGAke2hvdXJzfToke21pbnV0ZXN9OiR7c2Vjb25kc31gO1xyXG4gICAgICB9XHJcblxyXG4gICAgICB1cGRhdGVUaW1lcigpO1xyXG4gICAgICBzZXRJbnRlcnZhbCh1cGRhdGVUaW1lciwgMTAwMCk7XHJcbiAgICB9XHJcbiAgfSk7XHJcblxyXG4gIGxldCB0aWNrZXRDb3VudCA9IDE7XHJcbiAgY29uc3QgcHJpY2VQZXJUaWNrZXQgPSAxMDtcclxuXHJcbiAgZnVuY3Rpb24gYWRqdXN0VGlja2V0cyhjaGFuZ2UpIHtcclxuICAgIHRpY2tldENvdW50ID0gTWF0aC5tYXgoMSwgdGlja2V0Q291bnQgKyBjaGFuZ2UpO1xyXG4gICAgY29uc3QgY291bnRFbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0aWNrZXQtY291bnQnKTtcclxuICAgIGNvbnN0IHByaWNlRWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGlja2V0LXByaWNlJyk7XHJcbiAgICBpZiAoY291bnRFbCkgY291bnRFbC50ZXh0Q29udGVudCA9IHRpY2tldENvdW50O1xyXG4gICAgaWYgKHByaWNlRWwpIHByaWNlRWwudGV4dENvbnRlbnQgPSBgJCR7KHRpY2tldENvdW50ICogcHJpY2VQZXJUaWNrZXQpLnRvRml4ZWQoMil9YDtcclxuICB9XHJcblxyXG4iXSwiZmlsZSI6ImNhcnQuanMifQ==
