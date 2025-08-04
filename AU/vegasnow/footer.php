<footer id="footer" class="bg-[#0A0A0A] text-[#B7BDC6] border-t border-[#1D1235] pt-16 pb-24 font-['Inter']">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-20">

    <div class="bg-[#1D1235] border border-[#3A1C71] px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-12 text-sm rounded-2xl">
      
      <div class="space-y-4 text-left">
        <h3 class="text-base font-bold uppercase text-[#FFD700] font-['Playfair_Display']">Explore</h3>
        <ul class="space-y-1">
          <li><a href="/#about" class="hover:text-[#FF2D95] transition">About</a></li>
          <li><a href="/#faq" class="hover:text-[#FF2D95] transition">Help</a></li>
          <li><a href="/#review" class="hover:text-[#FF2D95] transition">Wins</a></li>
          <li><a href="/contact" class="hover:text-[#FF2D95] transition">Support</a></li>
        </ul>
      </div>

      <div class="space-y-4 text-center">
        <h3 class="text-base font-bold uppercase text-[#FFD700] font-['Playfair_Display']">Support</h3>
        <p>Call <a href="tel:1800858858" class="text-[#FF2D95] underline">1800 858 858</a></p>
        <p class="text-xs text-[#B7BDC6]/70">For Australian residents 18+ only</p>
      </div>

      <div class="space-y-4 text-right">
        <h3 class="text-base font-bold uppercase text-[#FFD700] font-['Playfair_Display']">Legal</h3>
        <ul class="space-y-1">
          <li><a href="/responsibleonsible" class="hover:text-[#FF2D95] transition">Responsible Play</a></li>
          <li><a href="/terms" class="hover:text-[#FF2D95] transition">Terms & Conditions</a></li>
          <li><a href="/privacy" class="hover:text-[#FF2D95] transition">Privacy Policy</a></li>
          <li><a href="/cookies" class="hover:text-[#FF2D95] transition">Cookie Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="max-w-5xl mx-auto text-center text-xs leading-relaxed space-y-5 text-[#B7BDC6]/90">
      <p>
        Think! About your choices. Gamble Responsibly. Call <a href="tel:1800858858" class="underline text-[#FF2D95]">1800 858 858</a> or visit
        <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline text-[#FFD700]">gambleaware.nsw.gov.au</a>
      </p>
      <p>
        BetStop is the National Self-Exclusion Register. Learn more at
        <a href="https://www.betstop.gov.au" target="_blank" class="underline text-[#FFD700]">betstop.gov.au</a>
      </p>
      <p>
        [CURRENT_DOMAIN_NO_TLD] is licensed and regulated by the NSW Government. We are committed to safe and responsible gaming.
      </p>
      <p>
        Operated by GAMES AND GAINS PTY LTD (ABN 61 677 975 898). All rights reserved.
      </p>
    </div>

    <div class="w-full h-px bg-[#3A1C71] mt-10"></div>

    <div class="flex flex-col md:flex-row justify-center items-center text-xs mt-6 text-center gap-3">
      <p>© <span id="current-year">2025</span> [CURRENT_DOMAIN_NO_TLD] — All rights reserved</p>
    </div>
  </div>

  <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="fixed bottom-6 right-6 z-50 bg-[#FF2D95] text-[#121212] font-bold w-14 h-14 hover:bg-[#FFD700] transition text-2xl shadow-xl rounded-full border border-[#FF2D95]">
    ↑
  </button>
</footer>

<div id="orderModal" class="fixed flex inset-0 z-50 hidden items-center justify-center bg-black/70 transition-opacity duration-300">
  <div id="orderModalContent" class="bg-[#1D1235] border border-[#3A1C71] shadow-[0_0_30px_#FF2D95] px-6 sm:px-10 py-10 sm:py-12 max-w-md w-full text-center relative rounded-2xl scale-95 opacity-0 transition-all duration-300">

    <button id="closeModalBtn" class="absolute top-4 right-5 text-[#B7BDC6] hover:text-[#FFD700] text-2xl font-bold transition leading-none">
      Х
    </button>

    <h3 class="text-3xl font-extrabold mb-4 text-[#FFD700] uppercase tracking-wider font-['Playfair_Display']">Entry Confirmed</h3>

    <p class="text-base text-[#F3F6F9] mb-6">
      You're officially in the next Australian draw. Thanks for entering!
    </p>

    <div class="text-sm text-left bg-[#121212] px-6 py-5 border border-[#3A1C71] text-[#F3F6F9] space-y-3 rounded-xl">
      <p>A confirmation has been sent to your email or phone.</p>
      <p>Check the <a href="/#results" class="underline text-[#FF2D95] hover:text-[#FFD700]">Results</a> section after the draw.</p>
      <p>Winners will receive a direct notification.</p>
    </div>

    <p class="text-xs text-[#B7BDC6]/70 mt-6 leading-relaxed">
      Need assistance? Call <a href="tel:1800858858" class="underline text-[#FF2D95] hover:text-[#FFD700]">1800 858 858</a> or visit 
      <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline text-[#FF2D95] hover:text-[#FFD700]">gambleaware.nsw.gov.au</a>
    </p>
    
  </div>
</div>


<div id="ageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm">
  <div class="bg-gradient-to-br from-[#1D1235] to-[#121212] text-[#F3F6F9] rounded-2xl px-10 py-12 max-w-md w-full text-center shadow-[0_0_40px_#FF2D95]/50 border border-[#2A2A3B]">

    <h2 class="text-3xl font-extrabold uppercase font-[Orbitron] tracking-wide text-[#FF2D95] mb-6 drop-shadow">
      Age Confirmation
    </h2>

    <p class="text-base leading-relaxed mb-8 text-[#C0C9D7]">
      Access to <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is restricted to individuals aged 18 and over.<br>
      For details, see our 
      <a href="/responsible" class="underline text-[#FFD700] hover:text-[#FF2D95]">Responsible Play Policy</a>.
    </p>

    <div class="flex justify-center gap-4 mb-8">
      <button id="btnOver18"
        class="bg-[#FF2D95] hover:bg-[#FFD700] text-[#121212] font-bold px-6 py-3 rounded-xl uppercase tracking-wide shadow-md transition border border-[#FF2D95]">
        Yes, I’m 18+
      </button>
      <a href="https://www.google.com/"
        class="border border-[#FF2D95] text-[#FF2D95] hover:bg-[#1D1235] hover:text-[#FFD700] px-6 py-3 font-bold rounded-xl uppercase tracking-wide transition shadow-sm">
        Leave Site
      </a>
    </div>

    <div class="text-xs text-[#B7BDC6] border-t border-[#2A2A3B] pt-5 leading-relaxed">
      Make informed choices. Play responsibly.<br>
      Need assistance? Call <a href="tel:1800858858" class="underline text-[#FF2D95] hover:text-[#FFD700]">1800 858 858</a>
      or visit <a href="https://www.gambleaware.nsw.gov.au" target="_blank" rel="noopener noreferrer"
      class="underline text-[#FF2D95] hover:text-[#FFD700]">GambleAware</a>.
    </div>

  </div>
</div>


<div id="cookieBanner" class="fixed bottom-6 inset-x-4 z-50 bg-gradient-to-br from-[#1D1235] to-[#121212] border border-[#2A2A3B] text-[#F3F6F9] px-6 py-6 rounded-2xl shadow-[0_0_30px_rgba(255,45,149,0.2)] backdrop-blur-md">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center gap-6">

    <!-- Left: Message -->
    <div class="flex-1 space-y-3 text-sm md:text-base">
      <p>
        We use cookies to make your experience smoother, protect your data, and ensure the site runs efficiently.
        Learn more in our <a href="/cookies" class="underline text-[#FF2D95] hover:text-[#FFD700]">Cookie Policy</a>.
      </p>
      <p class="text-xs text-[#B7BDC6] leading-snug">
        Think! About your choices. Play responsibly. Visit 
        <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline text-[#FF2D95] hover:text-[#FFD700]">GambleAware</a> or call 
        <a href="tel:1800858858" class="underline text-[#FF2D95] hover:text-[#FFD700]">1800 858 858</a> for free support.
      </p>
    </div>

    <!-- Right: Buttons -->
    <div class="flex flex-wrap justify-end gap-3 shrink-0">
      <button id="acceptCookies"
        class="bg-[#FF2D95] hover:bg-[#FFD700] text-[#121212] font-bold uppercase px-6 py-2 rounded-lg transition shadow-md text-sm">
        Accept All
      </button>
      <button id="rejectCookies"
        class="border border-[#FF2D95] text-[#FF2D95] hover:bg-[#1D1235] hover:text-[#FFD700] font-bold uppercase px-6 py-2 rounded-lg transition shadow-md text-sm">
        Decline
      </button>
    </div>

  </div>
</div>


<script src="scripts/script.js"></script>
</body>

</html>