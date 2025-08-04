<?php include "header.php"; ?>

<section id="login" class="bg-[#1E1E26] text-[#F3F6F9] py-24 pt-44 px-4 md:px-10 font-['Inter']">
  <div class="max-w-lg mx-auto bg-[#16161D] border border-[#2A2A30] rounded-3xl shadow-2xl px-8 py-12">
    
    <h2 class="text-3xl md:text-4xl font-extrabold text-center text-[#27AE60] uppercase mb-4 font-['Playfair_Display'] tracking-wide">
      Login
    </h2>

    <p class="text-sm text-[#B7BDC6] text-center mb-8 leading-relaxed">
      Willkommen zurück bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong>. Der Login ist ausschließlich volljährigen Nutzer:innen vorbehalten. Deine Zugangsdaten werden sicher verschlüsselt übertragen.
    </p>

    <form id="login-form" class="space-y-6" onsubmit="event.preventDefault(); window.location.href='/'" autocomplete="off">
      
      <div>
        <label for="login-email" class="block text-sm font-medium text-[#9AA0A6] mb-1">E-Mail</label>
        <input type="email" id="login-email" name="email" required aria-required="true" autocomplete="email"
          class="w-full px-5 py-3 rounded-xl bg-[#1E1E26] text-[#F3F6F9] placeholder-[#6C717A] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#27AE60] transition"
          placeholder="dein@email.at" />
      </div>

      <div>
        <label for="login-password" class="block text-sm font-medium text-[#9AA0A6] mb-1">Passwort</label>
        <input type="password" id="login-password" name="password" required aria-required="true" autocomplete="current-password"
          class="w-full px-5 py-3 rounded-xl bg-[#1E1E26] text-[#F3F6F9] placeholder-[#6C717A] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#27AE60] transition"
          placeholder="••••••••" />
      </div>

      <div class="flex justify-between items-center text-sm text-[#9AA0A6]">
        <label class="flex items-center gap-2">
          <input type="checkbox" class="rounded border-[#343941] text-[#27AE60] focus:ring-[#27AE60]" />
          Angemeldet bleiben
        </label>
      </div>

      <button type="submit"
        class="w-full py-3 rounded-full bg-[#27AE60] text-[#16161D] font-semibold text-lg uppercase shadow hover:bg-[#6FCF97] transition">
        Login
      </button>
    </form>

  </div>
</section>

<?php include "footer.php"; ?>