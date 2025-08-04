document.addEventListener('DOMContentLoaded', () => {
  // ======= Login Modal =======
  const loginBtns = document.querySelectorAll('[data-open-login]');
  const loginModal = document.getElementById('loginModal');
  const closeLogin = document.getElementById('closeLogin');
  const loginOverlay = document.getElementById('loginOverlay');
  const LogIn = document.getElementById('LogIn');
  const loginSuccessMessage = document.getElementById('loginSuccessMessage');

  function openLogin() {
    loginModal.classList.remove('hidden');
  }
  function hideLogin() {
    loginModal.classList.add('hidden');
  }

  loginBtns.forEach( btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      hideSignup();   
      openLogin();
    });
    
  })

  LogIn.addEventListener('click', ()=> {
    loginSuccessMessage.classList.add('hidden');
  })

  closeLogin.addEventListener('click', hideLogin);
  loginOverlay.addEventListener('click', hideLogin);
  document.addEventListener('keydown', (evt) => {
    if (evt.key === 'Escape' && !loginModal.classList.contains('hidden')) {
      hideLogin();
    }
  });

  // ======= Signup Modal =======
  const signupBtns = document.querySelectorAll('[data-open-sign]');
  const signupModal = document.getElementById('signupModal');
  const closeSignup = document.getElementById('closeSignup');
  const signupOverlay = document.getElementById('signupOverlay');
  const switchToLogin = document.getElementById('switchToLogin');

  const createAcc = document.getElementById('createAcc');
  const signupSuccessMessage = document.getElementById('signupSuccessMessage');

  function openSignup() {
    signupModal.classList.remove('hidden');
  }
  function hideSignup() {
    signupModal.classList.add('hidden');
  }

  createAcc.addEventListener('click', ()=> {
    e.preventDefault();
    signupSuccessMessage.classList.add('hidden');
  })


  signupBtns.forEach( btn=> {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      hideLogin();    
      openSignup();
    });

  })

  closeSignup.addEventListener('click', hideSignup);
  signupOverlay.addEventListener('click', hideSignup);
  document.addEventListener('keydown', (evt) => {
    if (evt.key === 'Escape' && !signupModal.classList.contains('hidden')) {
      hideSignup();
    }
  });

  switchToLogin.addEventListener('click', (e) => {
    e.preventDefault();
    hideSignup();
    openLogin();
  });
});

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.js-faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.js-icon');

      if (content.classList.contains('hidden')) {
        document.querySelectorAll('.js-faq-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.js-icon').forEach(i => i.classList.remove('rotate-90'));


        content.classList.remove('hidden');
        icon.classList.add('rotate-90');
      } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-90');
      }
    });
  });
});