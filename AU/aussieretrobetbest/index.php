<?php include "header.php"; ?>
<main>

<section id="2hero" class="relative bg-[#0B0B0B] text-[#EAEAEA]" 
         style="background-image: url('img/hero_bg.webp'); background-size: cover; background-position: center; min-height: 80vh;">
  <div class="relative max-w-7xl mx-auto px-4 py-24 md:py-40">
    <div class="inline-block w-full md:w-auto rounded-lg shadow-lg"
         style="background-color: rgba(0,0,0,0.6); padding: 32px 24px;">
      <h1 class="font-['Bebas_Neue'] text-white text-5xl md:text-7xl leading-none tracking-wide">
        [CURRENT_DOMAIN_NO_TLD]
      </h1>
      <p class="mt-4 text-gray-300 text-lg md:text-xl max-w-3xl">
        Discover the reimagined spirit of Australian lotteries in a bold monochrome design. 
        Enjoy the excitement of the draw, the charm of vintage Sydney, and the confidence of a platform crafted for players who value clarity, style, and integrity.
      </p>
      <p class="mt-6 font-semibold tracking-wide text-2xl md:text-3xl" style="color: #00A3FF;">
        Fair. Fast. Responsible.
      </p>
      <div class="mt-10 flex items-center gap-4">
        <a href="#4how"
           class="inline-flex items-center px-6 py-3 border border-white bg-white text-[#0B0B0B] hover:bg-transparent hover:text-white transition focus:outline-none focus:ring-2"
           style="outline-color: #00A3FF;">
          How It Works
        </a>
        <a href="#" data-modal-open="login"
           class="inline-flex items-center px-6 py-3 border border-gray-400 text-gray-100 hover:border-white transition focus:outline-none focus:ring-2"
           style="outline-color: #00A3FF;">
          Sign In
        </a>
      </div>
    </div>
  </div>
</section>

<section id="3about" class="bg-[#F5F5F5] text-[#0B0B0B] py-20 px-4">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="p-6 md:p-8 rounded-lg" style="background:#fff;box-shadow:0 8px 24px rgba(0,0,0,.06);">
      <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl mb-6 tracking-wide uppercase">
        About [CURRENT_DOMAIN_NO_TLD]
      </h2>
      <p class="text-lg text-gray-700 mb-4">
        <strong>[CURRENT_DOMAIN_NO_TLD]</strong> redefines the Australian lottery experience with a sleek monochrome aesthetic and modern usability. 
        We blend the nostalgia of classic design with the efficiency of today’s technology, giving players a space that feels both stylish and straightforward.
      </p>
      <p class="text-lg text-gray-700 mb-4">
        Our commitment is clear — delivering a transparent, compliant, and responsible platform where every draw is fair, secure, and easy to follow.
      </p>
      <p class="text-lg text-gray-700 mb-4">
        With every feature built locally and aligned to Australian standards, we ensure your play is backed by trust, clarity, and confidence.
      </p>
      <p class="mt-6 text-xl font-semibold tracking-wide" style="color:#00A3FF;">
        Created in Australia. Made for players everywhere.
      </p>
    </div>
    <div class="flex justify-center">
      <img src="img/about.webp" alt="[CURRENT_DOMAIN_NO_TLD] About Section" class="w-full max-w-md grayscale rounded-lg" style="box-shadow:0 8px 24px rgba(0,0,0,.15);" />
    </div>
  </div>
</section>

<section id="4how" class="bg-[#0B0B0B] text-[#EAEAEA] py-20 px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wide mb-12 uppercase">
      How It Works
    </h2>
    <div class="grid md:grid-cols-4 gap-8">
      <div class="group flex flex-col items-center text-center p-6 bg-[#111214] rounded-lg border border-gray-800 transition-all duration-200">
        <img src="img/how1.webp" alt="Choose Your Lottery" class="w-16 h-16 mb-4 grayscale transition duration-200">
        <h3 class="text-lg font-semibold mb-2">Choose Your Lottery</h3>
        <p class="text-gray-400 text-sm">Browse our range of official Australian lottery draws and pick the one that suits you best.</p>
      </div>
      <div class="group flex flex-col items-center text-center p-6 bg-[#111214] rounded-lg border border-gray-800 transition-all duration-200">
        <img src="img/how2.webp" alt="Select Numbers" class="w-16 h-16 mb-4 grayscale transition duration-200">
        <h3 class="text-lg font-semibold mb-2">Select Your Numbers</h3>
        <p class="text-gray-400 text-sm">Pick your favourite numbers or let our quick pick option generate them for you instantly.</p>
      </div>
      <div class="group flex flex-col items-center text-center p-6 bg-[#111214] rounded-lg border border-gray-800 transition-all duration-200">
        <img src="img/how3.webp" alt="Wait for the Draw" class="w-16 h-16 mb-4 grayscale transition duration-200">
        <h3 class="text-lg font-semibold mb-2">Wait for the Draw</h3>
        <p class="text-gray-400 text-sm">Your ticket is stored securely. Simply wait for the official draw date and time.</p>
      </div>
      <div class="group flex flex-col items-center text-center p-6 bg-[#111214] rounded-lg border border-gray-800 transition-all duration-200">
        <img src="img/how4.webp" alt="Check Results" class="w-16 h-16 mb-4 grayscale transition duration-200">
        <h3 class="text-lg font-semibold mb-2">Check the Results</h3>
        <p class="text-gray-400 text-sm">View the latest results directly on [CURRENT_DOMAIN_NO_TLD] and always play responsibly.</p>
      </div>
    </div>
  </div>
  <style>
    #4how .group:hover {
      border-color: #00A3FF;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, .25), 0 0 0 2px rgba(0, 163, 255, .15) inset;
    }
    #4how .group:hover img {
      filter: grayscale(0);
    }
  </style>
</section>

<section id="5advantages" class="bg-[#F5F5F5] text-[#0B0B0B] py-20 px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wide mb-12 uppercase">
      Why Choose [CURRENT_DOMAIN_NO_TLD]
    </h2>
    <div class="grid md:grid-cols-3 gap-8">
      
      <div class="group p-6 rounded-lg border border-gray-300 bg-white transition-all duration-200"
           style="box-shadow:0 4px 16px rgba(0,0,0,.08);">
        <img src="img/advantage1.webp" alt="Licensed and Regulated" class="w-14 h-14 mb-4 grayscale transition duration-200" />
        <h3 class="text-xl font-semibold mb-2">Licensed & Regulated</h3>
        <p class="text-gray-600 text-sm">
          Operates under Australian regulations with full transparency and strict compliance to protect players at every step.
        </p>
      </div>
      
      <div class="group p-6 rounded-lg border border-gray-300 bg-white transition-all duration-200"
           style="box-shadow:0 4px 16px rgba(0,0,0,.08);">
        <img src="img/advantage2.webp" alt="Quick and Secure Payouts" class="w-14 h-14 mb-4 grayscale transition duration-200" />
        <h3 class="text-xl font-semibold mb-2">Quick & Secure Payouts</h3>
        <p class="text-gray-600 text-sm">
          Winnings are processed promptly through trusted payment channels, ensuring both speed and safety for every transaction.
        </p>
      </div>
      
      <div class="group p-6 rounded-lg border border-gray-300 bg-white transition-all duration-200"
           style="box-shadow:0 4px 16px rgba(0,0,0,.08);">
        <img src="img/advantage3.webp" alt="Commitment to Responsible Play" class="w-14 h-14 mb-4 grayscale transition duration-200" />
        <h3 class="text-xl font-semibold mb-2">Commitment to Responsible Play</h3>
        <p class="text-gray-600 text-sm">
          Tools, guidance, and support are in place to help players maintain control and enjoy the experience responsibly.
        </p>
      </div>
      
    </div>
  </div>
  <style>
    #5advantages .group:hover {
      border-color: #00A3FF;
      box-shadow: 0 8px 24px rgba(0,0,0,.15), 0 0 0 2px rgba(0,163,255,.15) inset;
      transform: translateY(-2px);
    }
    #5advantages .group:hover img { filter: grayscale(0); }
  </style>
</section>

<section id="6results" class="bg-[#0B0B0B] text-[#EAEAEA] py-20 px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wide mb-12 uppercase">
      Latest Lottery Results
    </h2>
    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-800 text-left" style="border-collapse:separate;border-spacing:0;">
        <thead class="bg-[#111214]">
          <tr>
            <th class="px-6 py-4 border-b border-gray-700">Lottery</th>
            <th class="px-6 py-4 border-b border-gray-700">Draw Date</th>
            <th class="px-6 py-4 border-b border-gray-700">Winning Numbers</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-[#111214] transition">
            <td class="px-6 py-4 border-b border-gray-800">Oz Lotto</td>
            <td class="px-6 py-4 border-b border-gray-800 result-date" data-offset="1"></td>
            <td class="px-6 py-4 border-b border-gray-800">
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">7</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">15</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">22</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">33</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9">41</span>
            </td>
          </tr>
          <tr class="hover:bg-[#111214] transition">
            <td class="px-6 py-4 border-b border-gray-800">Powerball</td>
            <td class="px-6 py-4 border-b border-gray-800 result-date" data-offset="2"></td>
            <td class="px-6 py-4 border-b border-gray-800">
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">4</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">19</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">28</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">34</span>
              <span class="inline-block w-9 h-9 border border-[#00A3FF] text-center leading-9 font-semibold">PB</span>
            </td>
          </tr>
          <tr class="hover:bg-[#111214] transition">
            <td class="px-6 py-4">Sydney Lotto</td>
            <td class="px-6 py-4 result-date" data-offset="3"></td>
            <td class="px-6 py-4">
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">3</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">11</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">26</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9 mr-1">39</span>
              <span class="inline-block w-9 h-9 border border-gray-500 text-center leading-9">44</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-8">
      <a href="#" data-modal-open="login" class="inline-flex items-center px-6 py-3 border border-white text-[#0B0B0B] bg-white hover:bg-transparent hover:text-white transition focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
        View All Results
      </a>
    </div>
  </div>
  <style>
    #6results table span:hover { border-color: #00A3FF; color: #00A3FF; }
  </style>
</section>

<section id="8testimonials" class="bg-[#F5F5F5] text-[#0B0B0B] py-20 px-4">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12">
    <div>
      <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wide mb-8 uppercase">What Our Players Say</h2>
      <div id="reviews" class="space-y-6">
        <article class="p-6 rounded-xl bg-white border border-gray-200" style="box-shadow:0 8px 24px rgba(0,0,0,.06);">
          <div class="flex items-start gap-4">
            <img src="img/user.webp" alt="Taylor from Sydney" class="h-12 w-12 rounded-full grayscale object-cover">
            <div>
              <div class="flex items-center gap-2">
                <h3 class="font-semibold">Taylor</h3>
                <span class="text-xs text-gray-500">Sydney</span>
              </div>
              <p class="mt-2 text-gray-700 text-sm">
                Love the clean layout — results and draw info are easy to follow. The monochrome style makes it feel premium and timeless.
              </p>
            </div>
          </div>
        </article>
        <article class="p-6 rounded-xl bg-white border border-gray-200" style="box-shadow:0 8px 24px rgba(0,0,0,.06);">
          <div class="flex items-start gap-4">
            <img src="img/user.webp" alt="Jordan from Melbourne" class="h-12 w-12 rounded-full grayscale object-cover">
            <div>
              <div class="flex items-center gap-2">
                <h3 class="font-semibold">Jordan</h3>
                <span class="text-xs text-gray-500">Melbourne</span>
              </div>
              <p class="mt-2 text-gray-700 text-sm">
                The process is simple and transparent. I appreciate the clear information about responsible play and player safeguards.
              </p>
            </div>
          </div>
        </article>
        <article class="p-6 rounded-xl bg-white border border-gray-200" style="box-shadow:0 8px 24px rgba(0,0,0,.06);">
          <div class="flex items-start gap-4">
            <img src="img/user.webp" alt="Sam from Brisbane" class="h-12 w-12 rounded-full grayscale object-cover">
            <div>
              <div class="flex items-center gap-2">
                <h3 class="font-semibold">Sam</h3>
                <span class="text-xs text-gray-500">Brisbane</span>
              </div>
              <p class="mt-2 text-gray-700 text-sm">
                Easy to navigate and quick to check results. The platform’s speed and clarity make it stand out from others.
              </p>
            </div>
          </div>
        </article>
      </div>
    </div>

    <div>
      <h3 class="font-['Bebas_Neue'] text-3xl tracking-wide mb-6 uppercase">Leave a Review</h3>
      <form id="review-form" class="space-y-4 p-6 rounded-xl bg-white border border-gray-200" style="box-shadow:0 8px 24px rgba(0,0,0,.06);">
        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label for="rev-name" class="block text-sm font-medium text-[#0B0B0B]">Name</label>
            <input id="rev-name" name="name" type="text" required
                   class="mt-1 w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2"
                   style="outline-color:#00A3FF;">
          </div>
          <div>
            <label for="rev-city" class="block text-sm font-medium text-[#0B0B0B]">City</label>
            <input id="rev-city" name="city" type="text"
                   class="mt-1 w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2"
                   style="outline-color:#00A3FF;">
          </div>
        </div>
        <div>
          <label for="rev-rating" class="block text-sm font-medium text-[#0B0B0B]">Rating</label>
          <select id="rev-rating" name="rating" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded bg-white focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
            <option value="5">★★★★★</option>
            <option value="4">★★★★☆</option>
            <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
        </div>
        <div>
          <label for="rev-text" class="block text-sm font-medium text-[#0B0B0B]">Your Review</label>
          <textarea id="rev-text" name="message" rows="4" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2"
                    style="outline-color:#00A3FF;"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <div class="text-xs text-gray-500">By submitting, you agree to provide fair, respectful, and authentic feedback.</div>
          <button id="rev-send" type="submit"
                  class="inline-flex items-center px-5 py-2 border border-[#0B0B0B] text-[#0B0B0B] bg-white hover:text-white hover:bg-[#0B0B0B] transition focus:outline-none focus:ring-2"
                  style="outline-color:#00A3FF;">
            Send
          </button>
        </div>
        <div id="review-status" class="hidden mt-3 text-sm"></div>
      </form>
    </div>
  </div>
</section>

<section id="7faq" class="bg-[#F5F5F5] text-[#0B0B0B] py-20 px-4">
<div class="max-w-4xl mx-auto">
    <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wide mb-10 uppercase">FAQ</h2>

    <div class="space-y-4" style="box-shadow:0 8px 24px rgba(0,0,0,.06); background:#fff; border-radius:12px; padding:8px;">
      
      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">What is [CURRENT_DOMAIN_NO_TLD]?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is a secure, monochrome, retro-inspired online platform designed to showcase official Australian lotteries in a stylish and easy-to-navigate format. 
          It provides draw schedules, past results, and guidance on responsible play — all in line with Australian advertising and privacy regulations. We focus on transparency, accessibility, and user-friendly design, without offering direct gambling services.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">How does it work?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          The process is simple:  
          1) Select the lottery you’re interested in.  
          2) Pick your numbers manually or use the quick-pick feature for random selection.  
          3) Keep track of the official draw date and time.  
          4) Check results directly on <strong>[CURRENT_DOMAIN_NO_TLD]</strong>.  
          We provide an updated results section and clear, mobile-friendly layouts so you can follow the action anywhere.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">Is this a real-money gambling site?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          No. <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is not a gambling operator and does not process bets or payments.  
          Our role is to provide promotional and educational content about official Australian lotteries, helping players understand the games, rules, and results. We always encourage visitors to participate only via authorised and licensed operators and to follow local laws.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">Which lotteries are featured?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          We cover a range of popular Australian draws, including Oz Lotto, Powerball, Monday, Wednesday, and Saturday Lotto, as well as Sydney-based draws.  
          Each listing includes the draw date, winning numbers, and jackpot information when available. The selection may expand over time as new games are introduced.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">Where can I see recent results?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          The <em>Results</em> section on <strong>[CURRENT_DOMAIN_NO_TLD]</strong> displays the most recent draws in a clean table format.  
          Numbers are updated dynamically based on the draw date, and we include special indicators for bonus or Powerball numbers where applicable. This makes it easy to track outcomes without scrolling through outdated posts.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">Do you support responsible play?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          Yes. We actively promote safe and responsible lottery participation.  
          Our Responsible Play page includes 18+ age guidance, self-exclusion options, budget-setting advice, and direct links to official Australian support services such as Gambling Help Online.  
          We believe lottery play should remain a form of entertainment — never a financial strategy.
        </div>
      </div>

      <div class="border border-gray-200 rounded-lg">
        <button data-acc="btn" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none focus:ring-2" style="outline-color:#00A3FF;">
          <span class="font-semibold">How do I contact support?</span>
          <svg class="w-5 h-5" data-acc="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
        <div data-acc="panel" class="hidden px-5 pt-4 pb-5 text-sm text-gray-700 border-t border-gray-200">
          You can reach us by using the <em>Contact</em> link in the footer or through the contact form on <strong>[CURRENT_DOMAIN_NO_TLD]</strong>.  
          Our team aims to respond to all inquiries within 2–3 business days. For urgent matters related to responsible play, please use the direct helpline numbers provided on our Responsible Play page.
        </div>
      </div>
    </div>
</div>

  <style>
    #7faq [data-acc="btn"]:hover { background:#F9FAFB; }
    #7faq [data-acc="panel"] { border-top:1px solid #E5E7EB; }
    #7faq .open [data-acc="icon"] path:first-child { display:none; }
    #7faq .open { border-color:#00A3FF; box-shadow:0 0 0 2px rgba(0,163,255,.12) inset; }
  </style>
</section>

<section id="9responsible" class="relative text-[#EAEAEA] py-20 px-4 bg-cover bg-center" style="background: linear-gradient(to bottom, #F5F5F5, #0B0B0B);">

  <div class="relative max-w-6xl mx-auto space-y-16 font-['Inter']">
    
    <!-- Header -->
    <div class="text-center space-y-3">
      <h2 class="text-4xl md:text-5xl font-extrabold uppercase tracking-wider font-['Bebas_Neue'] text-white">
        Responsible Play Commitment
      </h2>
      <p class="text-base md:text-lg text-gray-300 max-w-3xl mx-auto">
        A message from the team at <strong>[CURRENT_DOMAIN_NO_TLD]</strong>: We believe lottery play should be a safe and enjoyable experience. Our mission is to provide fair access, clear rules, and to uphold a duty of care for all Australians.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 gap-12 text-lg leading-relaxed">
      
      <!-- Column 1 -->
      <div class="space-y-8">
        <div>
          <h3 class="font-bold uppercase mb-3 text-[#00A3FF] border-b border-gray-700 pb-2">Adults Only – 18+</h3>
          <p class="text-gray-300">
            Participation in all lottery draws is restricted to individuals aged 18 and over. We conduct age verification to ensure compliance with Australian law. Remember — gambling should remain a form of entertainment, never a way to earn income or cover expenses.
          </p>
        </div>

        <div>
          <h3 class="font-bold uppercase mb-3 text-[#00A3FF] border-b border-gray-700 pb-2">Self-Exclusion Register</h3>
          <p class="text-gray-300">
            We endorse and promote <a href="https://www.betstop.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">BetStop.gov.au</a> — the official national self-exclusion register. This confidential and free service allows individuals to block themselves from all licensed Australian gambling providers for periods ranging from 3 months to lifetime bans.
          </p>
        </div>
      </div>

      <!-- Column 2 -->
      <div class="space-y-8">
        <div>
          <h3 class="font-bold uppercase mb-3 text-[#00A3FF] border-b border-gray-700 pb-2">Support & Guidance</h3>
          <p class="text-gray-300">
            If you ever feel that gambling is no longer fun or is affecting your life, contact <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">GambleAware NSW</a> or call <strong>1800 858 858</strong>. These services are free, confidential, and available 24/7, offering counselling, information, and practical tools to help you stay in control.
          </p>
        </div>

        <div>
          <h3 class="font-bold uppercase mb-3 text-[#00A3FF] border-b border-gray-700 pb-2">Legal & Ethical</h3>
          <p class="text-gray-300">
            <strong>[CURRENT_DOMAIN_NO_TLD]</strong> operates in line with Australian gaming legislation and is subject to regular compliance checks. We prioritise transparency, player privacy, and ethical standards, ensuring all promotional content is accurate and not misleading.
          </p>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="text-center text-sm text-gray-500 italic">
      Think about your choices. Gamble responsibly. Call Gambling Help on <strong>1800 858 858</strong>.<br>
      This platform supports <a href="https://www.gambleaware.nsw.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">GambleAware NSW</a> and <a href="https://www.betstop.gov.au" target="_blank" class="underline hover:text-[#00A3FF]">BetStop</a>.
    </div>

  </div>
</section>

<section id="11contact" class="bg-[#0B0B0B] text-[#EAEAEA] py-20 px-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">
    <div class="space-y-5">
      <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wider uppercase">Contact the Editors</h2>
      <p class="text-sm md:text-base text-gray-300">
        Have a question, feedback, or noticed an issue? Our Sydney-based editorial team is here to assist with all matters related to the platform, accuracy of information, and promoting safe, responsible participation in Australian lotteries.
      </p>
      <p class="text-sm md:text-base text-gray-400">
        Please note: <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is not a gambling provider or lottery operator. We do not sell tickets or process payments. Our role is to offer independent information, results, and tools for lawful lottery engagement across Australia.
      </p>

      <div class="mt-6 grid gap-4">
        <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD]" class="flex items-center gap-3 text-sm md:text-base">
          <span class="inline-flex h-10 w-10 items-center justify-center border border-gray-700 bg-[#111214]">✉</span>
          <span class="underline underline-offset-4 decoration-transparent hover:decoration-[#00A3FF] transition">support@[CURRENT_DOMAIN_NO_TLD]</span>
        </a>
        <div class="flex items-center gap-3 text-sm md:text-base">
          <span class="inline-flex h-10 w-10 items-center justify-center border border-gray-700 bg-[#111214]">☎</span>
          <span class="text-gray-200 font-medium">+61 2 8012 4468</span>
        </div>
        <div class="flex items-center gap-3 text-sm md:text-base">
          <span class="inline-flex h-10 w-10 items-center justify-center border border-gray-700 bg-[#111214]">⌂</span>
          <span class="text-gray-300">Level 3, 111 Market St, Sydney NSW</span>
        </div>
        <div class="text-xs text-gray-500 italic">
          Available Monday–Friday, 9:00–17:00 AEST • ABN 85 123 456 789
        </div>
      </div>
    </div>

    <form id="contact-form" class="w-full max-w-md bg-[#111214] border border-gray-800 rounded-xl p-6 space-y-4" style="box-shadow:0 12px 36px rgba(0,0,0,.35);">
      <input type="text" placeholder="Full Name" required
             class="w-full border border-gray-700 bg-black/20 text-[#EAEAEA] px-4 py-3 text-sm rounded focus:outline-none focus:ring-2"
             style="outline-color:#00A3FF;">
      <input type="email" placeholder="Email Address" required
             class="w-full border border-gray-700 bg-black/20 text-[#EAEAEA] px-4 py-3 text-sm rounded focus:outline-none focus:ring-2"
             style="outline-color:#00A3FF;">
      <textarea rows="4" placeholder="Your Message" required
                class="w-full border border-gray-700 bg-black/20 text-[#EAEAEA] px-4 py-3 text-sm rounded resize-none focus:outline-none focus:ring-2"
                style="outline-color:#00A3FF;"></textarea>
      <button type="submit"
              class="w-full inline-flex items-center justify-center px-5 py-3 border border-white text-[#0B0B0B] bg-white hover:bg-transparent hover:text-white transition uppercase tracking-wide text-sm font-semibold focus:outline-none focus:ring-2"
              style="outline-color:#00A3FF;">
        Send Message
      </button>
      <p class="text-xs text-center text-gray-400">
        We usually respond within 1–2 business days. All inquiries are handled confidentially and in accordance with our Privacy Policy.
      </p>
      <div id="contact-status" class="hidden text-center text-sm mt-2"></div>
    </form>
  </div>
</section>

<script>
  (function(){
    var form = document.getElementById('contact-form');
    var btn = form.querySelector('button[type="submit"]');
    var status = document.getElementById('contact-status');
    form.addEventListener('submit', function(e){
      e.preventDefault();
      if(btn.disabled) return;
      btn.disabled = true;
      var original = btn.textContent;
      btn.textContent = 'Sending...';
      status.className = 'hidden text-center text-sm mt-2';
      setTimeout(function(){
        btn.disabled = false;
        btn.textContent = original;
        form.reset();
        status.textContent = 'Thank you! Your message has been received and will be reviewed by our editors.';
        status.className = 'text-center text-sm mt-2 font-medium';
        status.style.color = '#00A3FF';
      }, 1100);
    });
  })();
</script>

<section id="10support" class="bg-[#0B0B0B] text-[#EAEAEA] py-20 px-4">
  <div class="max-w-7xl mx-auto">
    <div class="text-center">
      <h3 class="font-['Bebas_Neue'] text-4xl md:text-5xl tracking-wider uppercase">Trusted Support Networks</h3>
      <div class="mx-auto mt-4 h-0.5 w-24" style="background:#00A3FF;"></div>
      <p class="mt-4 text-sm md:text-base text-gray-400 max-w-2xl mx-auto">
        We partner with official Australian help services committed to promoting safety, offering recovery pathways, and encouraging responsible play. All services are free, confidential, and available nationwide.
      </p>
    </div>

    <div class="mt-14 grid grid-cols-2 sm:grid-cols-4 gap-6 md:gap-10">
      <a href="https://www.gambleaware.nsw.gov.au/" target="_blank" rel="noopener noreferrer"
         class="group block bg-white border border-gray-800 overflow-hidden"
         style="box-shadow:0 10px 30px rgba(0,0,0,.25);">
        <div class="aspect-[3/2] flex items-center justify-center p-4">
          <img src="img/gamble.webp" alt="GambleAware NSW – Free support and resources" class="max-h-full max-w-[80%] object-contain grayscale group-hover:grayscale-0 transition" />
        </div>
        <div class="px-3 py-2 text-center text-xs text-[#0B0B0B] font-medium bg-[#F5F5F5]">GambleAware NSW</div>
        <div class="h-[2px] w-0 group-hover:w-full transition-all" style="background:#00A3FF;"></div>
      </a>

      <a href="https://resetapp.com.au/" target="_blank" rel="noopener noreferrer"
         class="group block bg-white border border-gray-800 overflow-hidden"
         style="box-shadow:0 10px 30px rgba(0,0,0,.25);">
        <div class="aspect-[3/2] flex items-center justify-center p-4">
          <img src="img/reset.webp" alt="Reset App – Digital self-help for gambling harm" class="max-h-full max-w-[80%] object-contain grayscale group-hover:grayscale-0 transition" />
        </div>
        <div class="px-3 py-2 text-center text-xs text-[#0B0B0B] font-medium bg-[#F5F5F5]">Reset App</div>
        <div class="h-[2px] w-0 group-hover:w-full transition-all" style="background:#00A3FF;"></div>
      </a>

      <a href="https://gamblershelp.com.au/" target="_blank" rel="noopener noreferrer"
         class="group block bg-white border border-gray-800 overflow-hidden"
         style="box-shadow:0 10px 30px rgba(0,0,0,.25);">
        <div class="aspect-[3/2] flex items-center justify-center p-4">
          <img src="img/gamblers.webp" alt="Gamblers Help – Counselling and support" class="max-h-full max-w-[80%] object-contain grayscale group-hover:grayscale-0 transition" />
        </div>
        <div class="px-3 py-2 text-center text-xs text-[#0B0B0B] font-medium bg-[#F5F5F5]">Gamblers Help</div>
        <div class="h-[2px] w-0 group-hover:w-full transition-all" style="background:#00A3FF;"></div>
      </a>

      <a href="https://www.gamblinghelponline.org.au/" target="_blank" rel="noopener noreferrer"
         class="group block bg-white border border-gray-800 overflow-hidden"
         style="box-shadow:0 10px 30px rgba(0,0,0,.25);">
        <div class="aspect-[3/2] flex items-center justify-center p-4">
          <img src="img/18pl.webp" alt="18+ Only – National gambling help line" class="max-h-full max-w-[80%] object-contain grayscale group-hover:grayscale-0 transition" />
        </div>
        <div class="px-3 py-2 text-center text-xs text-[#0B0B0B] font-medium bg-[#F5F5F5]">Gambling Help Online</div>
        <div class="h-[2px] w-0 group-hover:w-full transition-all" style="background:#00A3FF;"></div>
      </a>
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>