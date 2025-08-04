<?php include "header.php"; ?>

<section id="cart"
  class="bg-gradient-to-br from-[#FFF9E2] via-[#F4F1EC] to-[#FFD54F] py-24 px-4 md:px-10 text-[#3A3636] font-['Montserrat',sans-serif]">
  <div class="max-w-6xl mx-auto space-y-12">


    <div class="text-center space-y-6">
      <h2 class="text-4xl font-bold text-[#5E3A87] font-['Montserrat',sans-serif]">
        Confirm Your Entry
      </h2>

      <div
        class="flex flex-col md:flex-row items-center justify-center gap-3 bg-[#FFB300]/10 border border-[#FFB300] rounded-xl px-5 py-3 max-w-xl mx-auto mt-3 shadow">
        <img src="img/clock.svg" alt="Next Draw" class="h-10 w-10 object-contain" />
        <div class="text-base font-semibold text-[#5E3A87]">
          Next draw: <span class="text-[#FF6F3C]">Saturday 7:00PM AEST</span> • <span
            class="text-[#009688] font-bold">$5,000,000</span>
        </div>
      </div>
      <p class="text-base leading-relaxed text-[#3A3636]/80 max-w-2xl mx-auto">
        Ready to be part of the next official Australian lottery draw? Simply fill in your details below. Once your
        entry is submitted, you'll receive a confirmation email — no registration required. Enjoy a safe and transparent
        way to participate, fully compliant with Australian regulations.
      </p>

      <ul class="mt-6 mb-2 text-left text-base text-[#5E3A87] max-w-2xl mx-auto space-y-1 list-disc list-inside">
        <li>Operated and licensed in Australia — strict adherence to local laws</li>
        <li>No hidden fees or fine print: full transparency at every step</li>
        <li>Fast, secure Aussie payments with full data encryption</li>
        <li>Get notified instantly after each draw</li>
        <li>Service available exclusively for Australian residents aged 18 and over</li>
      </ul>
    </div>


    <div class="grid md:grid-cols-2 gap-10 items-start">


      <div class="bg-[#FFFFFF] p-8 md:p-10 rounded-2xl border border-[#E0E0E0] shadow-md space-y-6">
        <form id="ticket-form" class="space-y-6" autocomplete="off">
          <input type="email" id="email" placeholder="Email address" required
            class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="tel" id="phone" placeholder="+61 XXX XXX XXX" required
            class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="text" id="name" placeholder="Full name" required
            class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="text" id="address" placeholder="Residential address" required
            class="w-full bg-[#FFF9E2] border border-[#FFD54F] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">


          <div class="space-y-2">
            <label class="block text-sm font-semibold text-[#1C1B1F]">Choose Your Numbers</label>
            <div class="grid grid-cols-6 gap-2">
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
              <input type="text" maxlength="2" min="1" max="99" placeholder="00"
                class="text-center bg-[#FFF9E2] border border-[#FFD54F] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]"
                required>
            </div>
            <p class="text-xs text-[#1C1B1F]/60 mt-1">Pick six numbers between 1 and 99</p>
          </div>
        </form>

        <p class="text-xs text-[#1C1B1F]/60 mt-2">
          Must be 18+ and a resident of Australia to participate. Play responsibly. <a href="/responsible"
            class="underline text-[#5E3A87] hover:text-[#FF6F3C]">Responsible Play Policy</a>
        </p>
      </div>


      <div class="space-y-6">
        <div class="rounded-2xl border border-[#FFD54F] bg-[#FFFFFF] p-6 space-y-4 shadow-md">
          <div class="flex justify-between items-center text-base">
            <span class="text-[#5E3A87] font-medium">Ticket #<span id="ticket-number">1</span></span>
            <div class="flex items-center gap-2">
              <button type="button" onclick="decreaseCount()"
                class="bg-[#FFF9E2] px-3 py-1 rounded border border-[#FFD54F]">−</button>
              <span id="ticket-count" class="font-bold">1</span>
              <button type="button" onclick="increaseCount()"
                class="bg-[#FFF9E2] px-3 py-1 rounded border border-[#FFD54F]">+</button>
            </div>
          </div>
          <div class="text-sm text-[#1C1B1F]/60">1 ticket | Next draw only</div>
        </div>

        <div class="bg-[#FFFFFF] rounded-2xl border border-[#FFD54F] p-6 text-center shadow-md">
          <p class="text-sm text-[#1C1B1F]/70">Total payment:</p>
          <div id="total-amount" class="text-3xl font-extrabold text-[#FF6F3C] mb-4">$10.00</div>
          <button onclick="submitForm()"
            class="w-full bg-[#FF6F3C] text-white py-4 rounded-xl font-bold hover:bg-[#e65c2a] transition">
            Pay Now
          </button>

          <div class="flex items-center justify-center gap-2 mt-3">
            <img src="img/card.svg" alt="Secure Payment" class="h-10 w-10" />
            <span class="text-xs text-[#009688] font-semibold">Secure, encrypted Aussie payments</span>
          </div>
          <p id="confirmation-message" class="mt-4 text-sm text-[#5E3A87] hidden">We'll email you a confirmation
            shortly. Thanks for entering!</p>
        </div>

        <div class="text-xs text-[#5E3A87]/70 text-center">
          Our platform is independently audited for fairness and security. All lottery entries are handled by licensed
          Australian providers. For questions about compliance, visit our <a href="/terms"
            class="underline hover:text-[#FF6F3C]">Terms & Conditions</a>.
        </div>
      </div>

    </div>
  </div>
</section>



<?php include "footer.php"; ?>