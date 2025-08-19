<footer id="8-footer" class="w-full bg-[#0B0B0B] pt-14 pb-8 px-3">
  <div class="max-w-6xl mx-auto relative pt-6">
    <div
      class="absolute inset-x-0 -top-1 h-[2px] bg-gradient-to-r from-[rgba(255,215,0,.6)] via-[rgba(0,229,255,.25)] to-transparent">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-10">
      <div class="flex flex-col items-center text-center">
        <div
          class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shadow-[0_0_12px_rgba(255,215,0,.25)] mb-3">
          <img src="img/icon-trophy.webp" alt="Play for fun" class="w-7 h-7 object-contain" />
        </div>
        <h3 class="text-base font-bold text-white tracking-wide">100% FUN, 0% RISK</h3>
        <ul class="text-[color:#FFD700] text-sm mt-1 space-y-0.5">
          <li>Free to play</li>
          <li>No minimum stake</li>
          <li>VIP perks & support</li>
        </ul>
      </div>

      <div class="flex flex-col items-center text-center">
        <div
          class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shadow-[0_0_12px_rgba(0,229,255,.25)] mb-3">
          <img src="img/icon-lock.webp" alt="Privacy" class="w-7 h-7 object-contain" />
        </div>
        <h3 class="text-base font-bold text-white tracking-wide">MAX PRIVACY</h3>
        <ul class="text-[color:#FFD700] text-sm mt-1 space-y-0.5">
          <li>No postal address</li>
          <li>No phone number</li>
          <li>No spam</li>
        </ul>
      </div>

      <div class="flex flex-col items-center text-center">
        <div
          class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shadow-[0_0_12px_rgba(255,107,0,.25)] mb-3">
          <img src="img/icon-24.webp" alt="24/7" class="w-7 h-7 object-contain" />
        </div>
        <h3 class="text-base font-bold text-white tracking-wide">24/7 ENTERTAINMENT</h3>
        <ul class="text-[color:#FFD700] text-sm mt-1 space-y-0.5">
          <li>200+ slot & casino titles</li>
          <li>Weekly events & quests</li>
          <li>Daily free chips</li>
        </ul>
      </div>
    </div>

    <div class="h-px w-full bg-gradient-to-r from-[rgba(0,229,255,.35)] via-white/10 to-transparent mb-6"></div>

    <div class="flex flex-col items-center gap-3 mb-6">
      <p class="text-gray-300/80 text-center text-sm max-w-3xl">
        Content on [CURRENT_DOMAIN_NO_TLD] is for entertainment only and does not reflect outcomes when playing with
        real money elsewhere.
      </p>

      <div class="flex items-center gap-4">
        <img src="img/icon-age-xml.webp" alt="age.xml 18+"
          class="h-10 w-auto rounded bg-white/5 p-1 border border-white/10" />
        <img src="img/icon-18plus.webp" alt="18+"
          class="h-12 w-auto rounded-full bg-white/5 p-1 border border-white/10" />
      </div>

      <nav class="flex flex-wrap justify-center gap-3 text-xs">
        <a href="terms" class="text-white/80 hover:text-[color:#FFD700] underline underline-offset-4">Terms</a>
        <span class="text-white/30">•</span>
        <a href="privacy" class="text-white/80 hover:text-[color:#FFD700] underline underline-offset-4">Privacy</a>
        <span class="text-white/30">•</span>
        <a href="about" class="text-white/80 hover:text-[color:#FFD700] underline underline-offset-4">About</a>
        <span class="text-white/30">•</span>
        <a href="/"
          class="text-white/80 hover:text-[color:#FFD700] underline underline-offset-4">[CURRENT_DOMAIN_NO_TLD]</a>
        <span class="text-white/30">•</span>
      </nav>

      <p class="text-white/60 text-center text-xs max-w-2xl">
        © 2014–2025 [CURRENT_DOMAIN_NO_TLD]. All rights reserved. For adults 18+ only. Always play responsibly.
      </p>
    </div>
  </div>
</footer>

<section id="12-login-modal" class="fixed inset-0 z-[100] hidden" data-modal-id="login-modal" role="dialog"
  aria-modal="true" aria-labelledby="login-modal-title">
  <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" data-modal-overlay></div>
  <div class="relative mx-auto w-full max-w-md px-4 sm:px-6 top-1/2 -translate-y-1/2">
    <div class="rounded-2xl border border-white/10 bg-[#0B0B0B]/90 shadow-2xl">
      <div class="flex items-center justify-between px-6 pt-6">
        <div class="flex items-center gap-3">
          <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-8 w-8">
          <h2 id="login-modal-title" class="font-['Bebas_Neue'] text-2xl text-[color:#FFD700] tracking-widest">Sign in
          </h2>
        </div>
        <button type="button" class="rounded-md p-2 text-white/80 hover:text-white hover:bg-white/10" data-modal-close
          aria-label="Close">✕</button>
      </div>

      <form id="login-form" action="/dist/api/login.php" method="post" class="px-6 pb-6 pt-4 space-y-4">
        <div class="space-y-1">
          <label for="login-email" class="text-xs text-white/70">Email</label>
          <input id="login-email" name="email" type="email" autocomplete="email" required
            class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
        </div>

        <div class="space-y-1">
          <label for="login-password" class="text-xs text-white/70">Password</label>
          <input id="login-password" name="password" type="password" autocomplete="current-password" required
            class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
        </div>

        <div class="flex items-center justify-between text-xs">
          <label class="inline-flex items-center gap-2 text-white/70">
            <input type="checkbox" name="remember" class="rounded bg-black/40 border-white/20">
            Remember me
          </label>
        </div>

        <button type="submit" id="login-submit"
          class="w-full rounded-xl bg-[color:#FF6B00] text-black font-semibold py-3 hover:brightness-110 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
          Sign in
        </button>

        <p class="text-[10px] text-white/60 text-center">
          By signing in you agree to the
          <a href="/terms" class="underline text-[color:#FFD700]">Terms</a> and
          <a href="/privacy" class="underline text-[color:#FFD700]">Privacy</a>. 18+ only.
        </p>
      </form>
    </div>
  </div>
</section>

<section id="13-register-modal" class="fixed inset-0 z-[100] hidden" data-modal-id="register-modal" role="dialog"
  aria-modal="true" aria-labelledby="register-modal-title">
  <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" data-modal-overlay></div>
  <div class="relative mx-auto w-full max-w-md px-4 sm:px-6 top-1/2 -translate-y-1/2">
    <div class="rounded-2xl border border-white/10 bg-[#0B0B0B]/90 shadow-2xl">
      <div class="flex items-center justify-between px-6 pt-6">
        <div class="flex items-center gap-3">
          <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-8 w-8">
          <h2 id="register-modal-title" class="font-['Bebas_Neue'] text-2xl text-[color:#FFD700] tracking-widest">
            Register</h2>
        </div>
        <button type="button" class="rounded-md p-2 text-white/80 hover:text-white hover:bg-white/10" data-modal-close
          aria-label="Close">✕</button>
      </div>

      <form id="register-form" action="/dist/api/register.php" class="px-6 pb-6 pt-4 space-y-4">
        <div class="space-y-1">
          <label for="register-email" class="text-xs text-white/70">Email</label>
          <input id="register-email" name="email" type="email" required autocomplete="email"
            class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
        </div>

        <div class="space-y-1">
          <label for="register-password" class="text-xs text-white/70">Password</label>
          <input id="register-password" name="password" type="password" required
            class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
        </div>

        <div class="space-y-1">
          <label for="register-password-repeat" class="text-xs text-white/70">Repeat Password</label>
          <input id="register-password-repeat" name="password_repeat" type="password" required
            class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
        </div>

        <div class="text-xs text-red-500 font-semibold hidden" id="register-error">Passwords do not match</div>

        <div class="flex items-center gap-2 text-xs text-white/70">
          <input type="checkbox" id="register-age" required class="rounded bg-black/40 border-white/20">
          <label for="register-age">I am 18+ and agree to the <a href="#11-terms"
              class="underline text-[color:#FFD700]">Terms</a></label>
        </div>

        <button type="submit" id="register-submit"
          class="w-full rounded-xl bg-[color:#FF6B00] text-black font-semibold py-3 hover:brightness-110 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
          Register
        </button>

        <p id="register-success" class="hidden text-xs text-center text-green-400 font-semibold mt-4">
          Login information has been sent to your email.
        </p>

        <p class="text-[10px] text-white/60 text-center">
          Already have an account?
          <a href="#" class="underline text-[color:#00E5FF]" data-modal="login-modal">Sign in</a>
        </p>
      </form>

    </div>
  </div>
</section>

<!--  -->

<div data-modal-id="deposit-modal" class="fixed flex inset-0 z-50 hidden items-center justify-center px-4">
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <div
    class="relative z-10 w-full max-w-md bg-gradient-to-br from-[#14141C] to-[#0A0A0F] rounded-3xl border border-white/10 shadow-2xl p-6 text-white space-y-6">
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>

    <h2 class="text-2xl font-bold font-['Bebas_Neue'] tracking-wide text-[color:#FFD700]">
      Dein Deposit
    </h2>

    <div class="text-sm text-white/80 space-y-4 leading-relaxed">
      <p>Hier befindet sich dein aktueller Deposit.</p>
      <p class="text-xl font-extrabold text-[color:#00E5FF]">
        Derzeitiger Betrag: <span class="text-white">$
          <?php echo number_format($depositAmount, 2, '.', ','); ?>
        </span>
      </p>
      <div class="flex items-center gap-3 pt-2">
        <a href="/payment"
          class="inline-flex items-center justify-center px-5 py-2 rounded-xl bg-[color:#FF6B00] text-black font-semibold hover:brightness-110 transition">
          Einzahlen
        </a>
      </div>
    </div>


    <div class="flex justify-end">
      <button data-modal-close
        class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
        Schließen
      </button>
    </div>
  </div>
</div>

<div data-modal-id="trophies-modal" class="fixed flex inset-0 z-50 hidden items-center justify-center px-4">
  <!-- Overlay -->
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <!-- Modal -->
  <div
    class="relative z-10 w-full max-w-md bg-gradient-to-br from-[#14141C] to-[#0A0A0F] rounded-3xl border border-white/10 shadow-2xl p-6 text-white space-y-6">

    <!-- Close -->
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>

    <!-- Title -->
    <h2 class="text-2xl font-bold font-['Bebas_Neue'] tracking-wide text-[color:#FFD700]">
      Trophäen
    </h2>

    <!-- Text -->
    <div class="text-sm text-white/80 space-y-4 leading-relaxed">
      <p>
        Hier gibt es momentan noch keine Trophäen.
        Spiele bei uns und sammle Belohnungen, um deine persönliche Trophäensammlung zu füllen!
      </p>
    </div>

    <!-- Close Button -->
    <div class="flex justify-end">
      <button data-modal-close
        class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
        Schließen
      </button>
    </div>
  </div>
</div>

<div data-modal-id="mailbox-modal" class="flex fixed inset-0 z-50 hidden items-center justify-center px-4">
  <!-- Overlay -->
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <!-- Modal Content -->
  <div
    class="relative z-10 w-full max-w-5xl h-[70vh] bg-gradient-to-br from-[#0D0D14] to-[#0A0A0C] text-white rounded-2xl border border-white/10 shadow-2xl flex overflow-hidden">

    <!-- Left: Sidebar -->
    <div class="w-1/3 border-r border-white/10 p-6 flex flex-col justify-between bg-[#111218]">
      <div>
        <h2 class="text-lg font-bold mb-2">Posteingang</h2>
        <p class="text-sm text-white/70">
          Ihre Mailbox ist leer – es gibt keine neuen Nachrichten.
        </p>
      </div>
    </div>

    <!-- Right: Message Viewer -->
    <div class="w-2/3 flex items-center justify-center text-white/60 text-sm px-6">
      Ihre Mailbox ist leer – es gibt keine neuen Nachrichten.
    </div>

    <!-- Close Button -->
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>
  </div>
</div>

<div data-modal-id="favorites-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <!-- Overlay -->
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <!-- Modal -->
  <div
    class="relative z-10 w-full max-w-md bg-[#1A1A1A] rounded-3xl border border-white/10 shadow-2xl p-6 text-white space-y-6">
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>

    <h2 class="text-xl font-bold text-[color:#FFD700] font-['Bebas_Neue'] tracking-wide">Favoriten</h2>

    <?php if (!empty($isLoggedIn) && $isLoggedIn === true): ?>
      <p class="text-sm text-white/80 leading-relaxed">
        Du hast derzeit keine gespeicherten Favoriten. Spiele ein paar Spiele und füge sie zu deinen Favoriten hinzu!
      </p>
      <div class="flex justify-end gap-3">
        <button data-modal-close
          class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
          Zu den Spielen
        </button>
      </div>
    <?php else: ?>
      <p class="text-sm text-white/80 leading-relaxed">
        Hier findest du deine gespeicherten Lieblingsspiele.
      </p>
      <div class="flex justify-end gap-3">
        <button data-modal-close
          class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
          Schließen
        </button>
      </div>
    <?php endif; ?>
  </div>
</div>

<div data-modal-id="offers-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <!-- Overlay -->
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <!-- Modal -->
  <div
    class="relative z-10 w-full max-w-md bg-[#1A1A1A] rounded-3xl border border-white/10 shadow-2xl p-6 text-white space-y-6">
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>

    <h2 class="text-xl font-bold text-[color:#FFD700] font-['Bebas_Neue'] tracking-wide">Angebote</h2>

    <?php if (!empty($isLoggedIn) && $isLoggedIn === true): ?>
      <p class="text-sm text-white/80 leading-relaxed">
        Derzeit gibt es keine aktuellen Angebote, aber schon bald werden hier spannende Aktionen für dich verfügbar sein.
      </p>
    <?php else: ?>
      <p class="text-sm text-white/80 leading-relaxed">
        Aktuelle Boni und Aktionen für dich.
      </p>
    <?php endif; ?>

    <div class="flex justify-end">
      <button data-modal-close
        class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
        Schließen
      </button>
    </div>
  </div>
</div>

<div data-modal-id="profile-modal" class="fixed flex inset-0 z-50 hidden items-center justify-center px-4">
  <div data-modal-overlay class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

  <div
    class="relative z-10 w-full max-w-md bg-gradient-to-br from-[#14141C] to-[#0A0A0F] rounded-3xl border border-white/10 shadow-2xl p-6 text-white space-y-6">
    <button data-modal-close
      class="absolute top-3 right-3 text-white text-xl hover:text-[color:#FF6B00]">&times;</button>

    <h2 class="text-2xl font-bold font-['Bebas_Neue'] tracking-wide text-[color:#FFD700]">
      Profil
    </h2>

    <div id="profile-locked" class="text-sm text-white/80 space-y-4 leading-relaxed">
      <p>
        Bitte <a href="#" data-modal="login-modal"
          class="underline text-[color:#00E5FF] hover:text-[color:#FFCE00] transition">einloggen</a> oder
        <a href="#" data-modal="register-modal"
          class="underline text-[color:#00E5FF] hover:text-[color:#FFCE00] transition">registrieren</a>,
        um deine Profilbeschreibung zu bearbeiten.
      </p>
    </div>

    <form id="profile-editor" class="hidden space-y-4">
      <div class="space-y-1">
        <label for="profile-name" class="text-xs text-white/70">Anzeigename</label>
        <input id="profile-name" name="display_name" type="text" placeholder="[CURRENT_DOMAIN_NO_TLD] Player"
          class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
      </div>

      <div class="space-y-1">
        <label for="profile-bio" class="text-xs text-white/70">Über mich</label>
        <textarea id="profile-bio" name="bio" rows="4" maxlength="300"
          placeholder="Kurzbeschreibung deines Profils (max. 300 Zeichen)"
          class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]"></textarea>
        <div class="flex justify-end text-[10px] text-white/50">
          <span id="profile-bio-count">0</span>/300
        </div>
      </div>

      <div class="space-y-1">
        <label for="profile-avatar" class="text-xs text-white/70">Avatar-URL (optional)</label>
        <input id="profile-avatar" name="avatar" type="url" placeholder="img/avatar.webp"
          class="w-full rounded-xl bg-black/40 border border-white/10 text-white placeholder-white/40 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[color:#00E5FF]">
      </div>

      <div class="flex items-center justify-end gap-2 pt-2">
        <button type="button" data-modal-close
          class="rounded-xl bg-white/10 border border-white/20 px-5 py-2 text-sm hover:bg-white/20 transition">
          Abbrechen
        </button>
        <button type="submit"
          class="rounded-xl bg-[color:#FF6B00] text-black font-semibold px-5 py-2 text-sm hover:brightness-110 transition">
          Speichern
        </button>
      </div>

      <p id="profile-save-success" class="hidden text-xs text-green-400 text-center font-semibold">
        Profil wurde gespeichert.
      </p>
      <p id="profile-save-error" class="hidden text-xs text-red-400 text-center font-semibold">
        Speichern fehlgeschlagen. Bitte erneut versuchen.
      </p>
    </form>
  </div>
</div>

<script src="scripts/script.js"></script>
</body>

</html>