<footer class="bg-[#F3F3F3] border-t border-[#C0C0C0] py-10 px-4 font-['Inter'] text-sm text-[#4B4B4B]">
  <div class="max-w-6xl mx-auto space-y-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-20 w-auto">
      <nav>
        <ul class="flex flex-wrap gap-6 text-[#A00000] font-medium">
          <li><a href="/?page=offers" class="hover:text-[#ED1C24] transition">Offers</a></li>
          <li><a href="/?page=articles" class="hover:text-[#ED1C24] transition">Insights</a></li>
          <li><a href="/?page=charity" class="hover:text-[#ED1C24] transition">Community</a></li>
          <li><a href="/#feedback" class="hover:text-[#ED1C24] transition">Support</a></li>
        </ul>
      </nav>
    </div>

    <!-- Content -->
    <div class="space-y-4 text-xs leading-relaxed">
  <p>
    <strong>Think! About your choices. Gamble Responsibly.</strong> Call Gambling Help on 
    <a href="tel:1800858858" class="underline hover:text-[#ED1C24]">1800 858 858</a>. 
    GambleAware: 
    <a href="https://www.gambleaware.nsw.gov.au" class="underline hover:text-[#ED1C24]" target="_blank" rel="noopener">gambleaware.nsw.gov.au</a>
  </p>
  <p>
    <strong>BetStop</strong> is the National Self-Exclusion Register. It’s a free service for customers who want to exclude from all online wagering providers. 
    For more information visit 
    <a href="https://www.betstop.gov.au" class="underline hover:text-[#ED1C24]" target="_blank" rel="noopener">betstop.gov.au</a>
  </p>
  <p>
    <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is operated under a licence issued by the New South Wales Government Department and is regulated by The New South Wales Independent Liquor & Gaming NSW. We are committed to Responsible Gambling.
  </p>
  <p>
    Operated by <strong>GAMES AND GAINS PTY LTD</strong> (ABN 61 677 975 898).
  </p>
  <p>
    © 2025 [CURRENT_DOMAIN_NO_TLD]. All rights reserved.
  </p>
</div>


    <!-- Partners -->
    <div class="flex flex-wrap items-center gap-6">
      <a href="#" target="_blank"><img src="img/18pl.webp" alt="18+ Legal Age" class="h-8"></a>
      <a href="https://gamblershelp.com.au/" target="_blank"><img src="img/gamblers.webp" alt="Gamblers Help" class="h-8"></a>
      <a href="https://www.responsiblegambling.vic.gov.au/reset/" target="_blank"><img src="img/reset.webp" alt="Responsible Gambling Program" class="h-8"></a>
      <a href="https://www.gambleaware.nsw.gov.au/" target="_blank"><img src="img/gamble.webp" alt="GambleAware NSW" class="h-8"></a>
    </div>

    <!-- Bottom -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 border-t border-[#C0C0C0] pt-6">
      <nav>
        <ul class="flex gap-6 text-[#2F5233] font-medium">
          <li><a href="/?page=responsible" class="hover:text-[#ED1C24] transition">Responsible Play</a></li>
          <li><a href="/?page=privacy" class="hover:text-[#ED1C24] transition">Privacy Policy</a></li>
          <li><a href="/?page=terms" class="hover:text-[#ED1C24] transition">Terms &amp; Conditions</a></li>
        </ul>
      </nav>
      <div class="text-xs text-[#4B4B4B]">© 2025 [CURRENT_DOMAIN_NO_TLD]. All rights reserved.</div>
    </div>
  </div>
</footer>

<dialog id="modal-login" class="rounded-2xl shadow-2xl w-full max-w-md backdrop:bg-black/40">
  <div class="bg-gradient-to-b from-[#F9F9F6] to-[#FFCC29]/30 border-2 border-[#3E2723] rounded-2xl p-8 relative">
    
    <!-- Close Button -->
    <button onclick="document.getElementById('modal-login').close()" 
      class="absolute top-4 right-4 text-[#C62828] hover:text-[#1E1E1E] text-2xl font-bold">
      X
    </button>

    <!-- Title -->
    <h2 class="text-3xl md:text-4xl font-extrabold uppercase font-['Playfair_Display'] text-[#006943] text-center mb-6">
      Welcome Back
    </h2>

    <!-- Form -->
    <form onsubmit="event.preventDefault(); simulateLogin(this)">
      <div class="space-y-4">
        <input type="email" placeholder="Email Address" required 
          class="w-full px-4 py-3 rounded-lg border border-[#3E2723] focus:outline-none focus:ring-2 focus:ring-[#FFCC29]">
        
        <input type="password" placeholder="Password" required 
          class="w-full px-4 py-3 rounded-lg border border-[#3E2723] focus:outline-none focus:ring-2 focus:ring-[#FFCC29]">
      </div>

      <!-- Submit -->
      <button type="submit" 
        class="mt-6 w-full bg-[#C62828] hover:bg-[#A00000] text-white font-bold py-3 px-6 rounded-lg shadow-md transition flex items-center justify-center gap-2">
        <span class="btn-text">Log In</span>
        <svg class="animate-spin h-5 w-5 text-white hidden btn-spinner" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
        </svg>
      </button>
    </form>
  </div>
</dialog>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var promoSwiper = new Swiper(".promotions-swiper", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 2.2,
        spaceBetween: 24,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
</script>
<script src="scripts/script.js" ></script>
<script src="scripts/slider.js" ></script>
</body>
</html>