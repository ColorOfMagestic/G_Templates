<?php include "header.php"; ?>

<section id="register" class="bg-gradient-to-br from-white to-[#E6E6E6] text-[#1E1E1E] pt-44 pb-20 px-4 font-['Inter']">
  <div class="max-w-3xl mx-auto bg-[#FAFAF6] rounded-2xl shadow-2xl border border-[#C0C0C0]/50 p-8 sm:p-12">
    <h2 class="text-3xl font-extrabold text-[#A00000] mb-6 text-center uppercase tracking-wider font-['Playfair_Display']">
      Konto erstellen
    </h2>
    <p class="text-xs text-[#2F5233] text-center mb-6 leading-relaxed">
      Hol dir kostenfreien Zugang zu unabhängigen Informationen rund um legale Sportwetten in Österreich. Keine Werbung, kein Risiko – nur geprüfte Inhalte für volljährige Nutzer:innen.
    </p>

    <form id="registration-form" class="space-y-5" autocomplete="off" onsubmit="event.preventDefault(); showSuccessMessage();">
      <div>
        <label for="reg-email" class="block text-xs font-semibold mb-2 text-[#A00000]">E-Mail</label>
        <input type="email" id="reg-email" name="email" required autocomplete="email"
          class="w-full px-4 py-2 rounded-lg bg-white text-[#1E1E1E] placeholder-[#A0A0A0] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#A00000] transition" placeholder="dein@email.at" />
      </div>

      <div>
        <label for="reg-password" class="block text-xs font-semibold mb-2 text-[#A00000]">Passwort</label>
        <input type="password" id="reg-password" name="password" required autocomplete="new-password"
          class="w-full px-4 py-2 rounded-lg bg-white text-[#1E1E1E] placeholder-[#A0A0A0] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#A00000] transition" placeholder="Passwort" />
      </div>

      <div>
        <label for="reg-country" class="block text-xs font-semibold mb-2 text-[#A00000]">Land</label>
        <select id="reg-country" name="country" required
          class="w-full px-4 py-2 rounded-lg bg-white text-[#1E1E1E] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#A00000] transition">
          <option value="" disabled selected>Land auswählen</option>
          <option value="AT">Österreich</option>
          <option value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
        </select>
      </div>

      <div class="flex items-start gap-3">
        <input type="checkbox" id="reg-age" name="age" required class="mt-1 rounded border-[#C0C0C0] text-[#A00000] focus:ring-[#A00000]">
        <label for="reg-age" class="text-xs text-[#1E1E1E] leading-snug">
          Ich bin mindestens 18 Jahre alt und akzeptiere die
          <a href="/terms" class="underline text-[#A00000] hover:text-[#ED1C24]">Nutzungsbedingungen</a> sowie die
          <a href="/privacy" class="underline text-[#A00000] hover:text-[#ED1C24]">Datenschutzerklärung</a>.
        </label>
      </div>

      <button type="submit" class="w-full py-2 rounded-full bg-[#ED1C24] text-white font-bold text-base uppercase shadow-md hover:bg-[#A00000] transition">
        Registrieren
      </button>
    </form>

    <p class="text-[0.7rem] text-[#4B4B4B] mt-6 text-center leading-relaxed">
      Die Registrierung dient ausschließlich dem Zugang zu redaktionellen Inhalten über lizenzierte Wettanbieter in Österreich. Deine Daten werden gemäß DSGVO sicher verarbeitet – keine Werbung, kein Weiterverkauf, keine versteckten Verpflichtungen.
    </p>

    <div id="success-message" class="hidden flex flex-col items-center justify-center py-10 text-center transition-all">
      <svg class="mb-3 h-12 w-12 text-[#2F5233]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#2F5233" stroke-width="3" fill="none"/>
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#2F5233" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="text-lg font-bold mb-2 text-[#2F5233]">Registrierung erfolgreich!</div>
      <div class="text-sm text-[#4B4B4B] max-w-xs mb-3">
        Wir haben dir einen Bestätigungslink per E-Mail gesendet. Bitte prüfe dein Postfach und bestätige deine Anmeldung.
      </div>
      <button onclick="showFormAgain();" class="mt-2 px-6 py-2 rounded-full bg-[#A00000] text-white font-semibold uppercase shadow hover:bg-[#ED1C24] transition">
        Weiteres Konto anlegen
      </button>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>