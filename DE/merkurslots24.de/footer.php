<footer id="footer" class="w-full bg-[#171324] pt-14 pb-8 px-2 md:px-0">
  <div class="max-w-5xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl">
          <img src="img/icon-trophy.webp" alt="100% Spaß" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">100 % SPAß, 0 % RISIKO</h3>
        <ul class="text-[#E9DFAF] text-base text-center space-y-0.5">
          <li>Kostenlos spielen</li>
          <li>Kein Mindesteinsatz</li>
          <li>VIP-Club und -Support</li>
        </ul>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl">
          <img src="img/icon-lock.webp" alt="Maximale Privatsphäre" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">MAXIMALE PRIVATSPHÄRE</h3>
        <ul class="text-[#E9DFAF] text-base text-center space-y-0.5">
          <li>Keine Postanschrift</li>
          <li>Keine Telefonnummer</li>
          <li>Kein Spam</li>
        </ul>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-3 shadow-xl">
          <img src="img/icon-24.webp" alt="24 Stunden Spielspaß" class="w-14 h-14 object-contain" />
        </div>
        <h3 class="text-lg font-extrabold text-white mb-1 text-center">24 STUNDEN SPIELSPAß</h3>
        <ul class="text-[#E9DFAF] text-base text-center space-y-0.5">
          <li>Mehr als 200 Slot & Casino Spiele</li>
          <li>Wöchentliche Events & Tagesaufgaben</li>
          <li>Täglich Gratis-Chips</li>
        </ul>
      </div>
    </div>
    <div class="h-[2px] w-full bg-gradient-to-r from-[#FFCE00]/50 via-[#FFCE00]/10 to-transparent mb-6"></div>
    <div class="flex flex-col items-center gap-2 mb-5">
      <p class="text-[#BDBDBD] text-center text-sm max-w-3xl mb-2">
        Dieses Portal dient ausschließlich Unterhaltungszwecken und beeinflusst nicht den möglichen Erfolg beim Spielen um echtes Geld.
      </p>
      <div class="flex items-center gap-4 my-3">
        <img src="img/icon-age-xml.webp" alt="age.xml 18+" class="h-12 w-auto rounded  p-1" />
        <img src="img/icon-18plus.webp" alt="18+" class="h-16 w-auto rounded-full  p-1" />
      </div>
      <p class="text-[#BDBDBD] text-center text-xs max-w-2xl flex flex-wrap justify-center gap-x-2 gap-y-1">
  ©2014-2025 Whow Games GmbH –
  <a href="/terms" class="underline hover:text-[#FFCE00] transition">Regeln</a> |
  <a href="/" class="underline hover:text-[#FFCE00] transition">Merkur24</a> |
  <a href="/privacy" class="underline hover:text-[#FFCE00] transition">DATENSCHUTZ</a> |
  <a href="/about" class="underline hover:text-[#FFCE00] transition">Über uns</a> |
  <a href="https://www.whow.net/en" class="underline hover:text-[#FFCE00] transition">Unternehmen</a>
</p>

      <p class="text-[#BDBDBD] text-center text-xs max-w-2xl mt-2">
        Dieses Angebot richtet sich ausschließlich an erwachsene Spieler ab 18 Jahren.
      </p>
    </div>
  </div>
</footer>


<!-- Login Modal -->
<div
  id="login-modal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm transition-opacity duration-300 opacity-0 pointer-events-none"
>
  <div class="relative w-full max-w-sm mx-auto rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-7 pt-10 pb-8 border border-white/40 flex flex-col items-center">
    <img src="img/login-top.webp" alt="Login banner" class="mx-auto -mt-44 mb-2 w-60 rounded-xl shadow" />

    <h2 class="font-montserrat font-extrabold text-xl md:text-2xl text-[#16335A] mb-5 text-center">
      Log In to Your Account
    </h2>
    <form class="w-full space-y-4">
      <input
        type="email"
        placeholder="Email"
        autocomplete="email"
        class="w-full rounded-xl border border-[#FFCE00] px-4 py-3 bg-white/80 text-[#222831] font-semibold text-base shadow focus:outline-none focus:border-[#16335A] transition"
        required
      >
      <input
        type="password"
        placeholder="Password"
        autocomplete="current-password"
        class="w-full rounded-xl border border-[#F5F5F5] px-4 py-3 bg-white/80 text-[#222831] font-semibold text-base shadow focus:outline-none focus:border-[#FFCE00] transition"
        required
      >
      <button
      data-modal="info-modal"
        class="w-full py-3 rounded-2xl font-bold bg-gradient-to-r from-[#FFCE00] to-[#FF9100] text-[#16335A] text-lg shadow-lg border border-white/30 backdrop-blur-md hover:scale-105 transition"
      >
        Log In
      </button>
    </form>
    <button
      type="button"
      class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/70 flex items-center justify-center text-[#16335A] text-2xl font-extrabold hover:bg-[#FFCE00] hover:text-[#16335A] shadow transition"
      aria-label="Close login modal"
      data-close-modal
    >
      X
    </button>
  </div>
</div>

<!-- Info Modal -->
<div
  id="info-modal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm transition-opacity duration-300 opacity-0 pointer-events-none"
>
  <div class="relative w-full max-w-xs md:max-w-sm mx-auto rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-6 py-8 border border-white/40 flex flex-col items-center">
    <div class="w-16 h-16 rounded-full bg-[#FFCE00] flex items-center justify-center mb-5 shadow-lg">
      <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
        <circle cx="17" cy="17" r="17" fill="#FFCE00" />
        <path d="M10 17L16 23L24 13" stroke="#16335A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <h2 class="font-montserrat font-extrabold text-xl md:text-2xl text-[#16335A] mb-3 text-center">
      Check your email!
    </h2>
    <p class="text-[#222831] text-base text-center mb-4">
      All information has been sent to your email.
    </p>
    <button
      type="button"
      class="mt-2 px-8 py-3 rounded-full font-extrabold text-lg font-montserrat
             bg-gradient-to-r from-[#FFCE00]/90 to-[#FF9100]/90 text-[#16335A]
             shadow-lg backdrop-blur-md border border-white/50
             hover:scale-105 hover:shadow-2xl transition
             outline-none focus:ring-2 focus:ring-[#FFCE00]"
      data-close-modal
    >
      OK
    </button>
    <button
      type="button"
      class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/80 flex items-center justify-center text-[#16335A] text-2xl font-extrabold hover:bg-[#FFCE00] hover:text-[#16335A] shadow transition"
      aria-label="Close info modal"
      data-close-modal
    >
      Х
    </button>
  </div>
</div>



<script src="scripts/script.js"></script>
</body>
</html>