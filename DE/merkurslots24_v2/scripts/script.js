(function () {
  if (window.__appBound) return;
  window.__appBound = true;

  function qs(s, r = document) {
    return r.querySelector(s);
  }
  function qsa(s, r = document) {
    return Array.from(r.querySelectorAll(s));
  }
  function isVisible(el) {
    return el && !el.classList.contains("hidden");
  }
  const body = document.body;

  // --- Открытие/закрытие модалок ---
  function openModal(name) {
    qsa("[data-modal-id]").forEach((m) => m.classList.add("hidden"));
    const modal = qs('[data-modal-id="' + name + '"]');
    if (!modal) return;
    modal.classList.remove("hidden");
    body.classList.add("overflow-hidden");
    const first = modal.querySelector("input, button, a, select, textarea");
    if (first) first.focus();
    syncContainer(modal);
    if (name === "profile-modal") onProfileModalShown();
  }
  function closeModal(el) {
    if (!el) return;
    el.classList.add("hidden");
    body.classList.remove("overflow-hidden");
  }
  function closeModalById(id) {
    const m = qs('[data-modal-id="' + id + '"]');
    if (m) closeModal(m);
  }
  function closeAllModals() {
    qsa("[data-modal-id]").forEach((m) => m.classList.add("hidden"));
    body.classList.remove("overflow-hidden");
  }

  document.addEventListener("click", (e) => {
    const opener = e.target.closest("[data-modal]");
    if (opener) {
      e.preventDefault();
      openModal(opener.getAttribute("data-modal"));
      return;
    }
    const closer = e.target.closest("[data-modal-close]");
    if (closer) {
      const m = closer.closest("[data-modal-id]");
      if (m) closeModal(m);
      return;
    }
    const overlay = e.target.closest("[data-modal-overlay]");
    if (overlay) {
      const m = overlay.closest("[data-modal-id]");
      if (m) closeModal(m);
      return;
    }
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeAllModals();
  });

  // --- Авторизация ---
  function syncHeader() {
    const loginBtn = qs('[data-modal="login-modal"]');
    const registerBtn = qs('[data-modal="register-modal"]');
    let logoutBtn = document.getElementById("logout-btn");
    if (window.isLoggedIn) {
      if (loginBtn) loginBtn.classList.add("hidden");
      if (registerBtn) registerBtn.classList.add("hidden");
      if (!logoutBtn) {
        logoutBtn = document.createElement("button");
        logoutBtn.id = "logout-btn";
        logoutBtn.type = "button";
        logoutBtn.textContent = "Logout";
        logoutBtn.className =
          "px-4 py-1.5 rounded-md bg-red-600 text-white hover:bg-red-700 text-sm";
        (
          loginBtn?.parentNode ||
          registerBtn?.parentNode ||
          document.getElementById("1-header") ||
          document.body
        ).appendChild(logoutBtn);
        logoutBtn.addEventListener("click", onLogout);
      }
    } else {
      if (loginBtn) loginBtn.classList.remove("hidden");
      if (registerBtn) registerBtn.classList.remove("hidden");
      if (logoutBtn) logoutBtn.remove();
    }
  }
  function syncContainer(container) {
    if (!container) return;
    qsa('[data-auth="only"]', container).forEach((el) =>
      el.classList.toggle("hidden", !window.isLoggedIn)
    );
    qsa('[data-auth="guest"]', container).forEach((el) =>
      el.classList.toggle("hidden", !!window.isLoggedIn)
    );
  }
  window.setIsLoggedIn = function (state) {
    window.isLoggedIn = !!state;
    syncHeader();
    qsa("[data-modal-id]").forEach((m) => syncContainer(m));
  };
  async function fetchAuth() {
    try {
      const res = await fetch("/api/me.php", { credentials: "include" });
      const data = await res.json();
      setIsLoggedIn(!!(data.loggedIn || data.authenticated));
    } catch (_) {
      setIsLoggedIn(false);
    }
  }
  async function onLogout() {
    try {
      await fetch("/api/logout.php", { credentials: "include" });
    } catch (_) {}
    setIsLoggedIn(false);
    location.reload();
  }

  // --- Логин ---
  const loginForm = qs("#login-form");
  if (loginForm) {
    loginForm.addEventListener("submit", async function (e) {
      e.preventDefault();
      const btn = qs("#login-submit");
      if (!btn || btn.disabled) return;
      btn.disabled = true;
      const prev = btn.textContent;
      btn.textContent = "Signing in...";
      try {
        const endpoint = loginForm.dataset.endpoint || "/api/login.php";
        const res = await fetch(endpoint, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          credentials: "include",
          body: JSON.stringify({
            email: qs("#login-email").value,
            password: qs("#login-password").value,
          }),
        });
        const data = await res.json().catch(() => ({}));
        if (!res.ok || !data.success) throw 0;
        closeModalById("login-modal");
        await fetchAuth();
        location.reload();
      } catch (_) {
        btn.disabled = false;
        btn.textContent = prev;
      }
    });
  }

  // --- Регистрация ---
  const registerForm = qs("#register-form");
  if (registerForm) {
    registerForm.addEventListener("submit", async function (e) {
      e.preventDefault();
      const btn = qs("#register-submit");
      const err = qs("#register-error"),
        ok = qs("#register-success");
      if (err) err.classList.add("hidden");
      if (ok) ok.classList.add("hidden");
      if (!btn || btn.disabled) return;
      const pass = qs("#register-password").value,
        pass2 = qs("#register-password-repeat").value,
        age = qs("#register-age");
      if (pass !== pass2) {
        if (err) {
          err.textContent = "Passwords do not match";
          err.classList.remove("hidden");
        }
        return;
      }
      if (!(age && age.checked)) {
        if (err) {
          err.textContent = "You must be 18+";
          err.classList.remove("hidden");
        }
        return;
      }
      btn.disabled = true;
      const prev = btn.textContent;
      btn.textContent = "Registering...";
      try {
        const endpoint =
          registerForm.dataset.endpoint || "/api/register.php";
        const res = await fetch(endpoint, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          credentials: "include",
          body: JSON.stringify({
            email: qs("#register-email").value,
            password: pass,
          }),
        });
        const data = await res.json().catch(() => ({}));
        if (!res.ok || !data.success) throw 0;
        if (ok) ok.classList.remove("hidden");
        if (data.reload) {
          location.reload();
          return;
        }
        setIsLoggedIn(true);
        setTimeout(() => {
          closeModalById("register-modal");
          btn.disabled = false;
          btn.textContent = prev;
        }, 900);
      } catch (_) {
        if (err) {
          err.textContent = "Registration failed";
          err.classList.remove("hidden");
        }
        btn.disabled = false;
        btn.textContent = prev;
      }
    });
  }

  // --- Депозит ---
  const paymentForm = qs("#payment-form");
  if (paymentForm) {
    paymentForm.addEventListener("submit", async function (e) {
      e.preventDefault();
  
      const amount = parseFloat(qs("#amount").value);
      if (!amount || amount <= 0) {
        alert("Enter a valid deposit amount");
        return;
      }
  
      try {
        const res = await fetch("/api/deposit.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          credentials: "include",
          body: JSON.stringify({ amount }),
        });
  
        const data = await res.json();
        if (data.success) {
          const balanceEl = qs("#deposit-balance");
          if (balanceEl) balanceEl.textContent = data.newBalance.toFixed(2);
  
          window.depositAmount = data.newBalance;
          paymentForm.reset();
  
          setTimeout(() => {
            location.reload();
          }, 1000);
        } else {
          alert(data.message || "Deposit failed");
        }
      } catch (err) {
        console.error(err);
        alert("Error processing deposit");
      }
    });
  }
  // --- Профиль ---
  async function loadProfileIntoForm() {
    try {
      const res = await fetch("/api/profile.php", {
        credentials: "include",
      });
      if (!res.ok) return;
      const data = await res.json();
      const p = data.profile || {};
      if (qs("#profile-name")) qs("#profile-name").value = p.display_name || "";
      if (qs("#profile-bio")) qs("#profile-bio").value = p.bio || "";
      if (qs("#profile-avatar")) qs("#profile-avatar").value = p.avatar || "";
      updateBioCounter();
    } catch (_) {}
  }
  function updateBioCounter() {
    const bioEl = qs("#profile-bio"),
      counter = qs("#profile-bio-count");
    if (bioEl && counter)
      counter.textContent = String((bioEl.value || "").length);
  }
  async function onProfileModalShown() {
    const locked = qs("#profile-locked"),
      editor = qs("#profile-editor");
    if (window.isLoggedIn) {
      if (locked) locked.classList.add("hidden");
      if (editor) editor.classList.remove("hidden");
      await loadProfileIntoForm();
    } else {
      if (editor) editor.classList.add("hidden");
      if (locked) locked.classList.remove("hidden");
    }
  }
  const profileForm = qs("#profile-editor");
  if (profileForm) {
    profileForm.addEventListener("submit", async function (e) {
      e.preventDefault();
      const submitBtn = profileForm.querySelector('button[type="submit"]');
      const okEl = qs("#profile-save-success"),
        errEl = qs("#profile-save-error");
      if (okEl) okEl.classList.add("hidden");
      if (errEl) errEl.classList.add("hidden");
      submitBtn.disabled = true;
      try {
        const res = await fetch("/api/profile.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          credentials: "include",
          body: JSON.stringify({
            display_name: qs("#profile-name").value,
            bio: qs("#profile-bio").value,
            avatar: qs("#profile-avatar").value,
          }),
        });
        const data = await res.json().catch(() => ({ success: false }));
        if (!res.ok || !data.success) throw 0;
        if (okEl) okEl.classList.remove("hidden");
        setTimeout(() => okEl.classList.add("hidden"), 1500);
      } catch (_) {
        if (errEl) errEl.classList.remove("hidden");
        setTimeout(() => errEl.classList.add("hidden"), 2000);
      } finally {
        submitBtn.disabled = false;
      }
    });
    document.addEventListener("input", (e) => {
      if (e.target && e.target.id === "profile-bio") updateBioCounter();
    });
  }

  // --- Init ---
  document.addEventListener("DOMContentLoaded", () => {
    if (typeof window.isLoggedIn === "boolean")
      setIsLoggedIn(window.isLoggedIn);
    else fetchAuth();
  });
})();
