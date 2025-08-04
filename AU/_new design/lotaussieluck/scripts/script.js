// ---------- MOBILE MENU ----------
const toggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const closeBtn = document.getElementById('menu-close');
if (toggle && mobileMenu && closeBtn) {
  toggle.addEventListener('click', () => {
    mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
    mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
  });
  closeBtn.addEventListener('click', () => {
    mobileMenu.classList.add('opacity-0', 'pointer-events-none');
    mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
  });
  mobileMenu.addEventListener('click', (e) => {
    if (e.target === mobileMenu) {
      mobileMenu.classList.add('opacity-0', 'pointer-events-none');
      mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
    }
  });
}

// ---------- JACKPOT TIMER ----------
const jackpotEndDate = new Date('2025-12-31T23:59:59');
function pad2(val) {
  return val < 10 ? '0' + val : String(val).slice(-2);
}
function updateJackpotTimer() {
  const now = new Date();
  let diff = Math.max(0, Math.floor((jackpotEndDate - now) / 1000));
  const days = Math.min(1, Math.floor(diff / (60 * 60 * 24)));
  diff -= days * 60 * 60 * 24;
  const hours = Math.floor(diff / (60 * 60)) % 24;
  diff -= hours * 60 * 60;
  const minutes = Math.floor(diff / 60) % 60;
  diff -= minutes * 60;
  const seconds = diff % 60;
  const timeArr = [
    ...pad2(days),
    ...pad2(hours),
    ...pad2(minutes),
    ...pad2(seconds)
  ];
  const timerDigits = document.querySelectorAll('#jackpot-timer .timer-digit');
  timerDigits.forEach((el, i) => {
    el.textContent = timeArr[i] || '0';
  });
}
if (document.querySelector('#jackpot-timer .timer-digit')) {
  updateJackpotTimer();
  setInterval(updateJackpotTimer, 1000);
}

// ---------- AGE GATE ----------
const AGE_KEY = 'age_gate_passed';
const ageGateModal = document.getElementById('age-gate-modal');
const ageYes = document.getElementById('age-yes');
const ageNo = document.getElementById('age-no');
if (ageGateModal && ageYes && ageNo) {
  if (localStorage.getItem(AGE_KEY) !== 'true') {
    ageGateModal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  } else {
    ageGateModal.style.display = 'none';
    document.body.style.overflow = '';
  }
  ageYes.onclick = () => {
    localStorage.setItem(AGE_KEY, 'true');
    ageGateModal.style.display = 'none';
    document.body.style.overflow = '';
  };
  ageNo.onclick = () => {
    window.location.href = 'https://google.com';
  };
}

// ---------- COOKIE BANNER ----------
const cookieKey = 'cookie_accepted';
const banner = document.getElementById('cookie-banner');
const btn = document.getElementById('cookie-accept');
if (banner && btn) {
  if (localStorage.getItem(cookieKey) === 'true') {
    banner.style.display = 'none';
  }
  btn.onclick = () => {
    localStorage.setItem(cookieKey, 'true');
    banner.style.display = 'none';
  };
}

// ---------- AUTH MODAL TABS ----------
// TAB SWITCHING
document.querySelectorAll('[data-modal="auth-modal"]').forEach(el => {
  el.addEventListener('click', () => {
    document.getElementById('auth-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  });
});
const closeModal = document.getElementById('close-modal');
const authModal = document.getElementById('auth-modal');
if (closeModal && authModal) {
  closeModal.onclick = () => {
    authModal.classList.add('hidden');
    document.body.style.overflow = '';
  };
  // ESC
  document.addEventListener('keydown', e => {
    if (e.key === "Escape" && !authModal.classList.contains('hidden')) {
      authModal.classList.add('hidden');
      document.body.style.overflow = '';
    }
  });

  authModal.addEventListener('mousedown', e => {
    if (e.target === authModal) {
      authModal.classList.add('hidden');
      document.body.style.overflow = '';
    }
  });
}
// Tabs
const tabLogin = document.getElementById('tab-login');
const tabSignup = document.getElementById('tab-signup');
const formLogin = document.getElementById('form-login');
const formSignup = document.getElementById('form-signup');
const toSignup = document.getElementById('to-signup');
const toLogin = document.getElementById('to-login');

function showLogin() {
  tabLogin.classList.add('text-[#FF3D3D]', 'border-b-2', 'border-[#FF3D3D]');
  tabLogin.classList.remove('text-[#B7BDC6]');
  tabSignup.classList.remove('text-[#FF3D3D]', 'border-b-2', 'border-[#FF3D3D]');
  tabSignup.classList.add('text-[#B7BDC6]');
  formLogin.classList.remove('hidden');
  formSignup.classList.add('hidden');
}
function showSignup() {
  tabSignup.classList.add('text-[#FF3D3D]', 'border-b-2', 'border-[#FF3D3D]');
  tabSignup.classList.remove('text-[#B7BDC6]');
  tabLogin.classList.remove('text-[#FF3D3D]', 'border-b-2', 'border-[#FF3D3D]');
  tabLogin.classList.add('text-[#B7BDC6]');
  formSignup.classList.remove('hidden');
  formLogin.classList.add('hidden');
}

if (tabLogin && tabSignup && formLogin && formSignup) {
  tabLogin.onclick = showLogin;
  tabSignup.onclick = showSignup;
}
if (toSignup) toSignup.onclick = showSignup;
if (toLogin) toLogin.onclick = showLogin;

if (authModal) showLogin();

const successMsg = document.getElementById('auth-success');
function fakeSend(e) {
  e.preventDefault();

  formLogin.classList.add('hidden');
  formSignup.classList.add('hidden');

  successMsg.classList.remove('hidden');

  setTimeout(() => {
    successMsg.classList.add('hidden');

    if (tabLogin.classList.contains('text-[#FF3D3D]')) {
      formLogin.classList.remove('hidden');
    } else {
      formSignup.classList.remove('hidden');
    }
  }, 3000);
}
if (formLogin) formLogin.onsubmit = fakeSend;
if (formSignup) formSignup.onsubmit = fakeSend;

if (document.getElementById('contact')) {
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const form = this;
      form.classList.add('pointer-events-none', 'opacity-60');
      setTimeout(() => {
        form.classList.add('hidden');
        document.getElementById('contact-success').classList.remove('hidden');
        form.reset();
      }, 1100);
    });
  }
}

if (document.getElementById('cart')) {
  const TICKET_PRICE = 20;
  let tickets = [];
  
  const ticketsList = document.getElementById('tickets-list');
  const ticketForm = document.getElementById('ticket-form');
  const numberInputs = ticketForm.querySelectorAll('.ticket-number');
  const randomBtn = document.getElementById('random-btn');
  const payBtn = document.getElementById('pay-btn');
  const totalEl = document.getElementById('total-amount');
  const cartSuccess = document.getElementById('cart-success');
  const multiplierInput = document.getElementById('multiplier');
  const circulationInput = document.getElementById('circulation');
  
  // Render tickets
  function renderTickets() {
    ticketsList.innerHTML = '';
    tickets.forEach((ticket, idx) => {
      const div = document.createElement('div');
      div.className = 'border-2 border-[#ff3d3d] bg-white bg-opacity-80 rounded-xl p-4 mb-2 max-w-[340px] flex justify-between items-center';
      div.innerHTML = `
        <div>
          <div class="text-lg font-bold text-[#ff3d3d] mb-1">Ticket #${idx + 1}</div>
          <div class="text-[#23272F] text-base">Your numbers: <span class="font-semibold">${ticket.numbers.join(', ')}</span></div>
        </div>
        <button type="button" aria-label="Remove" class="text-[#ff3d3d] hover:text-[#23272F] font-extrabold ml-4 text-2xl leading-none remove-ticket">&times;</button>
      `;
      div.querySelector('.remove-ticket').onclick = () => {
        tickets.splice(idx, 1);
        renderTickets();
        updateTotal();
      };
      ticketsList.appendChild(div);
    });
  
  
  }
  renderTickets();
  
  function updateTotal() {
    const mult = Math.max(1, parseInt(multiplierInput.value) || 1);
    const circ = Math.max(1, parseInt(circulationInput.value) || 1);
    const total = tickets.length * TICKET_PRICE * mult * circ;
    totalEl.textContent = '$' + total.toFixed(2);
  }
  updateTotal();
  
  multiplierInput.oninput = updateTotal;
  circulationInput.oninput = updateTotal;
  
  // Генератор случайных чисел
  function randomTicket(n = 6) {
    const arr = [];
    while(arr.length < n) {
      const num = Math.floor(Math.random()*90)+1;
      if (!arr.includes(num)) arr.push(num);
    }
    return arr;
  }
  
  randomBtn.onclick = () => {
    const nums = randomTicket(numberInputs.length);
    numberInputs.forEach((input, i) => input.value = nums[i]);
  };
  
  // Добавить билет
  ticketForm.onsubmit = e => {
    e.preventDefault();
    const nums = Array.from(numberInputs)
      .map(i => parseInt(i.value,10))
      .filter(n => n && n >= 1 && n <= 90);
    if (nums.length === 0) return;
    tickets.push({ numbers: nums });
    renderTickets();
    updateTotal();
    ticketForm.reset();
  };
  
  payBtn.onclick = () => {
    payBtn.disabled = true;
    cartSuccess.classList.remove('hidden');
    setTimeout(() => {
      payBtn.disabled = false;
      cartSuccess.classList.add('hidden');
      tickets = [];
      renderTickets();
      updateTotal();
    }, 1600);
  };
}
