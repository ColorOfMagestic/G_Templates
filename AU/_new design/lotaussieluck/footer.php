<footer class="w-full bg-gradient-to-br from-[#186A3B] to-[#11092a] text-[#F7F8FA] text-sm pt-8 px-2 sm:px-4 pb-2">
  <div class="max-w-screen-xl mx-auto flex flex-col gap-6">
    <!-- Top nav -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 sm:gap-8 w-full">
      <div class="flex items-center gap-3 min-w-[90px]">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo"
          class="w-16 h-16 sm:w-20 sm:h-20 md:w-28 md:h-28 object-contain">
      </div>
      <div class="flex flex-1 flex-col sm:flex-row gap-6 sm:gap-12 text-xl font-semibold">
        <div>
          <span class="font-bold text-white text-base">Navigation</span>
          <div class="flex flex-wrap gap-x-4 gap-y-4 mt-1">
            <a href="/#how-it-works" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">How it works</a>
            <a href="/#about" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">About us</a>
            <a href="/#faq" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">FAQ</a>
            <a href="/#responsible-play" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Responsible play</a>
            <a href="/contact" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Contact</a>
          </div>
        </div>
        <div>
          <span class="font-bold text-white text-base">Legal & Policies</span>
          <div class="flex flex-wrap gap-x-4 gap-y-1 mt-1">
            <a href="/privacy" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Privacy Policy</a>
            <a href="/terms" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Terms & Conditions</a>
            <a href="/responsible" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Responsible Gambling</a>
            <a href="/cookies" class="text-[#F7F8FA] text-sm hover:text-[#C9FF00] transition">Cookie Policy</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Legal Info -->
    <div class="w-full py-4">
      <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row gap-6 text-[#B7BDC6] text-base leading-relaxed">
        <div class="w-full md:w-1/4">
          [CURRENT_DOMAIN_NO_TLD] is an Australian-operated lottery service providing safe access to official draws for eligible adults nationwide. We prioritise transparency, data privacy, and always promote responsible play.
        </div>
        <div class="w-full md:w-3/4">
          Think! About your choices. Gamble Responsibly. Call Gambling Help on 1800 858 858.<br>
          GambleAware <a href="https://www.gambleaware.nsw.gov.au/"
            class="underline text-[#C9FF00] hover:text-[#FFD700]">gambleaware.nsw.gov.au</a><br>
          BetStop is the National Self-Exclusion Register. It’s a free service for customers who want to exclude from
          all online wagering providers. For more information visit <a href="https://www.betstop.gov.au/"
            class="underline text-[#C9FF00] hover:text-[#FFD700]">betstop.gov.au</a>.<br>
          [CURRENT_DOMAIN_NO_TLD] is operated under a licence issued by the New South Wales Government Department and is
          regulated by The New South Wales Independent Liquor & Gaming NSW. We are committed to Responsible
          Gambling.<br>
          All rights reserved. Only for people over the age of 18.
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-[#B7BDC6] text-xs mt-2">
      &copy; 2025 [CURRENT_DOMAIN_NO_TLD] — All Rights Reserved<br>
      Strictly 18+ participation. Please play responsibly. For help visit
      <a href="https://www.gambleaware.nsw.gov.au/"
        class="underline text-[#C9FF00] hover:text-[#FFD700]">gambleaware.nsw.gov.au</a>
    </div>
  </div>
</footer>

<div id="age-gate-modal"
  class="fixed inset-0 z-50 bg-black bg-opacity-80 flex items-center justify-center transition-all duration-300">
  <div class="bg-white rounded-xl shadow-xl p-8 max-w-xs w-full flex flex-col items-center text-center">
    <h2 class="text-2xl font-bold mb-2 text-[#186A3B]">Age Confirmation</h2>
    <p class="mb-6 text-[#23272F]">
      To access [CURRENT_DOMAIN_NO_TLD], you must confirm you’re at least 18 years old.<br>
      Please select your age below.
    </p>
    <div class="w-full flex flex-col gap-3">
      <button id="age-yes"
        class="bg-[#186A3B] hover:bg-[#FFD700] text-white hover:text-[#23272F] font-semibold rounded-md py-3 transition">
        Yes, I am 18 or over
      </button>
      <button id="age-no"
        class="bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] font-semibold rounded-md py-3 transition">
        No, I am under 18
      </button>
    </div>
    <p class="mt-5 text-xs text-[#7D6A55]">
      This site is strictly for adults. We support responsible participation and verify all users.
    </p>
  </div>
</div>

<div id="cookie-banner"
  class="fixed left-4 bottom-4 z-50 max-w-xs w-[92vw] bg-[#FFD700] text-[#23272F] rounded-xl shadow-xl p-4 flex items-center gap-4 border-2 border-[#186A3B] animate-bounce-in">
  <svg class="w-7 h-7 flex-shrink-0 text-[#FF3D3D] mr-2" fill="none" stroke="currentColor" stroke-width="2"
    viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10" stroke="currentColor" fill="#fff5"></circle>
    <circle cx="12" cy="12" r="4" fill="#FF3D3D" />
    <circle cx="9" cy="10" r="1.2" fill="#FF3D3D" />
    <circle cx="15" cy="14" r="1" fill="#FF3D3D" />
    <circle cx="14" cy="9" r="0.7" fill="#FF3D3D" />
  </svg>
  <div class="flex-1">
    <div class="font-semibold mb-1">Cookies make it easier!</div>
    <div class="text-sm">
      We use cookies to keep your lottery experience smooth, secure and reliable. You’re always in control. 
      <a href="/cookies" class="underline text-[#186A3B] hover:text-[#FF3D3D]">More info</a>
    </div>
    <button id="cookie-accept"
      class="mt-3 bg-[#186A3B] hover:bg-[#FF3D3D] text-white font-bold px-5 py-2 rounded-md transition">Accept</button>
  </div>
</div>

<div id="auth-modal" class="fixed inset-0 z-50 bg-black bg-opacity-70 flex items-center justify-center hidden">
  <div class="bg-white rounded-2xl overflow-hidden shadow-2xl w-full max-w-4xl flex flex-col md:flex-row h-[600px] max-h-[95vh]">
    
    <div class="relative hidden md:flex flex-col items-center justify-center w-2/5 min-w-[240px] h-full bg-cover bg-center bg-no-repeat"
         style="background-image: url('img/login-bg.webp'); background-color: #161D34;">
    </div>
    
    <div class="flex-1 flex flex-col p-6 sm:p-10 bg-white relative h-full">
      <button id="close-modal" type="button"
        class="absolute right-6 top-5 text-[#B7BDC6] text-2xl hover:text-[#FF3D3D] z-10 leading-none focus:outline-none transition-all">&times;</button>
      <div class="flex gap-2 mb-8 text-xl font-bold select-none">
        <button id="tab-login" type="button"
          class="pb-1 px-2 border-b-2 transition border-[#FF3D3D] text-[#FF3D3D]">Sign in</button>
        <span class="text-[#B7BDC6]">/</span>
        <button id="tab-signup" type="button"
          class="pb-1 px-2 border-b-2 border-transparent text-[#B7BDC6] hover:text-[#FF3D3D]">Create account</button>
      </div>
      <div class="flex-1 overflow-y-auto pr-1">
        <!-- Login -->
        <form id="form-login" class="flex flex-col gap-5">
          <p class="text-[#7D6A55] text-base">
            Sign in to access your tickets, check results, and manage your balance — all under Australian law and privacy standards.
          </p>
          <input type="text" placeholder="Email or nickname" required
            class="w-full px-4 py-3 rounded-md border border-[#ECE1C6] focus:border-[#186A3B] outline-none bg-[#F9F4E6] text-[#23272F] text-base" />
          <div class="relative">
            <input type="password" placeholder="Password" required
              class="w-full px-4 py-3 rounded-md border border-[#ECE1C6] focus:border-[#186A3B] outline-none bg-[#F9F4E6] text-[#23272F] text-base pr-12" />
            <button type="button" tabindex="-1"
              class="absolute right-4 top-1/2 -translate-y-1/2 text-[#B7BDC6] hover:text-[#186A3B]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
            </button>
          </div>
          <div class="flex items-center gap-2 text-sm">
            <input type="checkbox" id="accept-login" required class="accent-[#C9FF00] w-4 h-4">
            <label for="accept-login" class="text-[#23272F]">I accept the <a href="#privacy"
                class="underline text-[#186A3B] hover:text-[#FF3D3D]">Privacy Policy</a> and consent to data use under Australian law.</label>
          </div>
          <button type="submit"
            class="bg-[#C9FF00] hover:bg-[#186A3B] text-[#23272F] hover:text-white font-extrabold text-lg rounded-md py-3 transition w-full">Sign in</button>
          <div class="text-center text-[#B7BDC6] mt-2">
            New here?
            <button type="button" id="to-signup" class="text-[#FF3D3D] hover:underline ml-1">Create account</button>
          </div>
        </form>
        <!-- Sign up -->
        <form id="form-signup" class="flex flex-col gap-5 hidden">
          <p class="text-[#7D6A55] text-base">
            Register free to play, follow results, and enjoy exclusive features. For Australians aged 18+ only.
          </p>
          <input type="email" placeholder="Email" required
            class="w-full px-4 py-3 rounded-md border border-[#ECE1C6] focus:border-[#186A3B] outline-none bg-[#F9F4E6] text-[#23272F] text-base" />
          <input type="text" placeholder="Choose a nickname" required
            class="w-full px-4 py-3 rounded-md border border-[#ECE1C6] focus:border-[#186A3B] outline-none bg-[#F9F4E6] text-[#23272F] text-base" />
          <div class="relative">
            <input type="password" placeholder="Password" required
              class="w-full px-4 py-3 rounded-md border border-[#ECE1C6] focus:border-[#186A3B] outline-none bg-[#F9F4E6] text-[#23272F] text-base pr-12" />
            <button type="button" tabindex="-1"
              class="absolute right-4 top-1/2 -translate-y-1/2 text-[#B7BDC6] hover:text-[#186A3B]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
            </button>
          </div>
          <div class="flex items-center gap-2 text-sm">
            <input type="checkbox" id="accept-signup" required class="accent-[#C9FF00] w-4 h-4">
            <label for="accept-signup" class="text-[#23272F]">I accept the <a href="#privacy"
                class="underline text-[#186A3B] hover:text-[#FF3D3D]">Privacy Policy</a> and consent to data use under Australian law.</label>
          </div>
          <button type="submit"
            class="bg-[#C9FF00] hover:bg-[#186A3B] text-[#23272F] hover:text-white font-extrabold text-lg rounded-md py-3 transition w-full">Create account</button>
          <div class="text-center text-[#B7BDC6] mt-2">
            Already a member?
            <button type="button" id="to-login"
              class="text-[#FF3D3D] hover:underline ml-1">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="auth-success" class="fixed inset-0 z-50 bg-[#186A3B]/90 flex items-center justify-center transition-all duration-300 hidden">
  <div class="bg-white text-[#186A3B] rounded-2xl shadow-2xl border-4 border-[#FFD700] px-8 py-10 flex flex-col items-center max-w-md w-full">
    <svg class="w-16 h-16 mb-5 text-[#FFD700] animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
      <circle cx="24" cy="24" r="22" stroke="#FFD700" fill="#FFD700" opacity="0.12"/>
      <path stroke="#FFD700" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M14 25l7 7 13-13"/>
    </svg>
    <div class="text-2xl md:text-3xl font-extrabold text-[#186A3B] text-center mb-2">Welcome aboard!</div>
    <div class="text-[#5A4A3F] text-lg md:text-xl text-center">
      Your account is all set.<br>
      We've sent confirmation to your email — check your inbox for details.
    </div>
  </div>
</div>

<script src="scripts/script.js"></script>
</body>

</html>