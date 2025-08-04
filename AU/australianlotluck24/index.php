<?php include "header.php"; ?>
<main>

<section id="hero" class="relative py-10 sm:py-16 overflow-hidden text-[#3A3636]">
  <div class="absolute inset-0 -z-10 bg-[url('img/hero-bg.webp')] bg-cover bg-center opacity-35"></div>
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <div class="absolute top-10 left-4 w-52 h-52 md:w-64 md:h-64 bg-[#009688] opacity-20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-4 w-72 h-72 md:w-80 md:h-80 bg-[#FF6F61] opacity-20 rounded-full blur-3xl"></div>
  </div>
  <div class="absolute top-4 right-4 text-xs bg-[#FF6F61] text-white px-4 py-2 rounded-full shadow-md z-20 uppercase font-semibold max-w-xs text-center leading-snug hidden md:block">
    Available to Australian residents 18+.<br>Play responsibly.
  </div>
  <div class="max-w-5xl mx-auto px-4 mb-8">
    <div class="flex justify-end">
      <span class="inline-block bg-[#FFB300] text-[#3A3636] font-bold text-lg sm:text-xl md:text-2xl rounded-full px-6 py-2 shadow-md uppercase tracking-wide">
        Sunshine. Simplicity. Your Local Draw.
      </span>
    </div>
  </div>
  <div class="max-w-5xl mx-auto px-4">
    <div class="flex justify-end">
      <div class="w-full">
        <div class="bg-[#FFF9E2]/80 backdrop-blur-xl rounded-2xl px-6 py-8 sm:px-10 sm:py-12 shadow-xl border border-[#FFD54F]/40">
          <div class="w-full flex flex-col md:block">
            <img src="img/hero-ticket.webp"
                 alt="Official Australian lottery ticket"
                 class="w-32 sm:w-40 md:w-44 rounded-2xl shadow-lg object-contain bg-white/80 p-2 mb-6 md:mb-4 md:mr-8 md:float-left" />
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#5E3A87] leading-tight tracking-tight mb-5 mt-2">
              Welcome to Australia's Easiest Lottery Experience
            </h1>
            <h2 class="text-xl sm:text-2xl md:text-3xl text-[#FF6F61] font-bold mb-5">
              Enter Real Draws with [CURRENT_DOMAIN_NO_TLD]
            </h2>
            <p class="text-base sm:text-lg text-[#3A3636] leading-relaxed mb-6">
              No queues. No paperwork. Just the official games you already know — with a smoother, secure online experience.<br>
              [CURRENT_DOMAIN_NO_TLD] lets you join licensed Australian lottery draws in minutes, wherever you are.<br>
              Choose your numbers, confirm your ticket, and you’re set. Simple as that.
            </p>
            <div class="flex justify-end">
              <a href="/cart" class=" bg-[#FF6F61] hover:bg-[#FFB300] text-white font-bold text-lg px-10 py-4 rounded-full transition shadow-lg hover:shadow-xl mt-2 mb-6">
                Enter Now
              </a>
            </div>
            <p class="text-sm text-[#3A3636]/70 font-medium leading-relaxed mb-4">
              100% Aussie. Fully licensed. No tricks, no hidden fees — just your chance at real local wins.
            </p>
            <div class="text-[#5E3A87] font-bold text-lg animate-pulse mb-2">
              Entries close Friday, 7PM AEST — good luck!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="how" class="bg-[#FFF9E2] text-[#3A3636] py-24 px-4">
  <div class="max-w-4xl mx-auto space-y-14">
    <div class="space-y-4 text-center">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#FFB300] uppercase tracking-wide">
        How It Works
      </h2>
      <p class="max-w-2xl mx-auto text-base md:text-lg text-[#3A3636]/80">
        No sign-ups, no hassle. Just pick your draw, select your tickets, and you’re good to go.<br>
        Fast, straightforward, and made for locals who like to keep things easy.
      </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 relative">
      
      <div class="relative flex flex-col h-full bg-white/90 rounded-xl shadow-lg border-2 border-[#FFD54F] px-7 py-10 text-left transition hover:shadow-2xl">
        <div class="absolute -top-6 left-7 bg-[#FFB300] text-white font-black text-xl rounded-full px-5 py-2 shadow-md">
          1
        </div>
        <h3 class="text-2xl font-bold text-[#5E3A87] mb-3 mt-6">Browse Lotteries</h3>
        <p class="text-base text-[#3A3636]/80 leading-relaxed">
          Check out all available Australian draws — from major jackpots to quick picks. Each draw clearly lists times, dates, and entry cost, so you always know what’s coming up.
        </p>
        
        <div class="hidden sm:block absolute top-1/2 right-[-32px] w-16 h-0.5 bg-[#FFD54F]"></div>
        <div class="block sm:hidden absolute bottom-[-32px] left-1/2 w-0.5 h-8 bg-[#FFD54F] transform -translate-x-1/2"></div>
      </div>
      
      <div class="relative flex flex-col h-full bg-white/90 rounded-xl shadow-lg border-2 border-[#FF6F61] px-7 py-10 text-left transition hover:shadow-2xl">
        <div class="absolute -top-6 left-7 bg-[#FF6F61] text-white font-black text-xl rounded-full px-5 py-2 shadow-md">
          2
        </div>
        <h3 class="text-2xl font-bold text-[#5E3A87] mb-3 mt-6">Select Your Tickets</h3>
        <p class="text-base text-[#3A3636]/80 leading-relaxed">
          Choose how many tickets you’d like — go solo or grab a few for more chances. Add them straight to your cart. No extra steps, no hidden surprises. Review everything before payment.
        </p>
        
        <div class="hidden sm:block absolute bottom-[-32px] left-1/2 w-0.5 h-8 bg-[#FF6F61] transform -translate-x-1/2"></div>
        <div class="block sm:hidden absolute bottom-[-32px] left-1/2 w-0.5 h-8 bg-[#FF6F61] transform -translate-x-1/2"></div>
      </div>
      
      <div class="relative flex flex-col h-full bg-white/90 rounded-xl shadow-lg border-2 border-[#009688] px-7 py-10 text-left transition hover:shadow-2xl">
        <div class="absolute -top-6 left-7 bg-[#009688] text-white font-black text-xl rounded-full px-5 py-2 shadow-md">
          4
        </div>
        <h3 class="text-2xl font-bold text-[#5E3A87] mb-3 mt-6">Pay Securely</h3>
        <p class="text-base text-[#3A3636]/80 leading-relaxed">
          Checkout using trusted Australian payment options — no hidden costs, no international fees. You’ll get an instant confirmation and your payment is always protected by local standards.
        </p>
      </div>
      
      <div class="relative flex flex-col h-full bg-white/90 rounded-xl shadow-lg border-2 border-[#5E3A87] px-7 py-10 text-left transition hover:shadow-2xl">
        <div class="absolute -top-6 left-7 bg-[#5E3A87] text-white font-black text-xl rounded-full px-5 py-2 shadow-md">
          3
        </div>
        <h3 class="text-2xl font-bold text-[#5E3A87] mb-3 mt-6">Sit Back & Wait</h3>
        <p class="text-base text-[#3A3636]/80 leading-relaxed">
          That’s it! Relax until the results are in. If you score a win, we’ll send you an email right away. No chasing results or waiting in line — we keep you in the loop.
        </p>
        
        <div class="hidden sm:block absolute top-1/2 left-[-32px] w-16 h-0.5 bg-[#5E3A87]"></div>
        <div class="block sm:hidden absolute bottom-[-32px] left-1/2 w-0.5 h-8 bg-[#5E3A87] transform -translate-x-1/2"></div>
      </div>
    </div>
    <p class="text-xs text-[#3A3636]/50 pt-8 border-t border-[#FFD54F]/30 max-w-xl mx-auto text-center">
      Open to Australian residents 18 and over. Please play responsibly.
    </p>
  </div>
</section>

<section id="countdown" class="relative bg-gradient-to-br from-[#5E3A87] via-[#7B50C7] to-[#009688] text-white py-20 px-4 overflow-hidden">
  
  <div class="absolute -top-10 left-[-60px] w-56 h-56 bg-[#FFB300]/30 rounded-full blur-3xl opacity-80 -z-10"></div>
  <div class="absolute -bottom-20 right-[-60px] w-72 h-72 bg-[#FF6F61]/30 rounded-full blur-3xl opacity-80 -z-10"></div>
  
  <div class="max-w-3xl mx-auto text-center space-y-10 relative z-10">
    <h2 class="text-4xl md:text-5xl font-extrabold uppercase tracking-wide drop-shadow-md">
      Countdown to the Next Aussie Draw
    </h2>
    <div class="flex justify-center">
      <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl px-8 py-8 md:px-16 md:py-12 flex flex-wrap gap-8 items-center justify-center border-2 border-[#FFD54F]/40">
        <div class="flex flex-col items-center min-w-[70px]">
          <span id="days" class="text-4xl md:text-6xl font-mono font-extrabold text-[#FFB300] drop-shadow">--</span>
          <div class="text-xs md:text-base uppercase mt-2 tracking-widest text-white/90">Days</div>
        </div>
        <span class="text-3xl md:text-5xl font-extrabold text-[#FFB300] select-none">:</span>
        <div class="flex flex-col items-center min-w-[70px]">
          <span id="hours" class="text-4xl md:text-6xl font-mono font-extrabold text-[#FFB300] drop-shadow">--</span>
          <div class="text-xs md:text-base uppercase mt-2 tracking-widest text-white/90">Hours</div>
        </div>
        <span class="text-3xl md:text-5xl font-extrabold text-[#FFB300] select-none">:</span>
        <div class="flex flex-col items-center min-w-[70px]">
          <span id="minutes" class="text-4xl md:text-6xl font-mono font-extrabold text-[#FFB300] drop-shadow">--</span>
          <div class="text-xs md:text-base uppercase mt-2 tracking-widest text-white/90">Minutes</div>
        </div>
        <span class="text-3xl md:text-5xl font-extrabold text-[#FFB300] select-none">:</span>
        <div class="flex flex-col items-center min-w-[70px]">
          <span id="seconds" class="text-4xl md:text-6xl font-mono font-extrabold text-[#FFB300] drop-shadow">--</span>
          <div class="text-xs md:text-base uppercase mt-2 tracking-widest text-white/90">Seconds</div>
        </div>
      </div>
    </div>
    <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
      Skip the queue and get your entry in before the clock hits zero.<br>
      Every ticket is Aussie-authorised, secure, and straight to the real draw — no fuss, no fine print.
    </p>
    <a href="/cart" class="inline-block bg-[#FF6F61] hover:bg-[#FFB300] text-white font-extrabold text-lg px-10 py-5 rounded-full transition shadow-xl hover:shadow-2xl tracking-wide uppercase">
      Enter the Draw
    </a>
  </div>
</section>

<section id="about" class="relative  text-[#1C1B1F] py-28 px-4 overflow-hidden">
  <div class="absolute inset-0 bg-[url('img/about.webp')] bg-cover bg-center opacity-90 -z-10"></div>
  <div class="absolute inset-0 bg-[#F4F1EC]/50 -z-10"></div>
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-extrabold uppercase text-[#5E3A87] tracking-wide mb-10">
      About [CURRENT_DOMAIN_NO_TLD]
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:text-left text-center">
      <div class="space-y-7">
        <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
          [CURRENT_DOMAIN_NO_TLD] is an Australian platform, built from the ground up by locals for locals. Our aim? To make joining official lottery draws as easy and straightforward as possible — no international detours, no confusing hoops, no endless waiting.
        </p>
        <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
          We operate under full Australian licensing and strict local regulations, so you know every ticket you buy is fully legit. Whether you’re new to the game or play regularly, we guarantee a fair, transparent experience every time.
        </p>
        <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
          Our goal? Bring Australia’s biggest draws closer to everyday Aussies, right across the country. Proudly 100% Aussie-owned, always serving our own.
        </p>
      </div>
      <div class="space-y-7">
        <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
          Skip the queues and the headaches. [CURRENT_DOMAIN_NO_TLD] is digital-first, lightning-fast, and always up to scratch with Aussie law. Every purchase is encrypted, every detail protected, so your privacy and security are always front and centre.
        </p>
        <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
          Need a hand or have a question? Our local support crew is here for you — quick replies, no robots, just genuine Aussie help.
        </p>
        <a href="/#how" class="inline-block text-[#FF6F3C] hover:text-[#e25b28] font-semibold uppercase tracking-wide transition mt-3">
          See How It Works →
        </a>
      </div>
    </div>
  </div>
</section>

<section id="reviews" class="bg-[#FFF9E2] text-[#3A3636] py-28 px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#FFB300] uppercase tracking-wide text-center mb-6 font-[Montserrat,sans-serif]">
      What Players Say
    </h2>
    <p class="max-w-2xl mx-auto text-base md:text-lg text-[#3A3636]/70 text-center mb-12 font-[Open Sans,Inter,Roboto,sans-serif]">
      Real feedback from everyday Aussies using [CURRENT_DOMAIN_NO_TLD] — simple, honest, and always local.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-14">
      <div class="min-h-[335px] flex flex-col items-center justify-between bg-white rounded-2xl shadow-md p-8 text-center border border-[#FFD54F]">
        <div class="w-16 h-16 rounded-full bg-[#FFB300]/20 flex items-center justify-center mb-5">
          <img src="img/user-placeholder.webp" alt="User Icon" class="w-16 h-16 object-cover rounded-full" />
        </div>
        <div class="flex items-center justify-center gap-1 mb-3">
          <svg class="w-5 h-5 text-[#FFD54F]" fill="currentColor" viewBox="0 0 20 20"><polygon points="10 15 4 18 6 12 1 8 7 7 10 2 13 7 19 8 14 12 16 18"></polygon></svg>
          <span class="text-[#FFD54F] text-base font-semibold">5.0</span>
        </div>
        <p class="text-sm leading-relaxed mb-4">
          “Jumped in while waiting for the train. Ticket sorted in seconds — no faff, no fuss. Love that the whole thing’s Aussie-run.”
        </p>
        <span class="text-xs font-semibold text-[#FF6F61]">— Lucy W., VIC</span>
      </div>
      <div class="min-h-[335px] flex flex-col items-center justify-between bg-white rounded-2xl shadow-md p-8 text-center border border-[#00AEEF]">
        <div class="w-16 h-16 rounded-full bg-[#00AEEF]/20 flex items-center justify-center mb-5">
          <img src="img/user-placeholder.webp" alt="User Icon" class="w-16 h-16 object-cover rounded-full" />
        </div>
        <div class="flex items-center justify-center gap-1 mb-3">
          <svg class="w-5 h-5 text-[#FFD54F]" fill="currentColor" viewBox="0 0 20 20"><polygon points="10 15 4 18 6 12 1 8 7 7 10 2 13 7 19 8 14 12 16 18"></polygon></svg>
          <span class="text-[#FFD54F] text-base font-semibold">5.0</span>
        </div>
        <p class="text-sm leading-relaxed mb-4">
          “Way quicker than lining up at the shops. No accounts, no paperwork. Picked my numbers and paid — easy as.”
        </p>
        <span class="text-xs font-semibold text-[#FF6F61]">— Joel H., NT</span>
      </div>
      <div class="min-h-[335px] flex flex-col items-center justify-between bg-white rounded-2xl shadow-md p-8 text-center border border-[#FF6F61]">
        <div class="w-16 h-16 rounded-full bg-[#FF6F61]/20 flex items-center justify-center mb-5">
          <img src="img/user-placeholder.webp" alt="User Icon" class="w-16 h-16 object-cover rounded-full" />
        </div>
        <div class="flex items-center justify-center gap-1 mb-3">
          <svg class="w-5 h-5 text-[#FFD54F]" fill="currentColor" viewBox="0 0 20 20"><polygon points="10 15 4 18 6 12 1 8 7 7 10 2 13 7 19 8 14 12 16 18"></polygon></svg>
          <span class="text-[#FFD54F] text-base font-semibold">5.0</span>
        </div>
        <p class="text-sm leading-relaxed mb-4">
          “Site’s actually super clear. Paid, got my email straight away. Whole thing feels safe and above board.”
        </p>
        <span class="text-xs font-semibold text-[#FF6F61]">— Emily D., WA</span>
      </div>
      <div class="min-h-[335px] flex flex-col items-center justify-between bg-white rounded-2xl shadow-md p-8 text-center border border-[#009688]">
        <div class="w-16 h-16 rounded-full bg-[#009688]/20 flex items-center justify-center mb-5">
          <img src="img/user-placeholder.webp" alt="User Icon" class="w-16 h-16 object-cover rounded-full" />
        </div>
        <div class="flex items-center justify-center gap-1 mb-3">
          <svg class="w-5 h-5 text-[#FFD54F]" fill="currentColor" viewBox="0 0 20 20"><polygon points="10 15 4 18 6 12 1 8 7 7 10 2 13 7 19 8 14 12 16 18"></polygon></svg>
          <span class="text-[#FFD54F] text-base font-semibold">5.0</span>
        </div>
        <p class="text-sm leading-relaxed mb-4">
          “I checked the licence and it’s the real deal. Fast site, clear prices, and no dodgy stuff. Back for next week for sure.”
        </p>
        <span class="text-xs font-semibold text-[#FF6F61]">— Mark R., ACT</span>
      </div>
    </div>
    <div class="max-w-lg mx-auto mt-12">
      <h3 class="text-2xl font-bold text-[#009688] text-center mb-7 font-[Montserrat,sans-serif]">
        Want to share your experience?
      </h3>
      <form id="reviewForm" class="space-y-6">
        <input type="text" id="name" placeholder="Your Name" required
          class="w-full bg-white border border-[#00AEEF] rounded-xl px-5 py-3 text-sm text-[#3A3636] placeholder-[#3A3636]/40 focus:outline-none focus:ring-2 focus:ring-[#009688]" />
        <textarea id="message" placeholder="Your Review" required rows="4"
          class="w-full bg-white border border-[#00AEEF] rounded-xl px-5 py-3 text-sm text-[#3A3636] placeholder-[#3A3636]/40 focus:outline-none focus:ring-2 focus:ring-[#009688]"></textarea>
        <button type="submit"
          class="bg-[#FF6F61] hover:bg-[#FFB300] text-white font-bold text-sm px-8 py-3 rounded-full transition shadow-lg hover:shadow-xl w-full">
          Submit Review
        </button>
        <p id="reviewSuccess" class="text-sm text-[#009688] font-semibold mt-4 hidden">
          Thanks for your feedback! We appreciate every comment from the community.
        </p>
      </form>
    </div>
  </div>
</section>

<section id="why" class="bg-[#FFF9E2] text-[#3A3636] py-28 px-4">
  <div class="max-w-5xl mx-auto space-y-16">
    <div class="text-center space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#FFB300] uppercase tracking-wide font-[Montserrat,sans-serif]">
        Why Choose Us
      </h2>
      <p class="text-lg text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
        No clutter. No confusion. At <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, you get a fair go, backed by local knowledge and real support — no overseas runarounds, just honest Aussie service.
      </p>
      <a href="/cart" class="inline-block bg-[#FFB300] hover:bg-[#FF6F61] text-white font-bold text-base px-10 py-4 rounded-full transition shadow-lg hover:shadow-2xl font-[Montserrat,sans-serif] uppercase tracking-wide">
        Go to Cart
      </a>
    </div>
    <div class="grid grid-cols-1 gap-8">
      <div class="flex flex-col sm:flex-row items-start sm:items-center bg-white rounded-2xl shadow-md border-l-[12px] border-[#FFB300] p-8">
        <h3 class="text-xl font-bold text-[#FFB300] mb-3 sm:mb-0 sm:mr-10 min-w-[180px] font-[Montserrat,sans-serif]">
          No Accounts Needed
        </h3>
        <p class="text-base text-[#3A3636]/90 leading-relaxed font-[Open Sans,Inter,Roboto,sans-serif]">
          Entering a draw should be easy. With us, you skip the signups and the passwords — just pick, pay, and get your ticket. Zero hassle, every time.
        </p>
      </div>
      <div class="flex flex-col sm:flex-row items-start sm:items-center bg-white rounded-2xl shadow-md border-l-[12px] border-[#00AEEF] p-8">
        <h3 class="text-xl font-bold text-[#00AEEF] mb-3 sm:mb-0 sm:mr-10 min-w-[180px] font-[Montserrat,sans-serif]">
          Aussie Made & Operated
        </h3>
        <p class="text-base text-[#3A3636]/90 leading-relaxed font-[Open Sans,Inter,Roboto,sans-serif]">
          100% Australian — owned, run, and supported. We know the draws, the rules, and what matters to local players. No offshore loopholes. Just true-blue, local service.
        </p>
      </div>
      <div class="flex flex-col sm:flex-row items-start sm:items-center bg-white rounded-2xl shadow-md border-l-[12px] border-[#FF6F61] p-8">
        <h3 class="text-xl font-bold text-[#FF6F61] mb-3 sm:mb-0 sm:mr-10 min-w-[180px] font-[Montserrat,sans-serif]">
          Instant Entry Confirmation
        </h3>
        <p class="text-base text-[#3A3636]/90 leading-relaxed font-[Open Sans,Inter,Roboto,sans-serif]">
          Pay once and your entry lands in your inbox straight away. No follow-ups, no waiting — your spot in the draw is locked in, every single time.
        </p>
      </div>
      <div class="flex flex-col sm:flex-row items-start sm:items-center bg-white rounded-2xl shadow-md border-l-[12px] border-[#009688] p-8">
        <h3 class="text-xl font-bold text-[#009688] mb-3 sm:mb-0 sm:mr-10 min-w-[180px] font-[Montserrat,sans-serif]">
          Safe & Local Payments
        </h3>
        <p class="text-base text-[#3A3636]/90 leading-relaxed font-[Open Sans,Inter,Roboto,sans-serif]">
          Every transaction uses secure, Aussie-based payment providers — fully licensed, fully encrypted, and always transparent. Your money never leaves local hands.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="draws" class="bg-[#FFF9E2] text-[#3A3636] py-28 px-4">
  <div class="max-w-7xl mx-auto space-y-20">
    <div class="text-center space-y-4">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] uppercase tracking-wide font-[Montserrat,sans-serif]">
        Passed Draws
      </h2>
      <p class="max-w-2xl mx-auto text-base md:text-lg text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
        All draws run by the book — fully licensed, fully local. Check past results or get your ticket for the next big one, all in just a few taps.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
      
      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#FFB300]/20 min-w-0">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Friday, 5 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Aussie Powerball</h3>
          <div class="text-3xl font-extrabold text-[#FFB300]">$5,000,000</div>
          <p class="text-sm text-[#3A3636]/70 leading-relaxed">
            The nation’s favourite Friday jackpot. One ticket, one chance — real local winners every week.
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#FFB300] hover:bg-[#FF6F61] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Next Draw
        </a>
      </div>
      
      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#00AEEF]/20 min-w-0">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Tuesday, 9 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Oz Lotto</h3>
          <div class="text-3xl font-extrabold text-[#009688]">$3,200,000</div>
          <p class="text-sm text-[#3A3636]/70 leading-relaxed">
            Tuesdays made simple — big jackpots, licensed entries, no paperwork. Secure your spot in the next draw!
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#009688] hover:bg-[#FFB300] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Enter Next
        </a>
      </div>
      
      <div class="relative bg-[#FFFFFF] rounded-2xl p-8 shadow-[0_12px_32px_rgba(0,0,0,0.13)] flex flex-col justify-between h-full border-2 border-[#FFD54F] md:scale-105 md:z-10 min-w-0">
        <div class="flex flex-col items-center space-y-4">
          <div class="absolute left-1/2 -top-10 transform -translate-x-1/2">
            <div class="w-14 h-14 bg-[#FFB300]/20 rounded-full flex items-center justify-center border-2 border-[#FFB300]">
              <img src="img/crown.webp" alt="Crown Icon" class="w-16 h-16 object-contain" />
            </div>
          </div>
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide mt-8">Saturday, 6 July</p>
          <h3 class="text-2xl font-bold text-[#5E3A87]">Saturday Lotto</h3>
          <div class="text-4xl font-extrabold text-[#FF6F61]">$10,000,000</div>
          <p class="text-base text-[#3A3636]/70 leading-relaxed">
            Big weekend energy. Saturday Lotto brings classic million-dollar prizes — just pick your numbers and cross your fingers.
          </p>
        </div>
        <a href="/cart" class="mt-10 inline-block bg-[#FF6F61] hover:bg-[#FFB300] text-white font-bold text-base px-8 py-4 rounded-full transition shadow-xl hover:shadow-2xl text-center">
          Play Next
        </a>
      </div>
      
      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#FF6F61]/20 min-w-0">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Monday, 8 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Monday Lotto</h3>
          <div class="text-3xl font-extrabold text-[#00AEEF]">$1,500,000</div>
          <p class="text-sm text-[#3A3636]/70 leading-relaxed">
            Start your week with a fair chance. Simple entry, honest odds — every Monday night across Australia.
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#00AEEF] hover:bg-[#009688] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Try Next Draw
        </a>
      </div>
      
      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#5E3A87]/20 min-w-0">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Wednesday, 10 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Wednesday Lotto</h3>
          <div class="text-3xl font-extrabold text-[#5E3A87]">$1,000,000</div>
          <p class="text-sm text-[#3A3636]/70 leading-relaxed">
            Midweek, no-nonsense — one million reasons to get involved. Fully licenced, always local.
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#5E3A87] hover:bg-[#FFB300] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Enter Next
        </a>
      </div>
    </div>
  </div>
</section>

<section id="faq" class="bg-gradient-to-br from-[#5E3A87] via-[#7B50C7] to-[#009688] text-[#3A3636] py-28 px-4">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-start">
    <div class="space-y-6">
      <details class="group bg-white p-6 rounded-2xl border border-[#FFD54F] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          Do I need to create an account to play?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#FFB300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          Nope! There’s no account needed. Just select your draw, fill out your ticket details, and pay securely. Your confirmation and digital ticket come straight to your email — no logins, no passwords to remember.
        </p>
      </details>
      <details class="group bg-white p-6 rounded-2xl border border-[#00AEEF] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          How will I find out if I’ve won?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#00AEEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          You’ll get an instant email if your ticket scores a win. All results are also posted on our site. No chasing, no waiting — we’ll keep you in the loop every step of the way.
        </p>
      </details>
      <details class="group bg-white p-6 rounded-2xl border border-[#FF6F61] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          Is your service officially licensed in Australia?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#FF6F61" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          Yes — [CURRENT_DOMAIN_NO_TLD] is licensed and operates under strict Australian guidelines. Only residents 18+ are eligible, and every draw is legal, official, and locally approved.
        </p>
      </details>
      <details class="group bg-white p-6 rounded-2xl border border-[#009688] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          How do you keep my payments safe?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          All transactions are encrypted and handled by trusted, Aussie-based payment providers. We never store your card details or share sensitive info — your security is always our priority.
        </p>
      </details>
      <details class="group bg-white p-6 rounded-2xl border border-[#5E3A87] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          Where will my ticket be sent?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#5E3A87" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          Your digital ticket and all entry details are sent instantly to your email as soon as payment clears. Keep it handy — that’s your proof of entry.
        </p>
      </details>
      <details class="group bg-white p-6 rounded-2xl border border-[#FFD54F] shadow-md">
        <summary class="cursor-pointer flex items-center justify-between text-base font-bold text-[#5E3A87] mb-2 outline-none group-open:mb-4 transition">
          Can I cancel or change my ticket?
          <span class="ml-4 transition-transform group-open:rotate-180">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="#FFD54F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </summary>
        <p class="text-sm leading-relaxed text-[#3A3636]/80 mt-1">
          All sales are final after payment is made. Due to lottery rules and instant processing, refunds and changes aren’t possible. Please check everything before confirming — and reach out to our support team if you have questions.
        </p>
      </details>
    </div>
    <div class="space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-white uppercase tracking-wide font-[Montserrat,sans-serif]">
        Frequently Asked Questions
      </h2>
      <p class="text-lg text-white max-w-md font-[Open Sans,Inter,Roboto,sans-serif]">
        Still unsure? We’ve covered the main points above, but if you need more info, our Aussie support crew is just a message away.
      </p>
    </div>
  </div>
</section>

<section id="final-cta" class="relative bg-[#FFF9E2] text-[#3A3636] py-28 px-4 border-y-8 border-[#FFB300]">
  <div class="max-w-4xl mx-auto text-center space-y-10">
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] leading-tight font-[Montserrat,sans-serif]">
      Keen for the Next Official Draw?
    </h2>
    <p class="text-base md:text-lg text-[#3A3636]/80 max-w-2xl mx-auto font-[Open Sans,Inter,Roboto,sans-serif]">
      Jump in with no accounts, no hassle — just pick your ticket and you’re set. 100% Aussie-backed, fully licensed, and designed to keep things straightforward and secure for everyone.
    </p>
    <a href="/cart" class="inline-block bg-[#FFB300] hover:bg-[#FF6F61] text-white font-bold text-lg px-10 py-4 rounded-full transition shadow-lg hover:shadow-2xl font-[Montserrat,sans-serif] uppercase tracking-wide">
      Lock In My Entry
    </a>
  </div>
</section>

<section id="responsible" class=" text-[#3A3636] py-28 px-4 relative overflow-hidden">
  <div class="absolute inset-0 -z-10 bg-[url('img/responsible-bg.webp')] bg-cover bg-center opacity-20"></div>
  <div class="max-w-7xl mx-auto space-y-20 relative">
    <div class="text-center space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] uppercase tracking-wide font-[Montserrat,sans-serif]">
        Responsible Play
      </h2>
      <p class="text-base md:text-lg max-w-2xl mx-auto text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
        Playing should always stay positive. With <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, every Aussie gets access to resources, clear rules, and local support — so you can keep it fun and fair every time.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
      <div class="bg-white rounded-2xl shadow-md p-8 border-t-8 border-[#FFB300] flex flex-col items-start">
        <h3 class="text-xl font-bold text-[#FFB300] mb-2 font-[Montserrat,sans-serif]">Strictly 18+ Only</h3>
        <p class="text-sm text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
          This service is available only for Australians aged 18 and over. We use thorough age verification for every entry — no exceptions, no shortcuts, always by the book.
        </p>
      </div>
      <div class="bg-white rounded-2xl shadow-md p-8 border-t-8 border-[#009688] flex flex-col items-start">
        <h3 class="text-xl font-bold text-[#009688] mb-2 font-[Montserrat,sans-serif]">Keep It Balanced</h3>
        <p class="text-sm text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
          Set clear boundaries for your play. Only join in with what feels comfortable for you — no pressure, no overcommitment. Remember, pausing or skipping a draw is always your choice.
        </p>
      </div>
      <div class="bg-white rounded-2xl shadow-md p-8 border-t-8 border-[#5E3A87] flex flex-col items-start">
        <h3 class="text-xl font-bold text-[#5E3A87] mb-2 font-[Montserrat,sans-serif]">Help When You Need It</h3>
        <p class="text-sm text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
          If things ever feel out of balance, support is just a click away. Visit 
          <a href="https://www.gamblinghelponline.org.au/" target="_blank" class="underline text-[#5E3A87] hover:text-[#FF6F61]">
            Gambling Help Online
          </a> for confidential, round-the-clock advice — free and available for anyone across Australia.
        </p>
      </div>
    </div>
    <p class="text-xs text-[#3A3636]/60 text-center">
      <strong>[CURRENT_DOMAIN_NO_TLD]</strong> supports Australia’s National Consumer Protection Framework and champions safe, open, and fair participation for every eligible player.
    </p>
  </div>
</section>

<section id="contact" class="bg-[#FFF9E2] text-[#3A3636] py-24 px-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14 items-start">
    <div class="bg-white rounded-2xl p-8 md:p-10 border-2 border-[#FFD54F] shadow-lg space-y-6 flex flex-col justify-center order-1 md:order-none">
      <h3 class="text-xl font-bold text-[#FFB300] uppercase tracking-wide font-[Montserrat,sans-serif]">Drop Us a Line</h3>
      <form id="contactForm" class="space-y-4">
        <input type="text" placeholder="Your Name" required
          class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded-lg px-4 py-3 text-[#3A3636] placeholder-[#3A3636]/40 focus:outline-none focus:ring-2 focus:ring-[#009688] font-[Open Sans,Inter,Roboto,sans-serif]">
        <input type="email" placeholder="Email Address" required
          class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded-lg px-4 py-3 text-[#3A3636] placeholder-[#3A3636]/40 focus:outline-none focus:ring-2 focus:ring-[#009688] font-[Open Sans,Inter,Roboto,sans-serif]">
        <select required
          class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded-lg px-4 py-3 text-[#3A3636] focus:outline-none focus:ring-2 focus:ring-[#009688] font-[Open Sans,Inter,Roboto,sans-serif]">
          <option value="">What’s Your Question About?</option>
          <option>Account Access</option>
          <option>Payments</option>
          <option>Draw Info or Tickets</option>
          <option>Something Else</option>
        </select>
        <textarea rows="5" placeholder="How can we help?" required
          class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded-lg px-4 py-3 text-[#3A3636] placeholder-[#3A3636]/40 focus:outline-none focus:ring-2 focus:ring-[#009688] font-[Open Sans,Inter,Roboto,sans-serif]"></textarea>
        <button type="submit"
          class="w-full bg-[#FFB300] hover:bg-[#FF6F61] text-white font-bold py-3 rounded-full transition font-[Montserrat,sans-serif] uppercase tracking-wide">
          Send Message
        </button>
        <p id="contactSuccess" class="hidden text-sm text-[#009688] mt-2">Thanks — our local team will get back to you soon.</p>
      </form>
    </div>
    <div class="space-y-6">
      <h2 class="text-3xl md:text-4xl font-extrabold text-[#5E3A87] uppercase tracking-wide font-[Montserrat,sans-serif]">
        Contact Our Local Crew
      </h2>
      <p class="text-base text-[#3A3636]/80 font-[Open Sans,Inter,Roboto,sans-serif]">
        Stuck on something, or just want to chat? Our support team is based right here in Melbourne — ready to give real help with real answers, no bots or overseas call centres.
      </p>
      <div class="space-y-4 text-sm text-[#3A3636]/90">
        <div>
          <p class="font-bold text-[#009688]">Phone</p>
          <p>
            <a href="tel:+61280124468" class="underline hover:text-[#FF6F61]">
              +61 2 8012 4468
            </a><br>
            Monday to Friday, 9am–5pm AEST
          </p>
        </div>
        <div>
          <p class="font-bold text-[#009688]">Email</p>
          <p>support@[CURRENT_DOMAIN_NO_TLD].com</p>
        </div>
        <div>
          <p class="font-bold text-[#009688]">Visit Us</p>
          <p>Level 2, 210 Collins Street<br>Melbourne VIC 3000</p>
        </div>
      </div>
      <p class="text-xs text-[#3A3636]/50 pt-6 border-t border-[#FFD54F]">
        For Australians 18+. All support provided in line with national standards for privacy, digital security, and responsible play.
      </p>
    </div>
  </div>
</section>

<section id="awareness" class="py-20 bg-[#FFF9E2] text-[#3A3636] border-t-8 border-[#FFB300]">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 text-center">
    <a href="https://www.gambleaware.nsw.gov.au/" target="_blank" rel="noopener noreferrer"
         class="bg-white rounded-2xl shadow-md px-4 py-6 transition-transform hover:scale-105 hover:shadow-lg block">
        <img src="img/gamble.webp" alt="GambleAware NSW"
             class="h-10 mx-auto mb-3">
        <p class="text-xs font-semibold text-[#FFD54F]">GambleAware NSW</p>
      </a>
      <a href="https://resetapp.com.au/" target="_blank" rel="noopener noreferrer"
         class="bg-white rounded-2xl shadow-md px-4 py-6 transition-transform hover:scale-105 hover:shadow-lg block">
        <img src="img/reset.webp" alt="Self-Exclusion Tool"
             class="h-10 mx-auto mb-3">
        <p class="text-xs font-semibold text-[#00AEEF]">Self-Exclusion</p>
      </a>
      
      <div class="bg-white rounded-2xl shadow-md px-4 py-6 transition-transform hover:scale-105 hover:shadow-lg flex flex-col items-center justify-center">
        <img src="img/18.svg" alt="18+ Only"
             class="h-10 mx-auto mb-3">
        <p class="text-xs font-semibold text-[#FF6F3C]">18+ Only</p>
      </div>
      
      <a href="https://gamblershelp.com.au/" target="_blank" rel="noopener noreferrer"
         class="bg-white rounded-2xl shadow-md px-4 py-6 transition-transform hover:scale-105 hover:shadow-lg block">
        <img src="img/gamblers.webp" alt="Gambler’s Help"
             class="h-10 mx-auto mb-3">
        <p class="text-xs font-semibold text-[#5E3A87]">Gambler’s Help</p>
      </a>
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>