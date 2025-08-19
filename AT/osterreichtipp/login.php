<?php include "header.php"; ?>

<section id="login" class="bg-[#FAFAF6] text-[#1E1E1E] py-24 pt-44 px-4 md:px-10 font-['Inter']">
  <div class="max-w-md mx-auto bg-white border border-[#C0C0C0] rounded-3xl shadow-2xl px-6 py-10">
    
    <h2 class="text-xl md:text-4xl font-extrabold text-center text-[#A00000] uppercase mb-4 font-['Playfair_Display'] tracking-wide">
      Anmeldung
    </h2>

    <p class="text-sm text-[#4B4B4B] text-center mb-8 leading-relaxed">
      Melden Sie sich bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong> mit Ihren persönlichen Zugangsdaten an. 
      Der Zugang ist ausschließlich volljährigen Nutzer:innen (18+) mit Wohnsitz in Österreich vorbehalten. 
      Alle Daten werden über eine gesicherte Verbindung verschlüsselt übertragen.
    </p>

    <form id="login-form" class="space-y-5" onsubmit="event.preventDefault(); window.location.href='/'" autocomplete="off">
      
      <div>
        <label for="login-email" class="block text-sm font-medium text-[#2F5233] mb-1">E-Mail-Adresse</label>
        <input type="email" id="login-email" name="email" required aria-required="true" autocomplete="email"
          class="w-full px-4 py-2.5 rounded-xl bg-white text-[#1E1E1E] placeholder-[#9CA3AF] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#ED1C24] transition"
          placeholder="name@beispiel.at" />
      </div>

      <div>
        <label for="login-password" class="block text-sm font-medium text-[#2F5233] mb-1">Passwort</label>
        <input type="password" id="login-password" name="password" required aria-required="true" autocomplete="current-password"
          class="w-full px-4 py-2.5 rounded-xl bg-white text-[#1E1E1E] placeholder-[#9CA3AF] border border-[#C0C0C0] focus:outline-none focus:ring-2 focus:ring-[#ED1C24] transition"
          placeholder="••••••••" />
      </div>

      <div class="flex justify-between items-center text-sm text-[#4B4B4B]">
        <label class="flex items-center gap-2">
          <input type="checkbox" class="rounded border-[#C0C0C0] text-[#A00000] focus:ring-[#ED1C24]" />
          Angemeldet bleiben
        </label>
      </div>

      <button type="submit"
        class="w-full py-2.5 rounded-full bg-[#A00000] text-white font-semibold text-lg uppercase shadow hover:bg-[#ED1C24] transition">
        Anmelden
      </button>

      <div class="mt-6 text-xs text-[#4B4B4B] leading-relaxed border-t border-[#C0C0C0] pt-4">
        <p>
          Die Nutzung dieser Plattform ist nur für volljährige Personen (18+) mit Wohnsitz in Österreich erlaubt. 
          Im Rahmen der Kontoerstellung kann eine Alters- und Identitätsprüfung durch Vorlage eines gültigen Ausweisdokuments erforderlich sein.
        </p>
        <p class="mt-2">
          Ihre Daten werden gemäß DSGVO und den geltenden österreichischen Datenschutzbestimmungen verarbeitet. 
          Weitere Informationen finden Sie in unserer <a href="/privacy" class="underline text-[#A00000] hover:text-[#ED1C24]">Datenschutzerklärung</a>.
        </p>
      </div>
    </form>

  </div>
</section>

<?php include "footer.php"; ?>