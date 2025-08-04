document.addEventListener("DOMContentLoaded", () => {
  // --- Age Verification Modal ---
  const modal = document.getElementById('ageModal');
  const btnOver18 = document.getElementById('btnOver18');
  const btnUnder18 = document.getElementById('btnUnder18');

  if (modal && localStorage.getItem('ageVerified') !== 'true') {
    modal.classList.remove('hidden');
  } else if (modal) {
    modal.remove();
  }

  if (btnOver18) {
    btnOver18.addEventListener('click', () => {
      localStorage.setItem('ageVerified', 'true');
      modal.classList.add('hidden');
    });
  }

  if (btnUnder18) {
    btnUnder18.addEventListener('click', () => {
      window.location.href = 'https://www.google.com';
    });
  }

  // --- Mobile Burger Menu ---
  const burger = document.getElementById('burger-button');
  const menu = document.getElementById('mobile-menu');

  if (burger && menu) {
    burger.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  }

  // --- Contact Form Alert ---
  const alertBox = document.getElementById('form-alert');
  const sendBtn = document.getElementById('send-btn');

  if (sendBtn && alertBox) {
    sendBtn.addEventListener('click', () => {
      alertBox.classList.remove('hidden');
      setTimeout(() => {
        alertBox.classList.add('hidden');
      }, 6000);
    });
  }

  // --- FAQ Accordion (Single open) ---
  const faqCards = document.querySelectorAll('.faq-card');

  faqCards.forEach(card => {
    const button = card.querySelector('.faq-toggle');
    const icons = card.querySelectorAll('svg path');
    const content = card.querySelector('.faq-content');

    if (!button || !icons.length || !content) return;

    button.addEventListener('click', () => {
      const isOpen = content.classList.contains('open');

      // Toggle content
      if (isOpen) {
        content.classList.remove('open');
        content.style.maxHeight = '0px';
        content.style.opacity = '0';

        // Set icon to "+"
        icons.forEach(icon => icon.setAttribute('d', 'M12 4v16m8-8H4'));
      } else {
        content.classList.add('open');
        content.style.maxHeight = content.scrollHeight + 'px';
        content.style.opacity = '1';

        // Set icon to "−"
        icons.forEach(icon => icon.setAttribute('d', 'M4 12h16'));
      }
    });

    // Init state
    content.style.maxHeight = '0px';
    content.style.opacity = '0';
    content.style.transition = 'max-height 0.4s ease, opacity 0.4s ease';
    content.style.overflow = 'hidden';
  });

  // --- Cookie Banner Logic ---
  const cookieBanner = document.getElementById('cookieBanner');
  const acceptCookies = document.getElementById('acceptCookies');
  const rejectCookies = document.getElementById('rejectCookies');

  if (cookieBanner && acceptCookies && rejectCookies) {
    if (localStorage.getItem('cookiesAccepted') === null) {
      cookieBanner.style.display = 'block';
    } else {
      cookieBanner.style.display = 'none';
    }

    acceptCookies.addEventListener('click', () => {
      localStorage.setItem('cookiesAccepted', 'true');
      cookieBanner.style.display = 'none';
    });

    rejectCookies.addEventListener('click', () => {
      localStorage.setItem('cookiesAccepted', 'false');
      cookieBanner.style.display = 'none';
    });
  }
});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJzY3JpcHQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgKCkgPT4ge1xyXG4gIC8vIC0tLSBBZ2UgVmVyaWZpY2F0aW9uIE1vZGFsIC0tLVxyXG4gIGNvbnN0IG1vZGFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FnZU1vZGFsJyk7XHJcbiAgY29uc3QgYnRuT3ZlcjE4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J0bk92ZXIxOCcpO1xyXG4gIGNvbnN0IGJ0blVuZGVyMTggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnRuVW5kZXIxOCcpO1xyXG5cclxuICBpZiAobW9kYWwgJiYgbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ2FnZVZlcmlmaWVkJykgIT09ICd0cnVlJykge1xyXG4gICAgbW9kYWwuY2xhc3NMaXN0LnJlbW92ZSgnaGlkZGVuJyk7XHJcbiAgfSBlbHNlIGlmIChtb2RhbCkge1xyXG4gICAgbW9kYWwucmVtb3ZlKCk7XHJcbiAgfVxyXG5cclxuICBpZiAoYnRuT3ZlcjE4KSB7XHJcbiAgICBidG5PdmVyMTguYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdhZ2VWZXJpZmllZCcsICd0cnVlJyk7XHJcbiAgICAgIG1vZGFsLmNsYXNzTGlzdC5hZGQoJ2hpZGRlbicpO1xyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuICBpZiAoYnRuVW5kZXIxOCkge1xyXG4gICAgYnRuVW5kZXIxOC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnaHR0cHM6Ly93d3cuZ29vZ2xlLmNvbSc7XHJcbiAgICB9KTtcclxuICB9XHJcblxyXG4gIC8vIC0tLSBNb2JpbGUgQnVyZ2VyIE1lbnUgLS0tXHJcbiAgY29uc3QgYnVyZ2VyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J1cmdlci1idXR0b24nKTtcclxuICBjb25zdCBtZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21vYmlsZS1tZW51Jyk7XHJcblxyXG4gIGlmIChidXJnZXIgJiYgbWVudSkge1xyXG4gICAgYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG4gICAgICBtZW51LmNsYXNzTGlzdC50b2dnbGUoJ2hpZGRlbicpO1xyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuICAvLyAtLS0gQ29udGFjdCBGb3JtIEFsZXJ0IC0tLVxyXG4gIGNvbnN0IGFsZXJ0Qm94ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm0tYWxlcnQnKTtcclxuICBjb25zdCBzZW5kQnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlbmQtYnRuJyk7XHJcblxyXG4gIGlmIChzZW5kQnRuICYmIGFsZXJ0Qm94KSB7XHJcbiAgICBzZW5kQnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG4gICAgICBhbGVydEJveC5jbGFzc0xpc3QucmVtb3ZlKCdoaWRkZW4nKTtcclxuICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgYWxlcnRCb3guY2xhc3NMaXN0LmFkZCgnaGlkZGVuJyk7XHJcbiAgICAgIH0sIDYwMDApO1xyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuICAvLyAtLS0gRkFRIEFjY29yZGlvbiAoU2luZ2xlIG9wZW4pIC0tLVxyXG4gIGNvbnN0IGZhcUNhcmRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmZhcS1jYXJkJyk7XHJcblxyXG4gIGZhcUNhcmRzLmZvckVhY2goY2FyZCA9PiB7XHJcbiAgICBjb25zdCBidXR0b24gPSBjYXJkLnF1ZXJ5U2VsZWN0b3IoJy5mYXEtdG9nZ2xlJyk7XHJcbiAgICBjb25zdCBpY29ucyA9IGNhcmQucXVlcnlTZWxlY3RvckFsbCgnc3ZnIHBhdGgnKTtcclxuICAgIGNvbnN0IGNvbnRlbnQgPSBjYXJkLnF1ZXJ5U2VsZWN0b3IoJy5mYXEtY29udGVudCcpO1xyXG5cclxuICAgIGlmICghYnV0dG9uIHx8ICFpY29ucy5sZW5ndGggfHwgIWNvbnRlbnQpIHJldHVybjtcclxuXHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgIGNvbnN0IGlzT3BlbiA9IGNvbnRlbnQuY2xhc3NMaXN0LmNvbnRhaW5zKCdvcGVuJyk7XHJcblxyXG4gICAgICAvLyBUb2dnbGUgY29udGVudFxyXG4gICAgICBpZiAoaXNPcGVuKSB7XHJcbiAgICAgICAgY29udGVudC5jbGFzc0xpc3QucmVtb3ZlKCdvcGVuJyk7XHJcbiAgICAgICAgY29udGVudC5zdHlsZS5tYXhIZWlnaHQgPSAnMHB4JztcclxuICAgICAgICBjb250ZW50LnN0eWxlLm9wYWNpdHkgPSAnMCc7XHJcblxyXG4gICAgICAgIC8vIFNldCBpY29uIHRvIFwiK1wiXHJcbiAgICAgICAgaWNvbnMuZm9yRWFjaChpY29uID0+IGljb24uc2V0QXR0cmlidXRlKCdkJywgJ00xMiA0djE2bTgtOEg0JykpO1xyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIGNvbnRlbnQuY2xhc3NMaXN0LmFkZCgnb3BlbicpO1xyXG4gICAgICAgIGNvbnRlbnQuc3R5bGUubWF4SGVpZ2h0ID0gY29udGVudC5zY3JvbGxIZWlnaHQgKyAncHgnO1xyXG4gICAgICAgIGNvbnRlbnQuc3R5bGUub3BhY2l0eSA9ICcxJztcclxuXHJcbiAgICAgICAgLy8gU2V0IGljb24gdG8gXCLiiJJcIlxyXG4gICAgICAgIGljb25zLmZvckVhY2goaWNvbiA9PiBpY29uLnNldEF0dHJpYnV0ZSgnZCcsICdNNCAxMmgxNicpKTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG4gICAgLy8gSW5pdCBzdGF0ZVxyXG4gICAgY29udGVudC5zdHlsZS5tYXhIZWlnaHQgPSAnMHB4JztcclxuICAgIGNvbnRlbnQuc3R5bGUub3BhY2l0eSA9ICcwJztcclxuICAgIGNvbnRlbnQuc3R5bGUudHJhbnNpdGlvbiA9ICdtYXgtaGVpZ2h0IDAuNHMgZWFzZSwgb3BhY2l0eSAwLjRzIGVhc2UnO1xyXG4gICAgY29udGVudC5zdHlsZS5vdmVyZmxvdyA9ICdoaWRkZW4nO1xyXG4gIH0pO1xyXG5cclxuICAvLyAtLS0gQ29va2llIEJhbm5lciBMb2dpYyAtLS1cclxuICBjb25zdCBjb29raWVCYW5uZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY29va2llQmFubmVyJyk7XHJcbiAgY29uc3QgYWNjZXB0Q29va2llcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdhY2NlcHRDb29raWVzJyk7XHJcbiAgY29uc3QgcmVqZWN0Q29va2llcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdyZWplY3RDb29raWVzJyk7XHJcblxyXG4gIGlmIChjb29raWVCYW5uZXIgJiYgYWNjZXB0Q29va2llcyAmJiByZWplY3RDb29raWVzKSB7XHJcbiAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oJ2Nvb2tpZXNBY2NlcHRlZCcpID09PSBudWxsKSB7XHJcbiAgICAgIGNvb2tpZUJhbm5lci5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIGNvb2tpZUJhbm5lci5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG4gICAgfVxyXG5cclxuICAgIGFjY2VwdENvb2tpZXMuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdjb29raWVzQWNjZXB0ZWQnLCAndHJ1ZScpO1xyXG4gICAgICBjb29raWVCYW5uZXIuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuICAgIH0pO1xyXG5cclxuICAgIHJlamVjdENvb2tpZXMuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdjb29raWVzQWNjZXB0ZWQnLCAnZmFsc2UnKTtcclxuICAgICAgY29va2llQmFubmVyLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcbiAgICB9KTtcclxuICB9XHJcbn0pO1xyXG4iXSwiZmlsZSI6InNjcmlwdC5qcyJ9
