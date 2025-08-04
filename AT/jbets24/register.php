<?php include "header.php"; ?>

<section id="register" class="bg-[#1E1E26] text-[#F3F6F9] py-24 pt-44 px-4 md:px-10 font-['Inter']">
  <div class="max-w-lg mx-auto bg-[#16161D] border border-[#2A2A30] rounded-3xl shadow-2xl px-8 py-12">
    
    <h2 class="text-3xl md:text-4xl font-extrabold text-center text-[#27AE60] uppercase mb-4 font-['Playfair_Display'] tracking-wide">
      Konto erstellen
    </h2>

    <p class="text-sm text-[#B7BDC6] text-center mb-8 leading-relaxed">
      Die Registrierung bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong> ist kostenlos und richtet sich ausschließlich an Personen mit Wohnsitz in Österreich, die das 18. Lebensjahr vollendet haben. Deine Daten werden gemäß der DSGVO verarbeitet und nicht an Dritte weitergegeben.  
    </p>

    <form id="registration-form" class="space-y-6" autocomplete="off" onsubmit="event.preventDefault(); showSuccessMessage();">
      
      <div>
        <label for="reg-email" class="block text-sm font-medium text-[#9AA0A6] mb-1">E-Mail</label>
        <input type="email" id="reg-email" name="email" required aria-required="true" autocomplete="email"
          class="w-full px-5 py-3 rounded-xl bg-[#1E1E26] text-[#F3F6F9] placeholder-[#6C717A] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#27AE60] transition"
          placeholder="dein@email.at" />
      </div>

      <div>
        <label for="reg-password" class="block text-sm font-medium text-[#9AA0A6] mb-1">Passwort</label>
        <input type="password" id="reg-password" name="password" required aria-required="true" autocomplete="new-password"
          class="w-full px-5 py-3 rounded-xl bg-[#1E1E26] text-[#F3F6F9] placeholder-[#6C717A] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#27AE60] transition"
          placeholder="••••••••" />
      </div>

      <div>
        <label for="reg-country" class="block text-sm font-medium text-[#9AA0A6] mb-1">Land</label>
        <select id="reg-country" name="country" required aria-required="true"
          class="w-full px-5 py-3 rounded-xl bg-[#1E1E26] text-[#F3F6F9] border border-[#343941] focus:outline-none focus:ring-2 focus:ring-[#27AE60] transition">
          <option value="" disabled selected hidden>Land auswählen</option>
          <option value="AT">Österreich</option>
          <option value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
        </select>
      </div>

      <div class="flex items-start gap-3">
        <input type="checkbox" id="reg-age" name="age" required aria-required="true"
          class="mt-1 rounded border-[#343941] text-[#27AE60] focus:ring-[#27AE60]" />
        <label for="reg-age" class="text-sm text-[#9AA0A6] leading-tight cursor-pointer">
          Ich bin mindestens 18 Jahre alt und akzeptiere die 
          <a href="/terms" class="underline text-[#27AE60] hover:text-[#6FCF97]">Nutzungsbedingungen</a>.
        </label>
      </div>

      <button type="submit"
        class="w-full py-3 rounded-full bg-[#27AE60] text-[#16161D] font-semibold text-lg uppercase shadow hover:bg-[#6FCF97] transition">
        Registrieren
      </button>
    </form>

    <div id="success-message" class="hidden flex flex-col items-center justify-center py-14 text-center">
      <svg class="mb-4 h-16 w-16 text-[#27AE60]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#27AE60" stroke-width="3" fill="none" />
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#27AE60" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <div class="text-2xl font-bold mb-2 text-[#27AE60]">Erfolgreich registriert!</div>
      <div class="text-sm text-[#B7BDC6] max-w-sm mx-auto mb-4">
        Bitte prüfe dein E-Mail-Postfach zur Bestätigung deines Kontos.
      </div>
      <button onclick="showFormAgain();" class="mt-2 px-6 py-2 rounded-full bg-[#27AE60] text-[#16161D] font-medium uppercase shadow hover:bg-[#6FCF97] transition">
        Weiteres Konto anlegen
      </button>
    </div>

  </div>
</section>


<?php include "footer.php"; ?>