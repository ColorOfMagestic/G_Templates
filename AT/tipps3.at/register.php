<?php include "header.php"; ?>

<section id="register" class="bg-[#23272F] text-[#F3F6F9] py-28 px-4 md:px-10 font-['Inter']">
  <div class="max-w-md mx-auto bg-[#2C313A] rounded-2xl shadow-xl p-8">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#A5FF00] mb-6 text-center uppercase font-['Playfair_Display']">
      Konto erstellen
    </h2>
    <form id="registration-form" class="space-y-6" autocomplete="off" onsubmit="event.preventDefault(); showSuccessMessage();">
      <div>
        <label for="reg-email" class="block text-sm font-semibold mb-2">E-Mail</label>
        <input type="email" id="reg-email" name="email" required autocomplete="email"
          class="w-full px-5 py-3 rounded-lg bg-[#23272F] text-[#F3F6F9] placeholder-[#B7BDC6] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#A5FF00] transition" placeholder="dein@email.at" />
      </div>
      <div>
        <label for="reg-password" class="block text-sm font-semibold mb-2">Passwort</label>
        <input type="password" id="reg-password" name="password" required autocomplete="new-password"
          class="w-full px-5 py-3 rounded-lg bg-[#23272F] text-[#F3F6F9] placeholder-[#B7BDC6] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#A5FF00] transition" placeholder="Passwort" />
      </div>
      <div>
        <label for="reg-country" class="block text-sm font-semibold mb-2">Land</label>
        <select id="reg-country" name="country" required
          class="w-full px-5 py-3 rounded-lg bg-[#23272F] text-[#F3F6F9] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#A5FF00] transition">
          <option value="" disabled selected>Land auswählen</option>
          <option value="AT">Österreich</option>
          <option value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
        </select>
      </div>
      <div class="flex items-center gap-2">
        <input type="checkbox" id="reg-age" name="age" required
          class="rounded border-[#343941] text-[#A5FF00] focus:ring-[#A5FF00]">
        <label for="reg-age" class="text-xs text-[#B7BDC6]">Ich bin mindestens 18 Jahre alt und akzeptiere die <a href="/terms" class="underline text-[#A5FF00] hover:text-[#1CB5E0]">Nutzungsbedingungen</a></label>
      </div>
      <button type="submit" class="w-full py-3 rounded-full bg-[#A5FF00] text-[#23272F] font-bold text-lg uppercase shadow hover:bg-[#1CB5E0] transition">
        Registrieren
      </button>
    </form>
    <div id="success-message" class="hidden flex flex-col items-center justify-center py-14">
      <svg class="mb-4 h-16 w-16 text-[#A5FF00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#A5FF00" stroke-width="3" fill="none"/>
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#A5FF00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="text-2xl font-bold mb-2 text-[#A5FF00]">Registrierung erfolgreich!</div>
      <div class="text-base text-[#F3F6F9] text-center max-w-xs mb-4">
        Deine Angaben wurden sicher übermittelt. Bitte prüfe dein E-Mail-Postfach für die Bestätigung und weitere Hinweise.
      </div>
      <button onclick="showFormAgain();" class="mt-3 px-8 py-2 rounded-full bg-[#A5FF00] text-[#23272F] font-semibold uppercase shadow hover:bg-[#1CB5E0] transition">
        Weiteres Konto anlegen
      </button>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>