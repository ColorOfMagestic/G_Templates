<?php include "header.php"; ?>

<section id="register" class="bg-[#152848] text-[#F2F4F8] pt-44 pb-12 px-4 font-['Inter']">
  <div class="max-w-md mx-auto bg-[#233053] rounded-2xl shadow-2xl border border-[#FFD700]/40 p-7 sm:p-10">
    <h2 class="text-2xl md:text-3xl font-extrabold text-[#FFD700] mb-5 text-center uppercase font-['Playfair_Display'] tracking-wider">
      Konto erstellen
    </h2>
    <p class="text-xs text-[#C0C8D0] text-center mb-6 leading-relaxed">
      Registriere dich in wenigen Schritten und erhalte Zugang zu unabhängigen Informationen über lizenzierte Sportwetten-Anbieter in Österreich. Die Registrierung ist kostenlos und verpflichtet zu nichts.
    </p>
    <form id="registration-form" class="space-y-5" autocomplete="off" onsubmit="event.preventDefault(); showSuccessMessage();">
      <div>
        <label for="reg-email" class="block text-xs font-semibold mb-2 text-[#FFD700]">E-Mail</label>
        <input type="email" id="reg-email" name="email" required autocomplete="email"
          class="w-full px-4 py-2 rounded-lg bg-[#152848] text-[#F2F4F8] placeholder-[#C0C8D0] border border-[#FFD700]/20 focus:outline-none focus:ring-2 focus:ring-[#FFD700] transition" placeholder="dein@email.at" />
      </div>
      <div>
        <label for="reg-password" class="block text-xs font-semibold mb-2 text-[#FFD700]">Passwort</label>
        <input type="password" id="reg-password" name="password" required autocomplete="new-password"
          class="w-full px-4 py-2 rounded-lg bg-[#152848] text-[#F2F4F8] placeholder-[#C0C8D0] border border-[#FFD700]/20 focus:outline-none focus:ring-2 focus:ring-[#FFD700] transition" placeholder="Passwort" />
      </div>
      <div>
        <label for="reg-country" class="block text-xs font-semibold mb-2 text-[#FFD700]">Land</label>
        <select id="reg-country" name="country" required
          class="w-full px-4 py-2 rounded-lg bg-[#152848] text-[#F2F4F8] border border-[#FFD700]/20 focus:outline-none focus:ring-2 focus:ring-[#FFD700] transition">
          <option value="" disabled selected>Land auswählen</option>
          <option value="AT">Österreich</option>
          <option value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
        </select>
      </div>
      <div class="flex items-center gap-2">
        <input type="checkbox" id="reg-age" name="age" required
          class="rounded border-[#FFD700]/40 text-[#FFD700] focus:ring-[#FFD700]">
        <label for="reg-age" class="text-xs text-[#C0C8D0]">
          Ich bin mindestens 18 Jahre alt und akzeptiere die 
          <a href="/terms" class="underline text-[#FFD700] hover:text-[#ED1C24]">Nutzungsbedingungen</a> sowie die 
          <a href="/privacy" class="underline text-[#FFD700] hover:text-[#ED1C24]">Datenschutzerklärung</a>.
        </label>
      </div>
      <button type="submit" class="w-full py-2 rounded-full bg-[#FFD700] text-[#152848] font-bold text-base uppercase shadow hover:bg-[#ED1C24] hover:text-[#FFF8E1] transition">
        Registrieren
      </button>
    </form>
    <p class="text-[0.7rem] text-[#C0C8D0] mt-6 text-center leading-relaxed">
      Deine Daten werden ausschließlich im Rahmen der geltenden Datenschutzgesetze verarbeitet. Es erfolgt keine Weitergabe an Drittanbieter ohne deine ausdrückliche Zustimmung. Die Registrierung dient ausschließlich zur Nutzung von Informationsdiensten im Zusammenhang mit legalem Online-Wetten in Österreich.
    </p>
    <div id="success-message" class="hidden flex flex-col items-center justify-center py-10">
      <svg class="mb-3 h-12 w-12 text-[#FFD700]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="22" stroke="#FFD700" stroke-width="3" fill="none"/>
        <path d="M16 25.5L22 31.5L34 18.5" stroke="#FFD700" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="text-lg font-bold mb-2 text-[#FFD700]">Registrierung erfolgreich!</div>
      <div class="text-sm text-[#F2F4F8] text-center max-w-xs mb-3">
        Deine Angaben wurden sicher übermittelt. Bitte bestätige deine E-Mail-Adresse über den Link, den wir dir soeben gesendet haben.
      </div>
      <button onclick="showFormAgain();" class="mt-2 px-6 py-2 rounded-full bg-[#FFD700] text-[#152848] font-semibold uppercase shadow hover:bg-[#ED1C24] hover:text-[#FFF8E1] transition">
        Weiteres Konto anlegen
      </button>
    </div>
  </div>
</section>



<?php include "footer.php"; ?>