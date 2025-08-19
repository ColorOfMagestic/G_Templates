<footer id="12footer" class="bg-[#0B0B0B] text-[#EAEAEA] py-14 px-6 border-t border-[#111214]">
  <div class="max-w-7xl mx-auto space-y-12">

    <!-- Top: Logo & Nav -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">
  <div class="flex items-center gap-3">
    <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-16 w-auto">
    <span class="font-['Bebas_Neue'] text-2xl tracking-wide">[CURRENT_DOMAIN_NO_TLD]</span>
  </div>
  <nav class="flex flex-wrap gap-6 text-sm uppercase tracking-wide">
    <a href="/#4how" class="hover:text-[#00A3FF] transition">How It Works</a>
    <a href="/#6results" class="hover:text-[#00A3FF] transition">Latest Results</a>
    <a href="/responsible" class="hover:text-[#00A3FF] transition">Play Responsibly</a>
    <a href="/#11contact" class="hover:text-[#00A3FF] transition">Get in Touch</a>
  </nav>
</div>

    <!-- Bottom: Legal & Responsible Text -->
    <div class="space-y-5 text-xs md:text-sm leading-relaxed text-gray-400">
      <p>
        Think! About your choices. Gamble Responsibly. Call Gambling Help on 
        <a href="tel:1800858858" class="underline hover:text-[#00A3FF]">1800 858 858</a>. 
        GambleAware 
        <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">gambleaware.nsw.gov.au</a>
      </p>
      <p>
        BetStop is the National Self-Exclusion Register. It’s a free service for customers who want to exclude from all online wagering providers. 
        For more information visit 
        <a href="https://www.betstop.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">betstop.gov.au</a>
      </p>
      <p>
        [CURRENT_DOMAIN_NO_TLD] is operated under a licence issued by the New South Wales Government Department and is regulated by The New South Wales Independent Liquor & Gaming NSW. 
        We are committed to Responsible Gambling.
      </p>
      <p>
        Operated by The Lottery Corporation Limited (ABN 21 081 925 706). 
        The Powerball logo is a trade mark of The Lottery Corporation Limited. All rights reserved.
      </p>
    </div>

    <!-- Copy -->
    <div class="pt-6 text-xs text-gray-500 border-t border-gray-800">
      © <span id="year"></span> [CURRENT_DOMAIN_NO_TLD]. All rights reserved.
    </div>

  </div>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</footer>


<div id="cookieBanner" role="alert" aria-live="polite"
  class="fixed bottom-6 left-6 z-50 w-[95%] sm:w-[400px] bg-[#111214] text-[#EAEAEA] border border-[#D1D5DB] rounded-xl shadow-2xl px-6 py-8 text-sm font-['Nunito'] space-y-5">

  <p class="text-lg font-extrabold uppercase tracking-widest font-['Playfair_Display']">We Respect Your Privacy</p>
  
  <p class="text-[#9CA3AF] leading-relaxed text-[14px]">
    [CURRENT_DOMAIN_NO_TLD] uses cookies to keep things running smoothly, remember your preferences, and improve the experience anonymously.
    Learn more in our 
    <a href="/cookies" class="underline text-[#00A3FF] hover:text-white transition">Cookie Policy</a>.
  </p>

  <div class="flex justify-start pt-3">
    <button id="acceptCookies"
      class="px-6 py-3 text-xs uppercase font-bold bg-[#00A3FF] text-[#0B0B0B] rounded-lg hover:bg-[#1EBBFF] transition">
      Accept & Continue
    </button>
  </div>
</div>

<!-- Login Modal -->
<div id="modal-login" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/70 px-4 py-8 font-['Nunito']" role="dialog" aria-modal="true" aria-labelledby="loginModalTitle">
  <div class="relative w-full max-w-2xl bg-[#111214] text-[#EAEAEA] border border-[#D1D5DB] shadow-2xl p-10 rounded-[22px] tracking-wide" style="box-shadow:0 0 25px rgba(0,163,255,0.3) inset;">

    <!-- Close Button -->
    <button class="absolute top-5 right-5 text-[#9CA3AF] hover:text-[#00A3FF] text-2xl font-bold transition" data-modal-close aria-label="Close">
      ✕
    </button>

    <!-- Title -->
    <h2 id="loginModalTitle" class="text-4xl md:text-5xl font-['Bebas_Neue'] uppercase text-center mb-8 tracking-widest" style="background:linear-gradient(90deg,#00A3FF,#1EBBFF);-webkit-background-clip:text;color:transparent;">
      Secure Sign-In
    </h2>

    <!-- Form -->
    <form class="space-y-6">
      <input type="email" placeholder="Email Address" required
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <input type="password" placeholder="Password" required
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <div class="text-right text-xs">
        <a href="/forgot" class="text-[#00A3FF] hover:underline">Need help logging in?</a>
      </div>

      <button type="submit" data-modal-open="thanks"
        class="w-full bg-[#00A3FF] text-[#0B0B0B] font-bold py-4 uppercase text-sm rounded-lg tracking-wider transition" style="transition:transform 0.15s ease;box-shadow:0 4px 10px rgba(0,163,255,0.4);" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
        Access My Account
      </button>
    </form>

    <!-- Footer Note -->
    <p class="mt-6 text-[12px] text-center text-[#9CA3AF] leading-relaxed">
      By signing in, you confirm you’re over 18 and agree to our<br>
      <a href="/terms" class="underline hover:text-white">Terms of Use</a> & <a href="/privacy" class="underline hover:text-white">Privacy Policy</a>.
    </p>
  </div>
</div>

<!-- Registration Modal -->
<div id="modal-register" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/70 px-4 py-8 font-['Nunito']" role="dialog" aria-modal="true" aria-labelledby="registerModalTitle">
  <div class="relative w-full max-w-2xl bg-[#111214] text-[#EAEAEA] border border-[#D1D5DB] shadow-2xl p-10 rounded-[22px] tracking-wide" style="box-shadow:0 0 25px rgba(0,163,255,0.3) inset;">

    <!-- Close Button -->
    <button class="absolute top-5 right-5 text-[#9CA3AF] hover:text-[#00A3FF] text-2xl font-bold transition" data-modal-close aria-label="Close">
      ✕
    </button>

    <!-- Title -->
    <h2 id="registerModalTitle" class="text-4xl md:text-5xl font-['Bebas_Neue'] uppercase text-center mb-8 tracking-widest" style="background:linear-gradient(90deg,#00A3FF,#1EBBFF);-webkit-background-clip:text;color:transparent;">
      Join the Draw
    </h2>

    <!-- Form -->
    <form class="space-y-5" autocomplete="off">
      <input type="text" name="fullname" placeholder="Full Name" required autocomplete="name"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <input type="email" name="email" placeholder="Email Address" required autocomplete="email"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <input type="tel" name="phone" placeholder="Phone (Optional)" autocomplete="tel"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <input type="password" name="password" placeholder="Create a Password" required autocomplete="new-password"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <input type="password" name="confirm-password" placeholder="Confirm Password" required autocomplete="new-password"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-sm rounded-lg focus:outline-none focus:ring-2" style="transition:all 0.2s ease;focus:ring-color:#00A3FF;">

      <!-- Checkbox -->
      <label class="flex items-start gap-3 text-sm text-[#9CA3AF] leading-tight">
        <input type="checkbox" required class="mt-1 accent-[#00A3FF]">
        <span>
          I confirm I'm 18 or over and accept the 
          <a href="/terms" class="underline text-[#00A3FF] hover:text-white">Terms</a> and 
          <a href="/privacy" class="underline text-[#00A3FF] hover:text-white">Privacy Policy</a>.
        </span>
      </label>

      <!-- Submit -->
      <button type="submit" data-modal-open="thanks"
        class="w-full bg-[#00A3FF] text-[#0B0B0B] font-bold py-4 uppercase text-sm rounded-lg tracking-wider transition" style="transition:transform 0.15s ease;box-shadow:0 4px 10px rgba(0,163,255,0.4);" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
        Register Now
      </button>
    </form>

    <!-- Footer Note -->
    <p class="mt-6 text-[12px] text-center text-[#9CA3AF] leading-relaxed">
      We follow Aussie privacy standards and never share your details with third parties. Play smart. Stay safe.
    </p>
  </div>
</div>


<script>
document.getElementById('menu-btn').addEventListener('click', function() {
  document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script>

<script>
  document.querySelectorAll('.result-date').forEach(function(el) {
    let offset = parseInt(el.dataset.offset, 10);
    let date = new Date();
    date.setDate(date.getDate() - offset);
    let day = String(date.getDate()).padStart(2, '0');
    let monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    let month = monthNames[date.getMonth()];
    let year = date.getFullYear();
    el.textContent = `${day} ${month} ${year}`;
  });
</script>

<script>
  function rewiew(){
    var form = document.getElementById('review-form');
    var btn = document.getElementById('rev-send');
    var status = document.getElementById('review-status');

    form.addEventListener('submit', function(e){
      e.preventDefault();
      if (btn.disabled) return;
      btn.disabled = true;
      var original = btn.textContent;
      btn.textContent = 'Sending...';
      status.className = 'hidden mt-3 text-sm';

      setTimeout(function(){
        btn.disabled = false;
        btn.textContent = original;
        form.reset();
        status.textContent = 'Thank you! Your review was received and will be published after moderation.';
        status.className = 'mt-3 text-sm font-medium';
        status.style.color = '#00A3FF';
      }, 1200);
    });
  };
</script>


<script src="scripts/script.js"></script>
</body>

</html>