<footer class="bg-[#0B0F1A] text-[#C0C9D7] border-t border-[#1C1F2A] pt-16 pb-24 font-sans">
  <div class="max-w-7xl mx-auto px-6 space-y-20">

    <div class="bg-[#121826] border border-[#1C1F2A] px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-12 w-full text-sm">
      
      <div class="space-y-4 text-left">
        <h3 class="text-base font-bold uppercase text-[#00F0FF] font-[Orbitron]">Explore</h3>
        <ul class="space-y-1">
          <li><a href="/#about" class="hover:underline">About</a></li>
          <li><a href="/#faq" class="hover:underline">Help</a></li>
          <li><a href="/#review" class="hover:underline">Wins</a></li>
          <li><a href="/contact" class="hover:underline">Support</a></li>
          <li><a href="/cart" class="hover:underline">Cart</a></li>
        </ul>
      </div>

      <div class="space-y-4 text-center ">
        <h3 class="text-base font-bold uppercase text-[#00F0FF] font-[Orbitron]">Support</h3>
        <p>Call <a href="tel:1800858858" class="underline text-[#FFD700]">1800 858 858</a></p>
        <p class="text-xs text-[#C0C9D7]/70">For Australian residents 18+ only</p>
      </div>

      <div class="space-y-4 text-right">
        <h3 class="text-base font-bold uppercase text-[#00F0FF] font-[Orbitron]">Legal</h3>
        <ul class="space-y-1">
          <li><a href="/responsible" class="hover:underline">Responsible Play</a></li>
          <li><a href="/terms" class="hover:underline">Terms & Conditions</a></li>
          <li><a href="/privacy" class="hover:underline">Privacy Policy</a></li>
          <li><a href="/cookies" class="hover:underline">Cookie Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="max-w-5xl mx-auto text-center text-xs leading-relaxed space-y-5 text-[#C0C9D7]/90">
      <p>
        Think! About your choices. Gamble Responsibly. Call <a href="tel:1800858858" class="underline text-[#00F0FF]">1800 858 858</a> or visit
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
        Operated by The Lottery Corporation Limited (ABN 21 081 925 706). Powerball logo © The Lottery Corporation Limited.
      </p>
    </div>

    <div class="w-full h-px bg-[#1C1F2A] mt-10"></div>

    <div class="flex flex-col md:flex-row justify-center items-center text-xs mt-6 text-center gap-3">
      <p>© <span id="current-year">2025</span> [CURRENT_DOMAIN_NO_TLD] — All rights reserved</p>
    </div>
  </div>

  <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="fixed bottom-6 right-6 z-50 bg-[#00F0FF] text-[#0B0F1A] font-bold w-14 h-14 hover:bg-[#26D6BA] transition text-2xl shadow-lg border border-[#00F0FF]">
    ↑
  </button>
</footer>


<div id="orderModal"
  class="flex fixed inset-0 z-50 hidden items-center justify-center bg-black/70 transition-opacity duration-300">
  <div id="orderModalContent"
    class="bg-[#121826] px-10 py-12 shadow-[0_0_20px_#00F0FF] max-w-md w-full text-center relative border border-[#1C1F2A] scale-95 opacity-0 transition-all duration-300">

    <button id="closeModalBtn"
      class="absolute top-4 right-5 text-[#C0C9D7] hover:text-[#00F0FF] text-2xl font-bold transition leading-none">
      X
    </button>

    <h3 class="text-3xl font-extrabold mb-4 text-[#FFD700] uppercase font-[Orbitron] tracking-wider">You're In!</h3>

    <p class="text-base text-[#C0C9D7] mb-6">
      Entry confirmed. You're locked into the next Aussie draw.
    </p>

    <div class="text-sm text-left bg-[#0B0F1A] px-6 py-5 border border-[#2A2F3C] text-[#C0C9D7] space-y-3">
      <p>Email/SMS confirmation sent.</p>
      <p>Check <a href="/#results" class="underline text-[#00F0FF] hover:text-[#FFD700]">Results</a> after the draw.</p>
      <p>Winners will be contacted directly.</p>
    </div>

    <p class="text-xs text-[#C0C9D7]/70 mt-6 leading-relaxed">
      Need help? Call <a href="tel:1800858858" class="underline text-[#00F0FF] hover:text-[#FFD700]">1800 858 858</a> or visit
      <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline text-[#00F0FF] hover:text-[#FFD700]">gambleaware.nsw.gov.au</a>
    </p>
  </div>
</div>

<div id="ageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/70">
  <div class="bg-[#121826] text-[#C0C9D7] rounded-[0px] px-10 py-12 max-w-md w-full text-center shadow-[0_0_20px_#00F0FF] border border-[#1C1F2A]">

    <h2 class="text-2xl font-extrabold text-[#FFD700] uppercase font-[Orbitron] mb-6 tracking-wide">
      Age Check
    </h2>

    <p class="text-base leading-relaxed mb-8">
      You must be 18+ to enter.<br>
      Read our <a href="/resp" class="underline text-[#00F0FF] hover:text-[#FFD700]">Responsible Play Policy</a>.
    </p>

    <div class="flex justify-center gap-4">
      <button id="btnOver18"
        class="bg-[#00F0FF] hover:bg-[#26D6BA] text-[#0B0F1A] font-bold px-6 py-3 transition border border-[#00F0FF]">
        I’m 18+
      </button>
      <a href="/resp"
        class="border border-[#00F0FF] text-[#00F0FF] hover:bg-[#1C1F2A] px-6 py-3 font-bold transition">
        No, Exit
      </a>
    </div>

  </div>
</div>

<div id="cookieBanner" class="fixed bottom-0 inset-x-0 z-50 bg-[#121826] border-t border-[#1C1F2A] text-[#C0C9D7] px-6 py-5 sm:py-6 text-sm md:text-base shadow-lg">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-left">

    <div>
      <p class="leading-snug">
        This site uses cookies to enhance security, improve performance, and offer a more tailored experience.
        You’re always in control. See our <a href="/cookies" class="underline text-[#00F0FF] hover:text-[#FFD700]">Cookie Policy</a> for full details.
      </p>
    </div>

    <div class="flex flex-wrap justify-center sm:justify-end gap-3">
      <button id="acceptCookies" class="px-6 py-2 font-semibold bg-[#00F0FF] text-[#0B0F1A] hover:bg-[#26D6BA] transition uppercase">
        Accept All
      </button>
      <button id="rejectCookies" class="px-6 py-2 font-semibold border-2 border-[#00F0FF] text-[#00F0FF] hover:bg-[#0B0F1A] transition uppercase">
        Reject
      </button>
    </div>

  </div>
</div>




<script src="scripts/script.js"></script>
<script src="scripts/cart.js"></script>
</body>

</html>