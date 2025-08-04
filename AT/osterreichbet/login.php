<?php include "header.php"; ?>

<section id="login" class="bg-gradient-to-br from-white to-[#E6E6E6] text-[#1E1E1E] pt-44 pb-20 px-4 font-['Inter']">
  <div class="max-w-3xl mx-auto bg-[#FAFAF6] rounded-2xl shadow-2xl border border-[#C0C0C0]/50 p-8 sm:p-12">
    <h2 class="text-3xl font-extrabold text-[#A00000] mb-6 text-center uppercase tracking-wider font-['Playfair_Display']">
      Anmeldung
    </h2>
    <p class="text-xs text-[#2F5233] text-center mb-6 leading-relaxed">
      Melde dich mit deinem bestehenden Konto an, um Zugang zu geprüften Informationen über lizensierte Sportwettenanbieter in Österreich zu erhalten. Deine Daten bleiben dabei jederzeit geschützt und vertraulich.
    </p>

    <form id="login-form" class="space-y-5" autocomplete="off" onsubmit="event.preventDefault(); showLoginSuccess();">
      <div>
        <label for="login-email" class="block text-xs font-semibold mb-2 text-[#A00000]">E-Mail</label>
        <input type="email" id="login-email" name="email" required autocomplete="email"
          class="w-full px-4 py-2 rounded-lg bg-white text-[#1E1E1E] placeholder-[#A0A0A0] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#A00000] transition" placeholder="dein@email.at" />
      </div>

      <div>
        <label for="login-password" class="block text-xs font-semibold mb-2 text-[#A00000]">Passwort</label>
        <input type="password" id="login-password" name="password" required autocomplete="current-password"
          class="w-full px-4 py-2 rounded-lg bg-white text-[#1E1E1E] placeholder-[#A0A0A0] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#A00000] transition" placeholder="Passwort" />
      </div>

      <div class="flex justify-between items-center text-xs text-[#4B4B4B]">
        <label class="inline-flex items-center gap-2">
          <input type="checkbox" class="rounded border-[#C0C0C0] text-[#A00000] focus:ring-[#A00000]">
          Eingeloggt bleiben
        </label>
      </div>

      <button type="submit" class="w-full py-2 rounded-full bg-[#ED1C24] text-white font-bold text-base uppercase shadow-md hover:bg-[#A00000] transition">
        Einloggen
      </button>
    </form>

    <p class="text-[0.7rem] text-[#4B4B4B] mt-6 text-center leading-relaxed">
      Deine Zugangsdaten werden durch moderne Sicherheitsprotokolle verschlüsselt übertragen und ausschließlich zur Authentifizierung verwendet. Es erfolgt keinerlei Weitergabe an Dritte – vollständige DSGVO-Konformität ist jederzeit gewährleistet.
    </p>

    <div id="login-success" class="hidden flex flex-col items-center justify-center py-10 text-center transition-all">
      <svg class="mb-3 h-12 w-12 text-[#2F5233]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#2F5233" stroke-width="3" fill="none"/>
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#2F5233" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="text-lg font-bold mb-2 text-[#2F5233]">Anmeldung erfolgreich!</div>
      <div class="text-sm text-[#4B4B4B] max-w-xs mb-3">
        Du wirst nun automatisch weitergeleitet. Vielen Dank für dein Vertrauen.
      </div>
      <button onclick="window.location.href='/'" class="mt-2 px-6 py-2 rounded-full bg-[#A00000] text-white font-semibold uppercase shadow hover:bg-[#ED1C24] transition">
        Zur Startseite
      </button>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>