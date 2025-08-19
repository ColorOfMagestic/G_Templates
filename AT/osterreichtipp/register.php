<?php include "header.php"; ?>

<section id="register" class="bg-[#FAFAF6] text-[#1E1E1E] py-24 pt-44 px-4 md:px-10 font-['Inter']">
  <div class="max-w-md mx-auto bg-white border border-[#C0C0C0] rounded-3xl shadow-2xl px-6 py-10">
    <h2 class="text-xl md:text-4xl font-extrabold text-center text-[#A00000] uppercase mb-3 font-['Playfair_Display'] tracking-wide">
      Konto erstellen
    </h2>

    <p class="text-sm text-[#4B4B4B] text-center mb-6 leading-relaxed">
      Die Registrierung bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong> ist kostenfrei und ausschließlich für volljährige Personen (18+) mit festem Wohnsitz in Österreich möglich. 
      Im Rahmen der Kontoerstellung kann eine Identitäts- und Altersprüfung durch Vorlage eines gültigen Ausweisdokuments erforderlich sein. 
      Alle personenbezogenen Daten werden gemäß DSGVO und österreichischem Datenschutzgesetz verarbeitet.
    </p>

    <form id="registration-form" class="space-y-5" autocomplete="off" onsubmit="event.preventDefault(); showSuccessMessage();">
      <div>
        <label for="reg-email" class="block text-sm font-medium text-[#2F5233] mb-1">E-Mail-Adresse</label>
        <input type="email" id="reg-email" name="email" required aria-required="true" autocomplete="email"
          class="w-full px-4 py-2.5 rounded-xl bg-white text-[#1E1E1E] placeholder-[#9CA3AF] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#ED1C24] transition"
          placeholder="name@beispiel.at" />
      </div>

      <div>
        <label for="reg-password" class="block text-sm font-medium text-[#2F5233] mb-1">Passwort</label>
        <div class="relative">
          <input type="password" id="reg-password" name="password" required aria-required="true" autocomplete="new-password"
            class="w-full px-4 py-2.5 rounded-xl bg-white text-[#1E1E1E] placeholder-[#9CA3AF] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#ED1C24] transition pr-12"
            placeholder="••••••••" />
          <button type="button" aria-label="Passwort anzeigen/ausblenden"
            class="absolute inset-y-0 right-3 my-auto h-8 w-8 grid place-items-center rounded-md text-[#A00000] hover:text-[#ED1C24]"
            onclick="const i=document.getElementById('reg-password'); i.type=i.type==='password'?'text':'password';">
            👁
          </button>
        </div>
      </div>

      <div>
        <label for="reg-country" class="block text-sm font-medium text-[#2F5233] mb-1">Land</label>
        <select id="reg-country" name="country" required aria-required="true"
          class="w-full px-4 py-2.5 rounded-xl bg-white text-[#1E1E1E] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#ED1C24] transition">
          <option value="" disabled selected hidden>Land auswählen</option>
          <option value="AT">Österreich</option>
          <option value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
        </select>
      </div>

      <div class="flex items-start gap-3">
        <input type="checkbox" id="reg-age" name="age" required aria-required="true"
          class="mt-1 rounded border-[#C0C0C0] text-[#A00000] focus:ring-[#ED1C24]" />
        <label for="reg-age" class="text-sm text-[#4B4B4B] leading-tight cursor-pointer">
          Ich bestätige, dass ich mindestens 18 Jahre alt bin, die 
          <a href="/terms" class="underline text-[#A00000] hover:text-[#ED1C24]">Nutzungsbedingungen</a> gelesen habe und diese akzeptiere.
        </label>
      </div>

      <button type="submit"
        class="w-full py-2.5 rounded-full bg-[#A00000] text-white font-semibold text-lg uppercase shadow hover:bg-[#ED1C24] focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/60 transition">
        Registrieren
      </button>

      <div class="mt-6 text-xs text-[#4B4B4B] leading-relaxed border-t border-[#C0C0C0] pt-4">
        <p>
          Die Registrierung ist nur für Personen mit Wohnsitz in Österreich und einem Mindestalter von 18 Jahren zulässig. 
          Alle Daten werden verschlüsselt übertragen und vertraulich behandelt.
        </p>
        <p class="mt-2">
          Weitere Informationen findest du in unserer <a href="/privacy" class="underline text-[#A00000] hover:text-[#ED1C24]">Datenschutzerklärung</a>.
        </p>
      </div>
    </form>

    <div id="success-message" class="hidden flex flex-col items-center justify-center py-12 text-center">
      <svg class="mb-3 h-14 w-14 text-[#A00000]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#A00000" stroke-width="3" fill="none" />
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#A00000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <div class="text-xl font-bold mb-2 text-[#A00000]">Erfolgreich registriert!</div>
      <div class="text-sm text-[#4B4B4B] max-w-xs mx-auto mb-3">
        Bitte prüfen Sie Ihr E-Mail-Postfach und bestätigen Sie die Registrierung, um Ihr Konto zu aktivieren.
      </div>
      <button onclick="showFormAgain();" class="mt-1 px-5 py-2 rounded-full bg-[#A00000] text-white font-medium uppercase shadow hover:bg-[#ED1C24] focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/60 transition">
        Weiteres Konto anlegen
      </button>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>