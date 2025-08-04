<footer id="footer" class="relative bg-[#FFF9E2] text-[#3A3636] font-['Montserrat',sans-serif] pt-20 pb-12 px-6">

  <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#009688] via-[#FFB300] to-[#5E3A87]"></div>

  <div class="max-w-6xl mx-auto flex flex-col items-center gap-5 mb-10">
    <div class="flex flex-col md:flex-row items-center justify-center gap-8 w-full">
      <a href="/" class="inline-block transform transition duration-300 hover:scale-105 shrink-0">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="w-24">
      </a>
      <nav class="flex flex-wrap justify-center items-center gap-x-8 gap-y-3 ml-0 md:ml-8 text-sm font-semibold uppercase text-[#5E3A87]">
        <a href="/#how" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">How It Works</a>
        <a href="/faq" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">Help Centre</a>
        <a href="/#draws" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">Draw Calendar</a>
        <a href="/privacy" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">Privacy Policy</a>
        <a href="/terms" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">Terms of Use</a>
        <a href="/#responsible" class="transition transform duration-300 hover:text-[#FFB300] hover:scale-105">Play Responsibly</a>
      </nav>
    </div>
    <div class="text-[#FFB300] text-base md:text-lg font-extrabold uppercase tracking-widest mt-2 mb-2 text-center">
      Catch the Sunshine. Catch the Luck!
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-xl text-[#3A3636]/90 text-xs px-6 py-10 mt-10 max-w-6xl mx-auto mb-8 border border-[#FFD54F]">
    <div class="space-y-6 text-center leading-relaxed">
      <p>
        <strong class="text-[#FF6F61]">Think! About your choices.</strong> Gamble Responsibly. Call
        <a href="tel:1800858858" class="underline transition hover:text-[#FFB300] hover:scale-105 inline-block">1800 858 858</a> or visit
        <a href="https://www.gambleaware.nsw.gov.au/" target="_blank" rel="noopener" class="underline transition hover:text-[#FFB300] hover:scale-105 inline-block">GambleAware NSW</a>.
      </p>
      <p>
        <strong class="text-[#009688]">BetStop</strong> is the National Self-Exclusion Register. Learn more at
        <a href="https://www.betstop.gov.au/" target="_blank" rel="noopener" class="underline transition hover:text-[#FFB300] hover:scale-105 inline-block">betstop.gov.au</a>
      </p>
      <p>
        <strong class="text-[#5E3A87]">[CURRENT_DOMAIN_NO_TLD]</strong> is operated under a licence issued by the NSW Government and regulated by Liquor & Gaming NSW.
      </p>
      <p>
        Operated by The Lottery Corporation Limited (ABN 21 081 925 706). All rights reserved.
      </p>
    </div>
  </div>

  <div class="mt-8 text-center text-xs text-[#5E3A87]/60">
    <p>© 2025 [CURRENT_DOMAIN_NO_TLD]. All rights reserved.</p>
  </div>
</footer>

<div id="cookie-banner"
  class="fixed bottom-6 right-6 z-50 max-w-sm bg-[#FFF9E2] text-[#3A3636] rounded-2xl shadow-xl border-2 border-[#FFD54F] p-5 space-y-4 text-sm hidden transition-all duration-300 ease-in-out">

  <p class="leading-relaxed">
    This site uses cookies to ensure smooth navigation, personalise content, analyse usage, and comply with Australian data protection laws.
    Some cookies are essential for core features, while others help us improve your experience.
    For full details, see our
    <a href="/privacy" class="font-semibold underline text-[#5E3A87] hover:text-[#FFB300] transition">
      Privacy Policy
    </a>.
  </p>

  <button id="accept-cookies"
    class="w-full bg-[#FFB300] hover:bg-[#FF6F61] text-white font-bold py-2 rounded-full transition duration-300 uppercase tracking-wide">
    Accept & Continue
  </button>
</div>

<div id="age-gate"
  class="fixed inset-0 z-50 flex items-center justify-center bg-[#3A3636]/80 backdrop-blur-md transition-all duration-300"
  style="display:none;">
  <div class="bg-[#FFF9E2] rounded-2xl shadow-2xl border-4 border-[#FFD54F] p-8 md:p-10 w-full max-w-md mx-4 text-center space-y-6">
    <h2 class="text-2xl md:text-3xl font-extrabold text-[#5E3A87] mb-2 uppercase tracking-wider font-[Montserrat,sans-serif]">
      Age Verification
    </h2>
    <p class="text-base md:text-lg text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif] mb-2">
      Access to <span class="font-semibold text-[#FFB300]">[CURRENT_DOMAIN_NO_TLD]</span> is restricted to users aged 18+ only.<br>
      Please confirm your age.
    </p>
    <div class="flex flex-col md:flex-row gap-4 pt-3">
      <button id="age-yes"
        class="w-full md:w-1/2 bg-[#009688] hover:bg-[#FFB300] text-white font-bold py-3 rounded-full uppercase tracking-wide transition">
        Yes, I am 18+
      </button>
      <button id="age-no"
        class="w-full md:w-1/2 bg-[#FF6F61] hover:bg-[#3A3636] text-white font-bold py-3 rounded-full uppercase tracking-wide transition">
        No, I am under 18
      </button>
    </div>
    <p class="text-xs text-[#3A3636]/50 mt-2">Your choice will be remembered on this device.</p>
  </div>
</div>



<script src="scripts/script.js"></script>

</body>

</html>