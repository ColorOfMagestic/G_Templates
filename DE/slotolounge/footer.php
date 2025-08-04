<footer
  id="footer"
  class="w-full bg-[#18162A] pt-14 pb-8 px-2 md:px-0 border-t-2 border-[#7CFFCB]"
>
  <div class="max-w-5xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl bg-white/10">
          <img src="img/icon-trophy.webp" alt="Top Casino Bonus" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">100 % Unterhaltung</h3>
        <ul class="text-[#FF5F00] text-base text-center space-y-0.5">
          <li>Spiele kostenlos</li>
          <li>Keine Mindesteinsätze</li>
          <li>VIP-Bereich &amp; Support</li>
        </ul>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl bg-white/10">
          <img src="img/icon-lock.webp" alt="Sicher & Privat" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">Volle Privatsphäre</h3>
        <ul class="text-[#FF5F00] text-base text-center space-y-0.5">
          <li>Keine Adressdaten nötig</li>
          <li>Ohne Telefonnummer</li>
          <li>Keine Werbung per E-Mail</li>
        </ul>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl bg-white/10">
          <img src="img/icon-24.webp" alt="24/7 Spielspaß" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">Rund um die Uhr Spaß</h3>
        <ul class="text-[#FF5F00] text-base text-center space-y-0.5">
          <li>200+ Slots &amp; Casinospiele</li>
          <li>Wöchentliche Aktionen &amp; Missionen</li>
          <li>Tägliche Gratis-Chips</li>
        </ul>
      </div>
    </div>
    <div class="h-[2px] w-full bg-gradient-to-r from-[#7CFFCB]/60 via-[#7CFFCB]/10 to-transparent mb-6"></div>
    <div class="flex flex-col items-center gap-2 mb-5">
      <p class="text-[#BDBDBD] text-center text-sm max-w-3xl mb-2">
        Dieses Portal dient ausschließlich Unterhaltungszwecken und hat keinen Einfluss auf mögliche Gewinne bei Echtgeldspielen.
      </p>
      <div class="flex items-center gap-4 my-3">
        <img src="img/icon-age-xml.webp" alt="Altersfreigabe 18+" class="h-12 w-auto rounded p-1" />
        <img src="img/icon-18plus.webp" alt="18+" class="h-16 w-auto rounded-full p-1" />
      </div>
      <p class="text-[#BDBDBD] text-center text-xs max-w-2xl flex flex-wrap justify-center gap-x-2 gap-y-1">
        ©2016–2025 [CURRENT_DOMAIN_NO_TLD] –
        <a href="/terms" class="underline hover:text-[#7CFFCB] transition">Nutzungsbedingungen</a> |
        <a href="/" class="underline hover:text-[#7CFFCB] transition">[CURRENT_DOMAIN_NO_TLD]</a> |
        <a href="/privacy" class="underline hover:text-[#7CFFCB] transition">Datenschutz</a> |
        <a href="/about" class="underline hover:text-[#7CFFCB] transition">Impressum</a>
      </p>
      <p class="text-[#BDBDBD] text-center text-xs max-w-2xl mt-2">
        Dieses Angebot richtet sich ausschließlich an volljährige Nutzer ab 18 Jahren mit Wohnsitz in Deutschland.
      </p>
    </div>
  </div>
</footer>

<!-- Login Modal -->
<div
  id="login-modal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm transition-opacity duration-300 opacity-0 pointer-events-none"
>
  <div class="relative w-full max-w-sm mx-auto rounded-2xl bg-[#ECE1C6]/80 backdrop-blur-lg shadow-2xl px-7 pt-10 pb-8 border border-[#DDD2B4] flex flex-col items-center">
    <img src="img/login-top.webp" alt="Login Banner" class="mx-auto -mt-44 mb-2 w-60 rounded-xl shadow" />

    <h2 class="font-montserrat font-extrabold text-xl md:text-2xl text-[#5A4A3F] mb-5 text-center">
      Anmeldung bei Slotolounge
    </h2>
    <form class="w-full space-y-4">
      <input
        type="email"
        placeholder="E-Mail-Adresse"
        autocomplete="email"
        class="w-full rounded-xl border border-[#C9A66B] px-4 py-3 bg-white/80 text-[#5A4A3F] font-semibold text-base shadow focus:outline-none focus:border-[#C9A66B] transition"
        required
      >
      <input
        type="password"
        placeholder="Passwort"
        autocomplete="current-password"
        class="w-full rounded-xl border border-[#A08B6B] px-4 py-3 bg-white/80 text-[#5A4A3F] font-semibold text-base shadow focus:outline-none focus:border-[#C9A66B] transition"
        required
      >
      <button
        data-modal="info-modal"
        class="w-full py-3 rounded-2xl font-bold bg-gradient-to-r from-[#C9A66B] to-[#A08B6B] text-[#fff] text-lg shadow-lg border border-white/30 backdrop-blur-md hover:scale-105 transition"
      >
        Einloggen
      </button>
    </form>
    <button
      type="button"
      class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/70 flex items-center justify-center text-[#5A4A3F] text-2xl font-extrabold hover:bg-[#C9A66B] hover:text-[#fff] shadow transition"
      aria-label="Login-Fenster schließen"
      data-close-modal
    >
      ×
    </button>
  </div>
</div>

<!-- Info Modal -->
<div
  id="info-modal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm transition-opacity duration-300 opacity-0 pointer-events-none"
>
  <div class="relative w-full max-w-xs md:max-w-sm mx-auto rounded-2xl bg-[#ECE1C6]/80 backdrop-blur-lg shadow-2xl px-6 py-8 border border-[#DDD2B4] flex flex-col items-center">
    <div class="w-16 h-16 rounded-full bg-[#C9A66B] flex items-center justify-center mb-5 shadow-lg">
      <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
        <circle cx="17" cy="17" r="17" fill="#C9A66B" />
        <path d="M10 17L16 23L24 13" stroke="#5A4A3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <h2 class="font-montserrat font-extrabold text-xl md:text-2xl text-[#5A4A3F] mb-3 text-center">
      Bitte E-Mail prüfen!
    </h2>
    <p class="text-[#7D6A55] text-base text-center mb-4">
      Alle Informationen wurden an deine E-Mail-Adresse gesendet.
    </p>
    <button
      type="button"
      class="mt-2 px-8 py-3 rounded-full font-extrabold text-lg font-montserrat
             bg-gradient-to-r from-[#C9A66B]/90 to-[#A08B6B]/90 text-white
             shadow-lg backdrop-blur-md border border-white/50
             hover:scale-105 hover:shadow-2xl transition
             outline-none focus:ring-2 focus:ring-[#C9A66B]"
      data-close-modal
    >
      OK
    </button>
    <button
      type="button"
      class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/80 flex items-center justify-center text-[#5A4A3F] text-2xl font-extrabold hover:bg-[#C9A66B] hover:text-white shadow transition"
      aria-label="Info-Fenster schließen"
      data-close-modal
    >
      ×
    </button>
  </div>
</div>





<script src="scripts/script.js"></script>
</body>
</html>