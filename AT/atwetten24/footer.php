<footer id="site-footer" class="bg-[#EDEFF2] border-t border-[#DDE3EA] pt-12 px-4 md:px-10 font-['Inter'] text-[#4B5563]">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 pb-12">
    
    <div class="flex flex-col items-start gap-4">
      <a href="/">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-14 w-auto object-contain" />
      </a>
      <p class="text-sm leading-relaxed max-w-xs">
        [CURRENT_DOMAIN_NO_TLD] steht für legalen, verantwortungsvollen Zugang zu Online-Sportwetten – lizenziert, transparent und 100 % konform mit österreichischem Recht.
      </p>
    </div>

    <div>
      <h3 class="text-base font-semibold uppercase text-[#0E1A2B] mb-4">Rechtliches</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="/terms" class="hover:text-[#D00000] transition">Nutzungsbedingungen</a></li>
        <li><a href="/privacy" class="hover:text-[#D00000] transition">Datenschutz</a></li>
        <li><a href="/responsible" class="hover:text-[#D00000] transition">Verantwortungsvolles Spielen</a></li>
        <li><a href="/cookies" class="hover:text-[#D00000] transition">Cookie-Richtlinie</a></li>
        <li><a href="/#contact" class="hover:text-[#D00000] transition">Kontakt</a></li>
      </ul>
    </div>

    <div class="text-sm leading-relaxed space-y-3">
      <div class="bg-white border border-[#DDE3EA] rounded-xl p-4">
        <strong>18+ Nur für Erwachsene:</strong><br />
        Sportwetten sind kein Spiel für Minderjährige. Hilfe & Beratung anonym unter <strong>0800 20 52 42</strong> oder <a href="https://www.spielen-mit-verantwortung.at" class="underline hover:text-[#D00000]">spielen-mit-verantwortung.at</a>.
      </div>
      <p class="text-xs">
        © [CURRENT_DOMAIN_NO_TLD] – Plattform gemäß § 6 Abs. 1 Z 4 NÖ Wettgesetz, LGBl. Nr. 58/2020. Offiziell bewilligt durch die NÖ Landesregierung.<br />
        Alle Wettangebote richten sich ausschließlich an Nutzer:innen mit Wohnsitz in Österreich.
      </p>
    </div>
  </div>

  <div class="border-t border-[#DDE3EA] pt-6 pb-8 text-center text-xs text-[#4B5563]">
    [CURRENT_DOMAIN_NO_TLD] ist ausschließlich für volljährige Personen (18+) vorgesehen. Die Nutzung unterliegt den gesetzlichen Rahmenbedingungen der Republik Österreich. Spiele mit Verantwortung.
  </div>
</footer>

<div
  id="registerModal"
  class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/50 backdrop-blur-sm flex items-center justify-center px-4"
>
  <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-6 sm:p-10 relative">
    
    <button
      type="button"
      class="absolute top-4 right-4 text-[#1C1E21] hover:text-[#D00000] text-xl font-bold"
      data-modal-close="registerModal"
    >
      ×
    </button>

    <h2 class="text-2xl font-bold text-[#0E1A2B] mb-6 text-center">Registrierung starten</h2>

    <form action="/register" method="post" class="space-y-5">
      <div>
        <label for="fullname" class="block text-sm font-medium text-[#1C1E21] mb-1">Vollständiger Name</label>
        <input
          type="text"
          id="fullname"
          name="fullname"
          required
          autocomplete="name"
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-[#D00000] outline-none"
        />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-[#1C1E21] mb-1">E-Mail-Adresse</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          autocomplete="email"
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-[#D00000] outline-none"
        />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-[#1C1E21] mb-1">Passwort</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          autocomplete="new-password"
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-[#D00000] outline-none"
        />
      </div>

      <div>
        <label for="country" class="block text-sm font-medium text-[#1C1E21] mb-1">Wohnsitzland</label>
        <select
          id="country"
          name="country"
          required
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm bg-white focus:ring-2 focus:ring-[#D00000] outline-none"
        >
          <option value="at">Österreich</option>
          <option value="de">Deutschland</option>
          <option value="ch">Schweiz</option>
        </select>
      </div>

      <div class="flex items-start gap-2 text-sm">
        <input type="checkbox" id="terms" name="terms" required class="mt-1" />
        <label for="terms" class="text-[#1C1E21]">
          Ich bin mindestens 18 Jahre alt und akzeptiere die <a href="/terms" class="text-[#D00000] hover:underline">Nutzungsbedingungen</a> sowie die <a href="/privacy" class="text-[#D00000] hover:underline">Datenschutzrichtlinie</a> von <strong>[CURRENT_DOMAIN_NO_TLD]</strong>.
        </label>
      </div>

      <p class="text-xs text-[#4B5563] leading-snug">
        [CURRENT_DOMAIN_NO_TLD] steht für legale und verantwortungsvolle Wettangebote. Die Nutzung ist ausschließlich volljährigen Nutzer:innen mit Wohnsitz in Österreich vorbehalten. Bitte wette mit Verantwortung.
      </p>

      <button
        type="submit"
        class="w-full bg-[#D00000] text-white font-semibold py-2 rounded-full hover:bg-[#B00000] transition"
      >
        Konto erstellen
      </button>
    </form>
  </div>
</div>

<div
  id="loginModal"
  class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/50 backdrop-blur-sm flex items-center justify-center px-4"
>
  <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-6 sm:p-10 relative">

    <button
      type="button"
      class="absolute top-4 right-4 text-[#1C1E21] hover:text-[#D00000] text-xl font-bold"
      data-modal-close="loginModal"
    >
      ×
    </button>

    <h2 class="text-2xl font-bold text-[#0E1A2B] mb-6 text-center">Anmelden</h2>

    <form id="loginForm" action="/login" method="post" class="space-y-5">
      <div>
        <label for="login-email" class="block text-sm font-medium text-[#1C1E21] mb-1">E-Mail-Adresse</label>
        <input
          type="email"
          id="login-email"
          name="email"
          required
          autocomplete="email"
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-[#D00000] outline-none"
        />
      </div>

      <div>
        <label for="login-password" class="block text-sm font-medium text-[#1C1E21] mb-1">Passwort</label>
        <input
          type="password"
          id="login-password"
          name="password"
          required
          autocomplete="current-password"
          class="w-full border border-[#DDE3EA] rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-[#D00000] outline-none"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-[#D00000] text-white font-semibold py-2 rounded-full hover:bg-[#B00000] transition"
      >
        Jetzt einloggen
      </button>
    </form>
  </div>
</div>

<div id="age-gate-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm" style="display:none;">
  <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 sm:p-10 text-center flex flex-col items-center border border-[#DDE3EA]">

    <div class="mb-6">
      <div class="w-16 h-16 rounded-full border-4 border-[#FFD700] flex items-center justify-center text-xl font-bold text-[#D00000]">
        18+
      </div>
    </div>

    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0E1A2B] mb-3 font-['Playfair_Display'] uppercase">
      Altersbestätigung
    </h2>

    <p class="mb-6 text-[#4B5563] text-base leading-relaxed">
      Der Zugriff auf <strong>[CURRENT_DOMAIN_NO_TLD]</strong> ist ausschließlich volljährigen Nutzer:innen vorbehalten.<br>
      Bitte bestätige dein Alter:
    </p>

    <div class="flex gap-4 w-full justify-center mb-6">
      <button
        onclick="acceptAgeGate()"
        class="w-32 px-6 py-2 rounded-full bg-[#D00000] text-white font-semibold uppercase text-sm hover:bg-[#B00000] transition"
      >
        Ja, bin 18+
      </button>
      <button
        onclick="window.location.href='https://www.google.at'"
        class="w-32 px-6 py-2 rounded-full border border-[#D00000] text-[#D00000] font-semibold uppercase text-sm hover:bg-[#F7F9FC] transition"
      >
        Nein
      </button>
    </div>

    <div class="mt-2 text-xs text-[#4B5563] bg-[#F7F9FC] border border-[#DDE3EA] rounded p-4 leading-relaxed">
      <strong>Hinweis:</strong> Die Nutzung dieser Plattform ist in Österreich ausschließlich Personen ab 18 Jahren erlaubt.<br>
      Eine falsche Altersangabe stellt einen Verstoß gegen unsere <a href="/terms" class="underline text-[#D00000] hover:text-[#FFD700]">Nutzungsbedingungen</a> dar und kann zu einem dauerhaften Ausschluss führen.
    </div>
  </div>
</div>


<script src="scripts/script.js"></script>
</body>

</html>