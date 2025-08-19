document.addEventListener("DOMContentLoaded", () => {

  // --- Contact Form Alert ---

  function contact(){
    var form = document.getElementById('contact-form');
    var btn = form.querySelector('button[type="submit"]');
    var status = document.getElementById('contact-status');
    form.addEventListener('submit', function(e){
      e.preventDefault();
      if(btn.disabled) return;
      btn.disabled = true;
      var original = btn.textContent;
      btn.textContent = 'Sending...';
      status.className = 'hidden text-center text-sm mt-2';
      setTimeout(function(){
        btn.disabled = false;
        btn.textContent = original;
        form.reset();
        status.textContent = 'Thank you! Your message has been received and will be reviewed by our editors.';
        status.className = 'text-center text-sm mt-2 font-medium';
        status.style.color = '#00A3FF';
      }, 1100);
    });
  };

  // --- FAQ Accordion (Single open) ---
  document.querySelectorAll('[data-acc="btn"]').forEach(function(btn){
    btn.addEventListener('click', function(){
      var box = btn.parentElement;
      var panel = box.querySelector('[data-acc="panel"]');
      var isOpen = box.classList.contains('open');
      document.querySelectorAll('[data-acc="panel"]').forEach(function(p){ p.classList.add('hidden'); });
      document.querySelectorAll('.border').forEach(function(b){ b.classList.remove('open'); });
      if(!isOpen){ panel.classList.remove('hidden'); box.classList.add('open'); }
    });
  });
  // --- Cookie Banner Logic ---
  
    const acceptBtn = document.getElementById('acceptCookies');
    const banner = document.getElementById('cookieBanner');

    if (acceptBtn && banner) {
      acceptBtn.addEventListener('click', function () {
        banner.style.display = 'none';
        localStorage.setItem('cookieConsent', 'accepted');
      });
    }

    // Optional: Hide banner if already accepted
    if (localStorage.getItem('cookieConsent') === 'accepted') {
      if (banner) banner.style.display = 'none';
    }

  // --- Modal Logic (Login/Register) ---
  const openButtons = document.querySelectorAll("[data-modal-open]");
  const closeButtons = document.querySelectorAll("[data-modal-close]");

  openButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      const modalId = btn.getAttribute("data-modal-open");
      const targetModal = document.getElementById(`modal-${modalId}`);

      document.querySelectorAll(".fixed[id^='modal-']").forEach((modal) => {
        modal.classList.add("hidden");
      });

      if (targetModal) {
        targetModal.classList.remove("hidden");
      }
    });
  });

  closeButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const modal = btn.closest(".fixed");
      if (modal) modal.classList.add("hidden");
    });
  });
});
