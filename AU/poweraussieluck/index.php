<?php include "header.php"; ?>
<main>

<section id="hero" class="relative  pt-32 pb-28 overflow-hidden text-[#C0C9D7]">

  <div class="absolute inset-0 -z-10 bg-[url('img/hero.webp')] bg-cover bg-center opacity-25"></div>

  <!-- Gradient blobs -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute top-16 left-10 w-64 h-64 bg-[#009688] opacity-20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-16 right-10 w-80 h-80 bg-[#FF6F3C] opacity-20 rounded-full blur-3xl"></div>
  </div>

  <!-- Badge -->
  <div class="absolute top-4 right-4 text-xs bg-[#5E3A87] text-white px-4 py-2 rounded-full shadow-md z-20 uppercase font-semibold max-w-xs text-center leading-snug">
    For Australian residents 18+ only. <br> Play responsibly.
  </div>

  <!-- Content -->
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-end">
      <div class="w-full md:w-2/3">
        <div class="bg-[#F4F1EC]/60 backdrop-blur-md rounded-2xl p-8 md:p-12 space-y-12 text-right shadow-lg">
          <div class="space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold text-[#5E3A87] leading-tight">
              Feeling Lucky, Australia?
            </h1>
            <h2 class="text-2xl md:text-3xl text-[#FF6F3C] font-semibold">
              Enter Official Draws with [CURRENT_DOMAIN_NO_TLD]
            </h2>
          </div>

          <div class="space-y-8">
            <p class="text-base md:text-lg text-[#1C1B1F]">
              Skip the queues and get in on the action from anywhere in the country. With [CURRENT_DOMAIN_NO_TLD], you can securely enter licensed Australian lotteries without creating an account or navigating complicated systems.
              Just choose your draw, lock in your ticket, and we’ll take care of the rest.
            </p>

            <a href="/cart" class="inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-lg px-10 py-4 rounded-full transition shadow-lg hover:shadow-xl">
              Get My Ticket
            </a>

            <p class="text-sm text-[#1C1B1F]/70 font-medium">
              100% local. No gimmicks. Just the real draws you know and trust — made easier.
            </p>

            <div class="text-[#5E3A87] font-bold text-lg animate-pulse">
              Next draw closes Friday, 7PM AEST — don’t miss it!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="how" class="bg-[#2B2D42] text-[#C0C9D7] py-28 px-4">
  <div class="max-w-5xl mx-auto space-y-20 text-center">
    
    <div class="space-y-4">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#FF6F3C] uppercase tracking-wide">
        How It Works
      </h2>
      <p class="max-w-2xl mx-auto text-base md:text-lg text-[#C0C9D7]/80">
        No accounts, no forms — just pick a draw, grab your ticket, and you’re all set.
        It’s fast, simple, and built for Aussies who like things straight-up.
      </p>
    </div>

    <div class="space-y-12 relative border-l-4 border-[#5E3A87] pl-6 md:pl-10">
      
      <div class="relative">
        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-[#5E3A87] border-2 border-white"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-1">1. Explore Draws</h3>
        <p class="text-sm text-[#C0C9D7]/80">
          Scroll through all current and upcoming licensed Aussie draws — from the big ones everyone’s talking about to smaller jackpots that close fast.
          Everything’s clearly listed with dates, times, and entry prices so you know exactly what you’re getting into.
        </p>
      </div>

      <div class="relative">
        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-[#5E3A87] border-2 border-white"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-1">2. Choose Tickets</h3>
        <p class="text-sm text-[#C0C9D7]/80">
          Pick how many tickets you want — go solo with one entry or stack a few for better odds. Everything goes straight into your cart with no fluff or fine print.
          Your selections are locked in, and you can review them before checkout.
        </p>
      </div>

      <div class="relative">
        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-[#5E3A87] border-2 border-white"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-1">3. Secure Checkout</h3>
        <p class="text-sm text-[#C0C9D7]/80">
          Pay securely using Aussie-friendly methods — no international charges, no hidden fees. We’ll send you an instant confirmation so you can relax knowing your ticket’s in.
          Your payment is encrypted and protected every step of the way.
        </p>
      </div>

      <div class="relative">
        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-[#5E3A87] border-2 border-white"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-1">4. Watch & Win</h3>
        <p class="text-sm text-[#C0C9D7]/80">
          That’s it — now just kick back and wait for the draw. If you’re lucky, we’ll shoot you an email with the good news. No need to refresh pages or dig through results.
          We’ve got your back from start to jackpot.
        </p>
      </div>

    </div>

    <p class="text-xs text-[#C0C9D7]/60 pt-6 border-t border-[#C0C9D7]/20 max-w-xl mx-auto">
      Available for Australian residents aged 18+. Please play responsibly.
    </p>
  </div>
</section>




<section id="countdown" class="bg-[#5E3A87] text-white py-16 px-4">
  <div class="max-w-5xl mx-auto text-center space-y-8">
    
    <h2 class="text-3xl md:text-4xl font-extrabold uppercase tracking-wide">
      Next Official Draw Closes In
    </h2>

    <div id="timer" class="flex justify-center gap-6 text-3xl md:text-5xl font-mono font-bold tracking-widest">
      <div><span id="days">--</span><div class="text-sm md:text-base mt-2 uppercase">Days</div></div>
      <div><span id="hours">--</span><div class="text-sm md:text-base mt-2 uppercase">Hours</div></div>
      <div><span id="minutes">--</span><div class="text-sm md:text-base mt-2 uppercase">Minutes</div></div>
      <div><span id="seconds">--</span><div class="text-sm md:text-base mt-2 uppercase">Seconds</div></div>
    </div>

    <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
      No logins. No delays. Just secure your ticket in a few taps and you're in the running. Every draw is fully licensed and 100% Aussie-backed — no dodgy stuff.
    </p>

    <a href="/cart" class="inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-lg px-10 py-4 rounded-full transition shadow-lg hover:shadow-xl">
      Join the Draw Now
    </a>
  </div>
</section>



<section id="about" class="bg-[#F4F1EC] text-[#1C1B1F] py-28 px-4">
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 items-center">

    <div class="md:col-span-2 space-y-8">
      <h2 class="text-4xl md:text-5xl font-extrabold uppercase text-[#5E3A87] tracking-wide">
        About [CURRENT_DOMAIN_NO_TLD]
      </h2>
      <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
        [CURRENT_DOMAIN_NO_TLD] was built right here in Australia — by locals, for locals. We created this platform so everyday Aussies could jump into official lottery draws with zero fuss. No international redirects, no random forms, no frustrating wait times.
      </p>
      <p class="text-base md:text-lg text-[#1C1B1F]/90 leading-relaxed">
        Everything we do is backed by full licensing and Aussie regulations. That means you can buy tickets with confidence, knowing it’s all above board. Whether you're feeling lucky for the first time or play every week, we make it easy, fair, and fully transparent.
      </p>
      <a href="/#how" class="inline-block text-[#FF6F3C] hover:text-[#e25b28] font-semibold uppercase tracking-wide transition">
        How It Works →
      </a>
    </div>

    <div class="rounded-2xl overflow-hidden shadow-xl bg-cover bg-center aspect-square" style="background-image: url('img/about.webp');">
      
    </div>

  </div>
</section>

<section id="reviews" class="bg-[#2B2D42] text-[#C0C9D7] py-28 px-4">
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 items-start">

    
    <div class="md:col-span-2 space-y-6">
      <div class="space-y-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-[#FF6F3C] uppercase tracking-wide text-center md:text-left">
          What Players Say
        </h2>
        <p class="max-w-2xl mx-auto md:mx-0 text-base md:text-lg text-[#C0C9D7]/80 text-center md:text-left">
          Genuine words from Aussies who gave it a go — and loved how easy it was.
        </p>
      </div>

      <div class="grid grid-cols-1 gap-6">
        <div class="bg-[#1C1F2A] p-6 rounded-2xl shadow-lg">
          <p class="text-sm leading-relaxed mb-4">
            “Did it on my phone over brekkie. No signup, no stress — just got my numbers in and went about my day. Love that it's actually Aussie-run too.”
          </p>
          <span class="text-sm font-semibold text-[#FF6F3C]">— Tahlia B., SA</span>
        </div>
        <div class="bg-[#1C1F2A] p-6 rounded-2xl shadow-lg">
          <p class="text-sm leading-relaxed mb-4">
            “So much smoother than the old ways. No forms, no accounts. Took me less than a minute and I had my ticket ready to go.”
          </p>
          <span class="text-sm font-semibold text-[#FF6F3C]">— Dan M., TAS</span>
        </div>
        <div class="bg-[#1C1F2A] p-6 rounded-2xl shadow-lg">
          <p class="text-sm leading-relaxed mb-4">
            “Honestly impressed. Clean interface, super clear steps, and I got my confirmation straight away. This is how it should be done.”
          </p>
          <span class="text-sm font-semibold text-[#FF6F3C]">— Ayesha N., WA</span>
        </div>
        <div class="bg-[#1C1F2A] p-6 rounded-2xl shadow-lg">
          <p class="text-sm leading-relaxed mb-4">
            “I wasn’t sure at first, but everything checked out. The site’s fast, feels safe, and yeah — I’m in for next week’s draw too.”
          </p>
          <span class="text-sm font-semibold text-[#FF6F3C]">— Reece J., QLD</span>
        </div>
      </div>
    </div>

    
    <div class="space-y-6 self-start pt-[84px]">
      <h3 class="text-2xl font-bold text-[#5E3A87] text-center md:text-left">
        Share Your Experience
      </h3>
      <form id="reviewForm" class="space-y-6">
        <input type="text" id="name" placeholder="Your Name" required
          class="w-full bg-[#1C1F2A] border border-[#009688] rounded-xl px-5 py-3 text-sm text-white placeholder-[#C0C9D7]/50 focus:outline-none focus:ring-2 focus:ring-[#009688]" />
        <textarea id="message" placeholder="Your Review" required rows="4"
          class="w-full bg-[#1C1F2A] border border-[#009688] rounded-xl px-5 py-3 text-sm text-white placeholder-[#C0C9D7]/50 focus:outline-none focus:ring-2 focus:ring-[#009688]"></textarea>
        <button type="submit"
          class="bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-sm px-8 py-3 rounded-full transition shadow-lg hover:shadow-xl w-full">
          Submit Review
        </button>
        <p id="reviewSuccess" class="text-sm text-[#5E3A87] font-semibold mt-4 hidden">
          Thanks! Your review has been received.
        </p>
      </form>
    </div>

  </div>
</section>

<section id="why" class="bg-[#F4F1EC] text-[#1C1B1F] py-28 px-4">
  <div class="max-w-7xl mx-auto space-y-20">

    <div class="text-center md:text-left md:max-w-2xl space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] uppercase tracking-wide">
        Why Choose Us
      </h2>
      <p class="text-lg text-[#1C1B1F]/80">
        No clutter. No confusion. At <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, everything’s built for Aussies who just want a fair go — with local support, full transparency, and absolutely no overseas nonsense.
      </p>
      <a href="/cart" class="inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-base px-8 py-3 rounded-full transition shadow-md hover:shadow-lg">
        Go to Cart
      </a>
    </div>

    <div class="relative pl-4 md:pl-0 md:before:content-[''] md:before:absolute md:before:top-5 md:before:left-0 md:before:h-[4px] md:before:w-full md:before:bg-[#5E3A87]/30 grid md:grid-cols-4 gap-10">

      <div class="relative md:text-center md:before:content-[''] md:before:absolute md:before:left-1/2 md:before:top-[-32px] md:before:-translate-x-1/2 md:before:w-4 md:before:h-4 md:before:rounded-full md:before:bg-[#5E3A87]">
        <div class="bg-white rounded-2xl p-6 shadow-lg h-full">
          <h3 class="text-lg font-bold text-[#5E3A87] mb-2">No Accounts Required</h3>
          <p class="text-sm text-[#1C1B1F]/80 leading-relaxed">
            We keep it simple — no signups or passwords to remember. Just pick your draw, enter your info, and you’re good to go. Real convenience, no strings.
          </p>
        </div>
      </div>

      <div class="relative md:text-center md:before:content-[''] md:before:absolute md:before:left-1/2 md:before:top-[-32px] md:before:-translate-x-1/2 md:before:w-4 md:before:h-4 md:before:rounded-full md:before:bg-[#5E3A87]">
        <div class="bg-white rounded-2xl p-6 shadow-lg h-full">
          <h3 class="text-lg font-bold text-[#5E3A87] mb-2">Built for Australia</h3>
          <p class="text-sm text-[#1C1B1F]/80 leading-relaxed">
            Proudly Aussie-owned and operated. We know the local rules, local draws, and what fair play means down here — no international loopholes or grey zones.
          </p>
        </div>
      </div>

      <div class="relative md:text-center md:before:content-[''] md:before:absolute md:before:left-1/2 md:before:top-[-32px] md:before:-translate-x-1/2 md:before:w-4 md:before:h-4 md:before:rounded-full md:before:bg-[#5E3A87]">
        <div class="bg-white rounded-2xl p-6 shadow-lg h-full">
          <h3 class="text-lg font-bold text-[#5E3A87] mb-2">Fast Ticket Delivery</h3>
          <p class="text-sm text-[#1C1B1F]/80 leading-relaxed">
            Once your payment’s confirmed, your entry lands in your inbox straight away. No waiting, no chasing — just instant peace of mind.
          </p>
        </div>
      </div>

      <div class="relative md:text-center md:before:content-[''] md:before:absolute md:before:left-1/2 md:before:top-[-32px] md:before:-translate-x-1/2 md:before:w-4 md:before:h-4 md:before:rounded-full md:before:bg-[#5E3A87]">
        <div class="bg-white rounded-2xl p-6 shadow-lg h-full">
          <h3 class="text-lg font-bold text-[#5E3A87] mb-2">Trusted Aussie Payments</h3>
          <p class="text-sm text-[#1C1B1F]/80 leading-relaxed">
            All payments go through secure, Australia-based processors. Fully encrypted. Fully legit. So you can enter with confidence every time.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="draws" class="bg-[#F4F1EC] text-[#1C1B1F] py-28 px-4">
  <div class="max-w-7xl mx-auto space-y-20">

    <div class="text-center space-y-4">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] uppercase tracking-wide">
        Upcoming Draws
      </h2>
      <p class="max-w-2xl mx-auto text-base md:text-lg text-[#1C1B1F]/80">
        Backed by Australian regulations. No clutter, no gotchas — just pick a draw, confirm your ticket, and you’re in.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      

      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#E6E4DE]">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Friday, 5 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Aussie Powerball</h3>
          <div class="text-3xl font-extrabold text-[#FF6F3C]">$5,000,000</div>
          <p class="text-sm text-[#1C1B1F]/70 leading-relaxed">
            One of Australia’s biggest weekly jackpots. A single ticket could change your year — or your life.
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Get Ticket
        </a>
      </div>


      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#E6E4DE]">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Tuesday, 9 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Oz Lotto</h3>
          <div class="text-3xl font-extrabold text-[#FF6F3C]">$3,200,000</div>
          <p class="text-sm text-[#1C1B1F]/70 leading-relaxed">
            The original midweek mega draw. Licensed, secure, and made for Aussie players. Entries close soon!
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          Enter Draw
        </a>
      </div>


      <div class="bg-[#FFFFFF] rounded-2xl p-6 shadow-[0_8px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-full border border-[#E6E4DE]">
        <div class="space-y-3">
          <p class="text-sm font-semibold text-[#009688] uppercase tracking-wide">Saturday, 6 July</p>
          <h3 class="text-xl font-bold text-[#5E3A87]">Saturday Lotto</h3>
          <div class="text-3xl font-extrabold text-[#FF6F3C]">$1,000,000</div>
          <p class="text-sm text-[#1C1B1F]/70 leading-relaxed">
            Australia’s favourite weekend draw — with regular million-dollar wins and simple entry options.
          </p>
        </div>
        <a href="/cart" class="mt-6 inline-block bg-[#5E3A87] hover:bg-[#4a2f6d] text-white font-bold text-sm px-6 py-3 rounded-full transition shadow hover:shadow-lg text-center">
          View Options
        </a>
      </div>

    </div>
  </div>
</section>

<section id="faq-cta" class="bg-[#FFFFFF] text-[#1C1B1F] py-20 px-4">
  <div class="max-w-6xl mx-auto text-center space-y-8">

    <h2 class="text-3xl md:text-4xl font-extrabold text-[#5E3A87] uppercase tracking-wide">
      Got Questions?
    </h2>

    <p class="text-base md:text-lg max-w-2xl mx-auto text-[#1C1B1F]/80">
      We've designed everything to be clear and hassle-free — but if you're still wondering how tickets work, how to pay, or what to expect, our FAQ has you covered.
    </p>

    <a href="#faq" class="inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-sm md:text-base px-8 py-4 rounded-full transition shadow-md hover:shadow-lg">
      View Frequently Asked Questions
    </a>

  </div>
</section>

<section id="final-cta" class="bg-[#2B2D42] text-[#F4F1EC] py-28 px-4 text-center">
  <div class="max-w-4xl mx-auto space-y-10">

    <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] leading-tight">
      Ready for the Next Official Draw?
    </h2>

    <p class="text-base md:text-lg text-[#F4F1EC]/80 max-w-2xl mx-auto">
      It only takes a minute to lock in your entry — no signup needed. Aussie-run, fully licensed, and built to make lottery draws simple, safe, and stress-free.
    </p>

    <a href="/cart" class="inline-block bg-[#FF6F3C] hover:bg-[#e25b28] text-white font-bold text-lg px-10 py-4 rounded-full transition shadow-md hover:shadow-lg">
      Go to Cart
    </a>
  </div>
</section>

<section id="responsible" class="bg-[#F4F1EC] text-[#1C1B1F] py-28 px-4">
  <div class="max-w-7xl mx-auto space-y-20">

    <div class="text-center space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#5E3A87] uppercase tracking-wide">
        Responsible Play
      </h2>
      <p class="text-base md:text-lg max-w-2xl mx-auto text-[#1C1B1F]/80">
        Playing should always feel good. At <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, we make sure every Aussie has the tools and info to play smart, stay in control, and enjoy the experience safely.
      </p>
    </div>

    <div class="relative space-y-20 max-w-3xl mx-auto">

      <div class="absolute top-1 left-2.5 h-full w-px bg-[#C0C9D7]/50"></div>

      <div class="relative pl-10 text-center">
        <div class="absolute left-1 top-1.5 w-3 h-3 rounded-full bg-[#009688] z-10"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-2">18+ Participation Only</h3>
        <p class="text-sm text-[#1C1B1F]/80">
          You must be 18 or over to use this service — no exceptions. We run mandatory age checks on every draw to keep things legally compliant and safe for everyone.
        </p>
      </div>

      <div class="relative pl-10 text-center">
        <div class="absolute left-1 top-1.5 w-3 h-3 rounded-full bg-[#009688] z-10"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-2">Set Personal Limits</h3>
        <p class="text-sm text-[#1C1B1F]/80">
          It’s all about balance. Only play what you’re comfy spending — never more. If you ever feel like you’re playing too often, it’s okay to pause. The next draw will still be there tomorrow.
        </p>
      </div>

      <div class="relative pl-10 text-center">
        <div class="absolute left-1 top-1.5 w-3 h-3 rounded-full bg-[#009688] z-10"></div>
        <h3 class="text-xl font-bold text-[#FF6F3C] mb-2">Support Is Always Available</h3>
        <p class="text-sm text-[#1C1B1F]/80">
          If you or someone you know is struggling with play, help is here. Visit 
          <a href="https://www.gamblinghelponline.org.au/" target="_blank" class="underline text-[#5E3A87] hover:text-[#FF6F3C]">
            Gambling Help Online
          </a> — it’s free, private, and available across Australia 24/7.
        </p>
      </div>
    </div>

    <p class="text-xs text-[#1C1B1F]/60 text-center">
      <strong>[CURRENT_DOMAIN_NO_TLD]</strong> supports the National Consumer Protection Framework and is committed to safe, fair, and transparent participation for all eligible Aussies.
    </p>

  </div>
</section>

<section id="contact" class="bg-[#2B2D42] text-[#C0C9D7] py-24 px-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">

    <div class="space-y-6">
      <h2 class="text-3xl md:text-4xl font-extrabold text-[#5E3A87] uppercase tracking-wide">
        Get In Touch
      </h2>
      <p class="text-base text-[#C0C9D7]/80">
        Got a question or hit a snag with your ticket? Our Melbourne-based support team is here to help — real people, real answers.
      </p>

      <div class="space-y-4 text-sm text-[#C0C9D7]/90">
        <div>
          <p class="font-bold text-[#009688]">Phone</p>
          <p>
            <a href="tel:+61280124468" class="underline hover:text-[#FF6F3C]">
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
          <p class="font-bold text-[#009688]">Office</p>
          <p>Level 2, 210 Collins Street<br>Melbourne VIC 3000</p>
        </div>
      </div>

      <p class="text-xs text-[#C0C9D7]/60 pt-6 border-t border-[#2C2F3A]">
        For Australian residents 18+ only. We operate under national policies for digital security, privacy, and responsible play.
      </p>
    </div>

    <div class="bg-[#1C1F2A] rounded-2xl p-8 md:p-10 border border-[#2C2F3A] shadow-[0_0_25px_#00F0FF]/10 space-y-5">
      <h3 class="text-xl font-bold text-[#FFD700] uppercase tracking-wide">Send a Message</h3>
      <form id="contactForm" class="space-y-4">
        <input type="text" placeholder="Full Name" required
          class="w-full bg-[#121826] border border-[#2C2F3A] rounded px-4 py-3 text-[#C0C9D7] focus:outline-none focus:ring-2 focus:ring-[#009688]">
        <input type="email" placeholder="Email Address" required
          class="w-full bg-[#121826] border border-[#2C2F3A] rounded px-4 py-3 text-[#C0C9D7] focus:outline-none focus:ring-2 focus:ring-[#009688]">
        <select required
          class="w-full bg-[#121826] border border-[#2C2F3A] rounded px-4 py-3 text-[#C0C9D7] focus:outline-none focus:ring-2 focus:ring-[#009688]">
          <option value="">Select Topic</option>
          <option>Login Help</option>
          <option>Billing</option>
          <option>Draw or Ticket Issue</option>
          <option>Other</option>
        </select>
        <textarea rows="5" placeholder="Your Message" required
          class="w-full bg-[#121826] border border-[#2C2F3A] rounded px-4 py-3 text-[#C0C9D7] focus:outline-none focus:ring-2 focus:ring-[#009688]"></textarea>
        <button type="submit"
          class="w-full bg-[#FF6F3C] hover:bg-[#e65c25] text-white font-bold py-3 rounded-full transition">
          Submit
        </button>
        <p id="contactSuccess" class="hidden text-sm text-[#00F0FF] mt-2">Thanks — we’ll reply soon.</p>
      </form>
    </div>

  </div>
</section>

<section id="awareness" class="py-24 bg-[#F4F1EC] text-[#1C1B1F]">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">

      
      <a href="https://resetapp.com.au/">
        <div class="bg-white rounded-2xl shadow-md px-6 py-8 transition-transform hover:scale-105 hover:shadow-lg ">
          <img src="img/reset.webp" alt="Self-Exclusion Tool"
               class="h-14 mx-auto mb-4">
          <p class="text-sm font-semibold text-[#00F0FF]">Self-Exclusion</p>
      </a>
      </div>

      <a href="https://www.gambleaware.nsw.gov.au/" target="_blank" rel="noopener noreferrer"
         class="bg-white rounded-2xl shadow-md px-6 py-8 transition-transform hover:scale-105 hover:shadow-lg block">
        <img src="img/gamble.webp" alt="GambleAware NSW"
             class="h-12 mx-auto mb-4">
        <p class="text-sm font-semibold text-[#FFD700]">GambleAware NSW</p>
      </a>

      
      <a href="https://gamblershelp.com.au/" target="_blank" rel="noopener noreferrer"
         class="bg-white rounded-2xl shadow-md px-6 py-8 transition-transform hover:scale-105 hover:shadow-lg  block">
        <img src="img/gamblers.webp" alt="Gambler’s Help"
             class="h-14 mx-auto mb-4">
        <p class="text-sm font-semibold text-[#5E3A87]">Gambler’s Help</p>
      </a>

      
      <div class="bg-white rounded-2xl shadow-md px-6 py-8 transition-transform hover:scale-105 hover:shadow-lg ">
        <img src="img/18.svg" alt="18+ Only"
             class="h-14 mx-auto mb-4">
        <p class="text-sm font-semibold text-[#FF6F3C]">18+ Only</p>
      </div>

    </div>
  </div>
</section>


</main>
<?php include "footer.php"; ?>