<?php include "header.php"; ?>
<main>

<section id="hero"
  class="w-full min-h-[80vh] bg-gradient-to-br from-[#186A3B] to-[#11092a] flex items-center py-6 px-2 sm:py-10 sm:px-4 md:px-0">
  <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 w-full h-full">
    <div class="flex flex-col items-start justify-center w-full md:w-3/5 max-w-xl order-2 md:order-1">
      <h1 class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 sm:mb-6">
        <span class="text-[#FFD700]">Official lottery access</span><br>
        <span class="text-[#FFD700]">anywhere in Australia</span>
      </h1>
      <p class="text-white text-base xs:text-lg sm:text-xl md:text-2xl mb-4 sm:mb-8">
        Secure your ticket online — fully licensed, always transparent, strictly 18+.
      </p>
      <div class="flex items-end mb-6 sm:mb-8">
        <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white mr-2 sm:mr-3">$5,000,000</span>
        <span class="text-lg xs:text-xl sm:text-2xl md:text-3xl font-medium text-white">Jackpot</span>
      </div>
      <div id="jackpot-timer" class="flex gap-2 xs:gap-3 mb-6 sm:mb-10">
        <!-- Days -->
        <div class="flex flex-col items-center">
          <div class="flex gap-0.5 xs:gap-1">
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
          </div>
          <span class="text-xs xs:text-sm sm:text-base text-white mt-1 sm:mt-2">days</span>
        </div>
        <!-- Hours -->
        <div class="flex flex-col items-center">
          <div class="flex gap-0.5 xs:gap-1">
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
          </div>
          <span class="text-xs xs:text-sm sm:text-base text-white mt-1 sm:mt-2">hours</span>
        </div>
        <!-- Minutes -->
        <div class="flex flex-col items-center">
          <div class="flex gap-0.5 xs:gap-1">
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
          </div>
          <span class="text-xs xs:text-sm sm:text-base text-white mt-1 sm:mt-2">min</span>
        </div>
        <!-- Seconds -->
        <div class="flex flex-col items-center">
          <div class="flex gap-0.5 xs:gap-1">
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
            <div class="timer-digit bg-[#23272F] border border-[#FFF] rounded text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white w-8 xs:w-10 sm:w-12 h-10 xs:h-12 sm:h-16 flex items-center justify-center">0</div>
          </div>
          <span class="text-xs xs:text-sm sm:text-base text-white mt-1 sm:mt-2">sec</span>
        </div>
      </div>
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-3 sm:mt-6 w-full">
        <a href="/cart" class="bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] text-base sm:text-lg font-semibold rounded-md px-5 py-2 sm:px-8 sm:py-3 transition text-center w-full sm:w-auto">
          Get Your Ticket
        </a>
        <a href="/#winners" class="border border-[#FF3D3D] text-white text-base sm:text-lg font-semibold rounded-md px-5 py-2 sm:px-8 sm:py-3 transition hover:bg-[#FF3D3D] hover:text-white text-center w-full sm:w-auto">
          See recent prizes
        </a>
      </div>
    </div>
    <div class="flex items-end justify-center w-full md:w-2/5 max-w-xs sm:max-w-md order-1 md:order-2 mb-8 md:mb-0">
      <img src="img/kangaroo-hero.webp" alt="Kangaroo mascot" class="w-full" />
    </div>
  </div>
</section>

<section id="how-it-works" class="w-full bg-white py-14 px-4">
  <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row gap-10 md:gap-16 items-start">
    
    <div class="flex-1 max-w-lg">
      <h2 class="text-[#FF3D3D] text-3xl md:text-4xl font-extrabold mb-6 leading-tight">
        How [CURRENT_DOMAIN_NO_TLD] Works for Aussies
      </h2>
      <p class="text-[#5A4A3F] text-lg mb-8">
        Joining an Australian lottery online is straightforward and secure. Just follow the four easy steps below — no fine print or tricky terms.
      </p>
      <a  data-modal="auth-modal" 
        class="inline-flex items-center bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] text-base font-bold rounded-md px-7 py-3 transition">
        Get Started
        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>
    
    <div class="flex-1 max-w-2xl flex flex-col gap-4 w-full">
      
      <div class="flex flex-col md:flex-row gap-4 p-5 border border-[#FFD700] rounded-lg bg-white">
        <div class="text-5xl text-[#186A3B] min-w-[36px] flex items-center pt-1">1</div>
        <div class="flex-1 flex flex-col md:flex-row gap-6">
          <div class="flex-1">
            <span class="font-bold text-[#FF3D3D] block mb-2">Sign Up</span>
            <p class="text-[#5A4A3F] text-base">
              Create your account in minutes — we’ll only ask for what’s needed to verify you’re 18+ and living in Australia. Your details stay private and secure.
            </p>
          </div>
          <ul class="min-w-[220px] flex flex-col gap-2 text-sm text-[#7D6A55] font-normal mt-4 md:mt-0">
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Quick, secure registration</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> For Aussie residents only</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Age check (18+ only)</li>
          </ul>
        </div>
      </div>
      
      <div class="flex flex-col md:flex-row gap-4 p-5 border border-[#FFD700] rounded-lg bg-white">
        <div class="text-5xl text-[#186A3B] min-w-[36px] flex items-center pt-1">2</div>
        <div class="flex-1 flex flex-col md:flex-row gap-6">
          <div class="flex-1">
            <span class="font-bold text-[#FF3D3D] block mb-2">Choose Numbers</span>
            <p class="text-[#5A4A3F] text-base">
              Select your lucky numbers or use Quick Pick — you’re in control. Enter as many draws as you like, whenever suits you.
            </p>
          </div>
          <ul class="min-w-[220px] flex flex-col gap-2 text-sm text-[#7D6A55] font-normal mt-4 md:mt-0">
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Manual & Quick Pick options</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Multiple draws available</li>
          </ul>
        </div>
      </div>
      
      <div class="flex flex-col md:flex-row gap-4 p-5 border border-[#FFD700] rounded-lg bg-white">
        <div class="text-5xl text-[#186A3B] min-w-[36px] flex items-center pt-1">3</div>
        <div class="flex-1 flex flex-col md:flex-row gap-6">
          <div class="flex-1">
            <span class="font-bold text-[#FF3D3D] block mb-2">Watch the Draw</span>
            <p class="text-[#5A4A3F] text-base">
              Tune in for live results or check your entry any time. If you win, we’ll notify you directly — and your winnings go straight to your secure account.
            </p>
          </div>
          <ul class="min-w-[220px] flex flex-col gap-2 text-sm text-[#7D6A55] font-normal mt-4 md:mt-0">
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Automatic notifications</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-base mr-2">&#10003;</span> Secure payout process</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="winners" class="w-full py-16 px-4 bg-gradient-to-br from-[#186A3B] to-[#11092a]">
  <div class="max-w-screen-xl mx-auto flex flex-col items-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#C9FF00] text-center mb-2">
      Weekly Standout Winners
    </h2>
    <p class="text-[#F3F3F3] text-lg text-center mb-10">
      Celebrating this week’s top 4 — real Aussies, real wins, paid directly to their accounts.
    </p>
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-10">

      <div class="relative flex flex-col items-center bg-[#23272F] border border-[#F3F3F3] rounded-2xl px-8 py-10 shadow-xl min-h-[340px]">
        <div class="absolute -top-10 left-1/2 -translate-x-1/2 z-10">
          <img src="img/winner-crown.webp" alt="crown" class="w-16 h-16" />
        </div>
        <div class="w-24 h-24 bg-[#F3F3F3] rounded-xl mb-3 flex items-center justify-center overflow-hidden">
          <img src="img/winner.webp" alt="Amelia Brooks photo" class="w-full h-full object-cover" />
        </div>
        <div class="text-[#FF3D7D] font-bold text-xl mt-2">Amelia Brooks</div>
        <div class="text-[#F3F3F3] text-base mb-2">Canberra, ACT</div>
        <div class="text-[#C9FF00] text-4xl font-extrabold mt-3">67,540&nbsp;$</div>
      </div>

      <div class="flex flex-col items-center bg-[#23272F] border border-[#F3F3F3] rounded-2xl px-8 py-10 shadow-xl min-h-[340px]">
        <div class="w-24 h-24 bg-[#F3F3F3] rounded-xl mb-3 flex items-center justify-center overflow-hidden">
          <img src="img/winner.webp" alt="Lucas Bennett photo" class="w-full h-full object-cover" />
        </div>
        <div class="text-[#FF3D7D] font-bold text-xl mt-2">Lucas Bennett</div>
        <div class="text-[#F3F3F3] text-base mb-2">Adelaide, SA</div>
        <div class="text-[#C9FF00] text-4xl font-extrabold mt-3">15,120&nbsp;$</div>
      </div>

      <div class="flex flex-col items-center bg-[#23272F] border border-[#F3F3F3] rounded-2xl px-8 py-10 shadow-xl min-h-[340px]">
        <div class="w-24 h-24 bg-[#F3F3F3] rounded-xl mb-3 flex items-center justify-center overflow-hidden">
          <img src="img/winner.webp" alt="Jasmine McKay photo" class="w-full h-full object-cover" />
        </div>
        <div class="text-[#FF3D7D] font-bold text-xl mt-2">Jasmine McKay</div>
        <div class="text-[#F3F3F3] text-base mb-2">Darwin, NT</div>
        <div class="text-[#C9FF00] text-4xl font-extrabold mt-3">9,384&nbsp;$</div>
      </div>

      <div class="flex flex-col items-center bg-[#23272F] border border-[#F3F3F3] rounded-2xl px-8 py-10 shadow-xl min-h-[340px]">
        <div class="w-24 h-24 bg-[#F3F3F3] rounded-xl mb-3 flex items-center justify-center overflow-hidden">
          <img src="img/winner.webp" alt="Declan O’Connor photo" class="w-full h-full object-cover" />
        </div>
        <div class="text-[#FF3D7D] font-bold text-xl mt-2">Declan O’Connor</div>
        <div class="text-[#F3F3F3] text-base mb-2">Geelong, VIC</div>
        <div class="text-[#C9FF00] text-4xl font-extrabold mt-3">5,270&nbsp;$</div>
      </div>
    </div>
    <a href="/cart"
      class="bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] text-lg font-bold rounded-md px-12 py-4 transition">
      Get Your Ticket
    </a>
  </div>
</section>

<section id="about" class="w-full bg-white py-16 px-4">
  <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center md:items-center gap-10 md:gap-16">
    
    <div class="flex-1 flex flex-col gap-8 max-w-2xl">
      <h2 class="text-[#FF3D3D] text-3xl md:text-4xl font-extrabold mb-2">
        About [CURRENT_DOMAIN_NO_TLD]
      </h2>
      <div class="flex flex-col sm:flex-row gap-6 mb-2">
        
        <div class="flex-1 flex flex-col gap-4 items-center">
          <div class="flex flex-col items-center justify-center border border-[#FFD700] rounded-xl bg-[#F3F3F3] w-[200px] h-[200px] aspect-square p-4">
            <div class="text-[#FF3D3D] text-4xl md:text-5xl font-extrabold text-center leading-none mb-2">11+</div>
            <div class="text-[#5A4A3F] text-lg font-bold text-center">Years Serving Australia</div>
          </div>
          <div class="flex flex-col items-center justify-center border border-[#FFD700] rounded-xl bg-[#F3F3F3] w-[200px] h-[200px] aspect-square p-4">
            <div class="text-[#FF3D3D] text-4xl md:text-5xl font-extrabold text-center leading-none mb-2">2.7M +</div>
            <div class="text-[#5A4A3F] text-lg font-bold text-center">Active Aussie Users</div>
          </div>
          <div class="flex flex-col items-center justify-center border border-[#FFD700] rounded-xl bg-[#F3F3F3] w-[200px] h-[200px] aspect-square p-4">
            <div class="text-[#FF3D3D] text-4xl md:text-5xl font-extrabold text-center leading-none mb-2">99.9%</div>
            <div class="text-[#5A4A3F] text-lg font-bold text-center">Uptime Guarantee</div>
          </div>
        </div>
        
        <div class="flex-1 flex flex-col gap-4 justify-center">
          <p class="text-[#23272F] text-lg">
            [CURRENT_DOMAIN_NO_TLD] is an Australian-built platform giving everyday locals fair, secure access to official lottery draws. We’re licensed, regulated, and proud to keep things local and transparent.
          </p>
          <p class="text-[#23272F] text-lg">
            Our experienced team operates from Australia, focused on straightforward service, privacy, and compliance. All payments are processed securely, with user protection at the core of everything we do.
          </p>
          <p class="text-[#23272F] text-lg">
            No tricks. No hidden terms. Just genuine access to trusted draws, with support and information you can always rely on.
          </p>
          <p class="text-[#23272F] text-lg">
            Whether you’re here for the excitement, the tradition, or just for fun — our mission is to keep things accessible for everyone across Australia.
          </p>
          <ul class="flex flex-wrap gap-5 text-sm font-medium mt-2">
            <li class="flex items-center"><span class="text-[#FFD700] text-lg mr-2">&#10003;</span> Fully Licensed Locally</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-lg mr-2">&#10003;</span> Fast, Secure Payments</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-lg mr-2">&#10003;</span> Trusted by Australians</li>
            <li class="flex items-center"><span class="text-[#FFD700] text-lg mr-2">&#10003;</span> Local Support 24/7</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="flex-1 flex justify-center items-center w-full max-w-md">
      <img src="img/about.webp" alt="Platform logo" class="w-full max-w-xs md:max-w-sm" />
    </div>
  </div>
</section>

<section id="why-trust" class="w-full py-16 px-4 bg-gradient-to-br from-[#186A3B] to-[#11092a]">
  <div class="max-w-screen-xl mx-auto flex flex-col items-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#C9FF00] text-center mb-4">
      Why locals choose [CURRENT_DOMAIN_NO_TLD]
    </h2>
    <p class="text-[#F3F3F3] text-lg text-center mb-10 max-w-2xl">
      Our service is designed for Australians who want a reliable, fair way to join real licensed lottery draws — always legal, always above board, always clear on the details.
    </p>
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mb-8">
      <!-- Feature 1 -->
      <div class="flex flex-col items-center bg-transparent border border-[#F3F3F3] rounded-lg px-5 py-8 shadow-none">
        <div class="mb-4">
          <img src="img/license.svg" alt="Government Authorised" class="w-10 h-10" />
        </div>
        <div class="text-[#FF3D3D] font-bold text-2xl mb-2 text-center">Government Authorised</div>
        <div class="text-[#F3F3F3] text-lg text-center">
          Fully licensed under Australian state and federal regulations, with strict compliance for every ticket we process.
        </div>
      </div>
      <!-- Feature 2 -->
      <div class="flex flex-col items-center bg-transparent border border-[#F3F3F3] rounded-lg px-5 py-8 shadow-none">
        <div class="mb-4">
          <img src="img/safety.svg" alt="Bank-Level Security" class="w-10 h-10" />
        </div>
        <div class="text-[#FF3D3D] font-bold text-2xl mb-2 text-center">Bank-Level Security</div>
        <div class="text-[#F3F3F3] text-lg text-center">
          All payments and data are encrypted with the latest standards, and every transaction is protected by certified, Australian-based gateways.
        </div>
      </div>
      <!-- Feature 3 -->
      <div class="flex flex-col items-center bg-transparent border border-[#F3F3F3] rounded-lg px-5 py-8 shadow-none">
        <div class="mb-4">
          <img src="img/geo.svg" alt="Instant Results" class="w-10 h-10" />
        </div>
        <div class="text-[#FF3D3D] font-bold text-2xl mb-2 text-center">Instant Results</div>
        <div class="text-[#F3F3F3] text-lg text-center">
          Get notified instantly by email or SMS after every draw. Results are delivered straight to your account — no need to chase them up.
        </div>
      </div>
      <!-- Feature 4 -->
      <div class="flex flex-col items-center bg-transparent border border-[#F3F3F3] rounded-lg px-5 py-8 shadow-none">
        <div class="mb-4">
          <img src="img/ticket.svg" alt="Official Entry" class="w-10 h-10" />
        </div>
        <div class="text-[#FF3D3D] font-bold text-2xl mb-2 text-center">Official Entry</div>
        <div class="text-[#F3F3F3] text-lg text-center">
          Every ticket purchased is for a genuine draw with a licensed Australian lottery provider. No bets, no speculation — just your real chance at real prizes.
        </div>
      </div>
    </div>
    <div class="max-w-3xl mx-auto text-center mt-4 text-[#C9FF00] text-base flex flex-col items-center">
      <span class="flex items-center gap-2">
        <span class="text-[#FFD700] text-lg">&#10003;</span>
        <span class="text-[#F3F3F3]">
          [CURRENT_DOMAIN_NO_TLD] is built for trust: your entries are verified, your payments are secure, and your results come straight from the source — every time.
        </span>
      </span>
    </div>
  </div>
</section>

<section id="faq" class="relative w-full py-16 px-4 overflow-hidden bg-white">
  <div class="absolute inset-0 z-0">
    <img src="img/faq-questions.webp" alt="FAQ Illustration" class="w-full h-full object-cover object-right opacity-60" />
  </div>
  <div class="max-w-screen-xl mx-auto flex justify-start relative z-10">
    <div class="w-full md:w-[70%] flex flex-col">
      <h2 class="text-[#C9FF00] text-3xl md:text-4xl font-extrabold mb-4">
        Frequently Asked Questions
      </h2>
      <p class="text-[#23272F] text-base mb-8 max-w-2xl">
        Not sure how [CURRENT_DOMAIN_NO_TLD] works? Here’s what fellow Aussies are asking about online lottery participation, security, and payments.
      </p>
      <div class="flex flex-col gap-4 mb-8">

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            How do I sign up?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            Simply hit “Register”, fill out your details, and verify your age. It only takes a minute — and you’re ready for your first draw.
          </div>
        </details>

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            Which payment methods can I use?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            We accept major credit and debit cards (Visa, Mastercard), as well as secure bank transfers. All payments are processed with full encryption for your safety.
          </div>
        </details>

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            How do I get my winnings?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            Winnings are credited directly to your account. You’ll receive a notification, and can withdraw securely to your nominated bank account at any time.
          </div>
        </details>

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            Is [CURRENT_DOMAIN_NO_TLD] actually licensed?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            Yes. Our platform operates under strict licensing and Australian law — you can play with full confidence.
          </div>
        </details>

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            Can I play if I’m not in a major city?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            Absolutely. As long as you’re in Australia and over 18, you can join from anywhere — city, coast, or country.
          </div>
        </details>

        <details class="border border-[#C9FF00] rounded-md group bg-white/40 backdrop-blur-xl shadow-lg transition-all">
          <summary class="px-4 py-3 cursor-pointer text-[#FF3D3D] font-bold text-base outline-none transition group-open:bg-[#F3F3F3]/40">
            How does [CURRENT_DOMAIN_NO_TLD] keep my tickets safe?
          </summary>
          <div class="px-4 py-3 text-[#5A4A3F] text-base">
            Every ticket is registered to your verified account and handled by our trusted local agents. We use digital tracking, secure storage, and full compliance at every step.
          </div>
        </details>
      </div>
      <div class="flex items-center gap-3 mt-6">
        <span class="text-[#BDBDBD] text-base">Didn’t find what you need?</span>
        <a href="/contact" class="bg-[#C9FF00] text-[#23272F] font-semibold px-6 py-2 rounded-md hover:bg-[#FFD700] transition">
          Contact Support
        </a>
      </div>
    </div>
    <div class="hidden md:block w-[30%]"></div>
  </div>
</section>

<section id="responsible-play" class="w-full py-16 px-4 bg-gradient-to-br from-[#186A3B] to-[#11092a]">
  <div class="max-w-screen-xl mx-auto">
    <h2 class="text-[#C9FF00] text-3xl md:text-4xl font-extrabold text-center mb-10">
      Responsible Play — Your Wellbeing Comes First
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-[#F3F3F3]">
      <div>
        <h3 class="text-white font-bold mb-3 text-lg">Set Healthy Boundaries</h3>
        <p class="text-lg leading-relaxed">
          Playing the lottery should always be easy-going and fun. We recommend you set personal limits — both on time and budget — so your play always stays enjoyable and stress-free.
        </p>
      </div>
      <div>
        <h3 class="text-white font-bold mb-3 text-lg">Know When to Pause</h3>
        <p class="text-lg leading-relaxed">
          Noticing it’s tough to take a break, feeling uneasy, or hiding your play? These may be signs it’s time to step back and reflect. Recognising these moments early helps you stay in control.
        </p>
      </div>
      <div>
        <h3 class="text-white font-bold mb-3 text-lg">Support Is Always Here</h3>
        <p class="text-lg leading-relaxed">
          Free, confidential help is always available for Australians seeking advice or support:<br>
          Visit <a href="https://www.gambleaware.org.au" class="underline text-[#C9FF00] hover:text-[#FFD700] transition">gambleaware.org.au</a> for practical tips and self-check tools.<br>
          Call the 24/7 Gambling Helpline at <span class="whitespace-nowrap">1800 858 858</span> — there’s always someone ready to listen.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="support-networks" class="bg-white py-6 px-4">
  <div class="max-w-screen-lg mx-auto flex justify-center items-center">
    <div class="flex flex-wrap gap-y-4 items-center justify-between  w-full">
      <a href="https://resetapp.com.au/" target="_blank" rel="noopener noreferrer">
        <img src="img/reset.webp" alt="Reset App" class="h-14 w-auto object-contain" />
      </a>
      <a href="https://gamblershelp.com.au/" target="_blank" rel="noopener noreferrer">
        <img src="img/gamblers.webp" alt="Gamblers Help" class="h-14 w-auto object-contain" />
      </a>
      <a href="https://www.gambleaware.nsw.gov.au/" target="_blank" rel="noopener noreferrer">
        <img src="img/18plus.webp" alt="GambleAware" class="h-14 w-auto object-contain" />
      </a>
      <a href="https://www.gambleaware.com/" target="_blank" rel="noopener noreferrer">
        <img src="img/gamble.webp" alt="GambleAware Logo" class="h-10 w-auto object-contain" />
      </a>
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>