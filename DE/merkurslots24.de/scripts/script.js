// Expand signup
const expandBtn = document.getElementById('expand-signup');
const collapsed = document.getElementById('signup-collapsed');
const expanded = document.getElementById('signup-expanded');
if (expandBtn && collapsed && expanded) {
  expandBtn.addEventListener('click', () => {
    collapsed.classList.add('hidden');
    expanded.classList.remove('hidden');
    setTimeout(() => {
      const input = expanded.querySelector('input');
      if (input) input.focus();
    }, 150);
  });
}

// Modal open function (generic)
function openModal(modalId, focusSelector = 'input') {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100');
    setTimeout(() => {
      const focusElem = modal.querySelector(focusSelector);
      if (focusElem) focusElem.focus();
    }, 100);
  }
}

// Modal close function (generic)
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('opacity-0', 'pointer-events-none');
    modal.classList.remove('opacity-100');
  }
}

// Login modal open
document.querySelectorAll('[data-modal="login-modal"]').forEach(btn => {
  btn.addEventListener('click', function () {
    openModal('login-modal', 'input');
  });
});

// Login modal close
const loginModal = document.getElementById('login-modal');
if (loginModal) {
  loginModal.addEventListener('click', function (e) {
    if (e.target === this || (e.target.hasAttribute && e.target.hasAttribute('data-close-modal'))) {
      closeModal('login-modal');
    }
  });
}

// Info modal open
document.querySelectorAll('[data-modal="info-modal"]').forEach(btn => {
  btn.addEventListener('click', function () {
    openModal('info-modal', 'button[data-close-modal]');
  });
});

// Info modal close
const infoModal = document.getElementById('info-modal');
if (infoModal) {
  infoModal.addEventListener('click', function (e) {
    if (e.target === this || (e.target.hasAttribute && e.target.hasAttribute('data-close-modal'))) {
      closeModal('info-modal');
    }
  });
}
