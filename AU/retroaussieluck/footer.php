<footer id="footer" class="bg-[#4E342E] text-[#F5F5DC] pt-20 pb-10 px-6 font-['Nunito'] text-sm tracking-wide">
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 border-b border-[#6D4C41] pb-10">

    <div class="space-y-4">
      <h2 class="text-2xl font-extrabold uppercase tracking-widest font-['Playfair_Display'] text-[#FFF8E1]">
        [CURRENT_DOMAIN_NO_TLD]
      </h2>
      <p class="text-[#D7CCC8] leading-relaxed">
        The people’s lottery. Proudly licensed & operated in Australia. Local. Legal. Transparent.
      </p>
      <p class="text-xs italic text-[#BCAAA4]">Established under New South Wales legislation</p>
    </div>

    <div class="space-y-4">
      <h3 class="text-base font-bold uppercase text-[#FFF8E1] border-b border-[#795548] pb-1">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="/#how" class="hover:underline hover:text-[#FBC02D]">How It Works</a></li>
        <li><a href="/#winners" class="hover:underline hover:text-[#FBC02D]">Latest Winners</a></li>
        <li><a href="/responsible" class="hover:underline hover:text-[#FBC02D]">Play Responsibly</a></li>
        <li><a href="/terms" class="hover:underline hover:text-[#FBC02D]">Terms of Use</a></li>
        <li><a href="/privacy" class="hover:underline hover:text-[#FBC02D]">Privacy Policy</a></li>
      </ul>
    </div>

    <div class="space-y-4">
      <h3 class="text-base font-bold uppercase text-[#FFF8E1] border-b border-[#795548] pb-1">Contact & Support</h3>
      <p>Email: <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD]" class="underline hover:text-[#FBC02D]">support@[CURRENT_DOMAIN_NO_TLD]</a></p>
      <p>Phone: <span class="font-semibold">+61 2 8012 4468</span></p>
      <p>Hours: Mon–Fri, 9:00–17:00 AEST</p>
      <p>Address: Level 3, 111 Market St, Sydney, NSW</p>
    </div>

  </div>

  <div class="max-w-7xl mx-auto mt-10 space-y-5 text-[#D7CCC8] text-xs leading-relaxed">
    <p>
      Think! About your choices. Gamble Responsibly. Call Gambling Help on <a href="tel:1800858858" class="underline hover:text-[#FBC02D]">1800 858 858</a>. GambleAware <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline hover:text-[#FBC02D]">gambleaware.nsw.gov.au</a>
    </p>
    <p>
      BetStop is the National Self-Exclusion Register. It’s a free service for customers who want to exclude from all online wagering providers. For more information visit <a href="https://www.betstop.gov.au" target="_blank" class="underline hover:text-[#FBC02D]">betstop.gov.au</a>
    </p>
    <p>
      [CURRENT_DOMAIN_NO_TLD] is operated under a licence issued by the New South Wales Government Department and is regulated by The New South Wales Independent Liquor & Gaming NSW. We are committed to Responsible Gambling
    </p>
    <p>
      Operated by The Lottery Corporation Limited (ABN 21 081 925 706). The Powerball logo is a trade mark of The Lottery Corporation Limited. All rights reserved.
    </p>
  </div>

  <div class="text-center text-[#A1887F] text-xs mt-8">
    Printed & published by [CURRENT_DOMAIN_NO_TLD] – Your local source for secure lottery access.
  </div>

  <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="fixed bottom-6 right-6 z-50 bg-[#FBC02D] text-[#212121] font-bold w-12 h-12 hover:bg-[#F9A825] transition text-lg shadow-xl rounded-full border border-[#212121]">
    ↑
  </button>
</footer>

<div id="cookieBanner" role="alert" aria-live="polite"
  class="fixed bottom-6 right-6 z-50 w-[90%] sm:w-[360px] bg-[#4E342E] text-[#FFF8E1] border border-[#6D4C41] rounded-xl shadow-2xl px-5 py-6 text-sm font-['Nunito'] space-y-4">

  <p class="text-base font-extrabold uppercase tracking-widest font-['Playfair_Display']">We Respect Your Privacy</p>
  
  <p class="text-[#D7CCC8] leading-relaxed text-[13px]">
    [CURRENT_DOMAIN_NO_TLD] uses cookies to keep things running smoothly, remember your settings, and help us improve anonymously.
    Learn more in our 
    <a href="/cookies" class="underline text-[#FBC02D] hover:text-white">Cookie Policy</a>.
  </p>

  <div class="flex justify-end pt-2">
    <button id="acceptCookies"
      class="px-5 py-2 text-xs uppercase font-bold bg-[#FBC02D] text-[#212121] rounded hover:bg-[#FFD54F] transition">
      Accept & Continue
    </button>
  </div>
</div>

<!-- Login Modal -->
<div id="modal-login" class="fixed flex inset-0 z-50 hidden items-center justify-center bg-black/70 px-4 py-8 font-['Nunito']" role="dialog" aria-modal="true" aria-labelledby="loginModalTitle">
  <div class="relative w-full max-w-md bg-[#FFF8E1] text-[#212121] border-2 border-[#2E7D32] shadow-2xl p-8 rounded-xl tracking-wide">

    <button class="absolute top-4 right-4 text-[#C62828] hover:text-[#2E7D32] text-xl font-bold transition" data-modal-close aria-label="Close">
      ✕
    </button>

    <h2 id="loginModalTitle" class="text-3xl font-['Playfair_Display'] uppercase text-center font-extrabold text-[#2E7D32] mb-6">
      Secure Sign-In
    </h2>

    <form class="space-y-5">
      <input type="email" placeholder="Email Address" required
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <input type="password" placeholder="Password" required
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <div class="text-right text-xs">
        <a href="/forgot" class="text-[#2E7D32] hover:underline">Need help logging in?</a>
      </div>

      <button type="submit" data-modal-open="thanks"
        class="w-full bg-[#212121] text-[#FFF8E1] hover:bg-[#2E7D32] hover:text-white font-bold py-3 uppercase text-sm rounded-md tracking-wider transition">
        Access My Account
      </button>
    </form>

    <p class="mt-6 text-[11px] text-center text-[#757575] leading-relaxed">
      By signing in, you confirm you’re over 18 and agree to our<br>
      <a href="/terms" class="underline hover:text-[#2E7D32]">Terms of Use</a> & <a href="/privacy" class="underline hover:text-[#2E7D32]">Privacy Policy</a>.
    </p>

  </div>
</div>

<!-- Registration Modal -->
<div id="modal-register" class="fixed flex inset-0 z-50 hidden items-center justify-center bg-black/70 px-4 py-8 font-['Nunito']" role="dialog" aria-modal="true" aria-labelledby="registerModalTitle">
  <div class="relative w-full max-w-md bg-[#FFF8E1] text-[#212121] border-2 border-[#2E7D32] shadow-2xl p-8 rounded-xl tracking-wide">

    <button class="absolute top-4 right-4 text-[#C62828] hover:text-[#2E7D32] text-xl font-bold transition" data-modal-close aria-label="Close">
      ✕
    </button>

    <h2 id="registerModalTitle" class="text-3xl font-['Playfair_Display'] uppercase text-center font-extrabold text-[#2E7D32] mb-6">
      Join the Draw
    </h2>

    <form class="space-y-4" autocomplete="off">
      <input type="text" name="fullname" placeholder="Full Name" required autocomplete="name"
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <input type="email" name="email" placeholder="Email Address" required autocomplete="email"
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <input type="tel" name="phone" placeholder="Phone (Optional)" autocomplete="tel"
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <input type="password" name="password" placeholder="Create a Password" required autocomplete="new-password"
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <input type="password" name="confirm-password" placeholder="Confirm Password" required autocomplete="new-password"
        class="w-full px-5 py-3 bg-white border border-[#BDBDBD] text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#C62828]">

      <label class="flex items-start gap-3 text-sm text-[#424242] leading-tight">
        <input type="checkbox" required class="mt-1 accent-[#2E7D32]">
        <span>
          I confirm I'm 18 or over and accept the 
          <a href="/terms" class="underline text-[#2E7D32] hover:text-[#C62828]">Terms</a> and 
          <a href="/privacy" class="underline text-[#2E7D32] hover:text-[#C62828]">Privacy Policy</a>.
        </span>
      </label>

      <button type="submit" data-modal-open="thanks"
        class="w-full bg-[#212121] text-[#FFF8E1] hover:bg-[#2E7D32] hover:text-white font-bold py-3 uppercase text-sm rounded-md tracking-wider transition">
        Register Now
      </button>
    </form>

    <p class="mt-6 text-[11px] text-center text-[#757575] leading-relaxed">
      We follow Aussie privacy standards and never share your details with third parties. Play smart. Stay safe.
    </p>
  </div>
</div>

<div id="modal-thanks" class="fixed flex inset-0 z-50 hidden items-center justify-center bg-black/70 px-4 py-8" role="dialog" aria-modal="true" aria-labelledby="thanksModalTitle">
  <div class="relative w-full max-w-md bg-[#FFF8E1] border-2 border-[#2E7D32] text-[#212121] p-8 rounded-xl shadow-2xl text-center font-['Nunito']">

    <button class="absolute top-4 right-4 text-[#C62828] hover:text-[#2E7D32] text-xl font-bold transition" data-modal-close aria-label="Close">
      ✕
    </button>

    <h2 id="thanksModalTitle" class="text-3xl font-['Playfair_Display'] font-extrabold uppercase text-[#2E7D32] tracking-wide mb-4">
      You’re In the Draw!
    </h2>

    <p class="text-sm md:text-base text-[#424242] leading-relaxed">
      Cheers for signing up with <strong>[CURRENT_DOMAIN_NO_TLD]</strong>.<br>
      Hit your inbox to verify your email — and you’ll be ready to join real Aussie lottery action, safely and securely.
    </p>

    <button data-modal-close
      class="mt-6 bg-[#212121] text-[#FFF8E1] hover:bg-[#2E7D32] hover:text-white font-bold px-6 py-3 text-sm uppercase tracking-wider rounded-md transition">
      Back to Site
    </button>

  </div>
</div>


<script src="scripts/script.js"></script>
</body>

</html>