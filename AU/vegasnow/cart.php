<?php include "header.php"; ?>

<section id="cart" class="bg-[#0B0F1A] py-24 px-4 sm:px-6 text-[#FFFFFF] font-[Orbitron]">
  <div class="max-w-6xl mx-auto space-y-24">

    <!-- INTRO -->
    <div class="text-center md:text-left space-y-6 max-w-3xl">
      <h2 class="text-4xl sm:text-5xl font-extrabold uppercase text-[#FFD700] drop-shadow-md">
        Finalise Your Entry
      </h2>
      <p class="text-base sm:text-lg text-[#C0C9D7]">
        You're almost there! Pick your numbers, enter your contact details, and confirm your spot in the next government-authorised Aussie draw.
      </p>
      <p class="text-sm text-[#B7BDC6]">
        Need help? <a href="/contact" class="underline text-[#00F0FF] hover:text-[#FFD700]">Reach out to our team</a> anytime.
      </p>
    </div>

    <!-- INPUT SECTION -->
    <div class="grid md:grid-cols-2 gap-12 items-start">

      <!-- Numbers Input -->
      <div class="bg-[#121826] border border-[#1C1F2A] p-10 rounded-xl space-y-8 shadow-xl">
        <h3 class="text-2xl font-bold uppercase text-[#00F0FF] text-center tracking-wide">Select Numbers</h3>
        <p class="text-sm text-[#B7BDC6] text-center">
          Choose 6 numbers from 1 to 49. Or leave blank for an automatic Quick Pick.
        </p>
        <div id="number-inputs" class="grid grid-cols-3 sm:grid-cols-6 gap-4">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 rounded-md text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
        </div>
      </div>

      <!-- Contact Form -->
      <form class="bg-[#121826] border border-[#1C1F2A] p-10 rounded-xl space-y-5 shadow-xl">
        <h3 class="text-2xl font-bold uppercase text-[#00F0FF] text-center tracking-wide">Your Details</h3>
        <p class="text-sm text-[#B7BDC6] text-center">
          Confirmation will be emailed. Your data is secure and kept private.
        </p>
        <input type="email" placeholder="Email Address" class="w-full border border-[#2A2A3B] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF] rounded-md" required>
        <input type="tel" placeholder="+61 XXX XXX XXX" class="w-full border border-[#2A2A3B] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF] rounded-md" required>
        <input type="text" placeholder="Full Name" class="w-full border border-[#2A2A3B] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF] rounded-md" required>
        <input type="text" placeholder="Delivery Address" class="w-full border border-[#2A2A3B] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF] rounded-md" required>
      </form>
    </div>

    <!-- Ticket Summary -->
    <div class="bg-[#121826] border border-[#1C1F2A] p-10 rounded-xl text-center space-y-8 shadow-xl">
      <div class="space-y-6">
        <p class="text-base font-medium uppercase text-[#FFD700] tracking-wide">Ticket Quantity</p>
        <div class="flex items-center justify-center gap-4">
          <button type="button" onclick="adjustTickets(-1)" class="w-10 h-10 rounded-full bg-[#0B0F1A] border border-[#FFD700] text-[#FFD700] font-bold hover:scale-110 transition">−</button>
          <div class="text-xl font-bold text-[#FFFFFF]" id="ticket-count">1</div>
          <button type="button" onclick="adjustTickets(1)" class="w-10 h-10 rounded-full bg-[#0B0F1A] border border-[#FFD700] text-[#FFD700] font-bold hover:scale-110 transition">+</button>
        </div>
        <div class="text-2xl font-bold text-[#00F0FF]" id="ticket-price">$10.00</div>
        <p class="text-sm text-[#C0C9D7]">
          One ticket = one official entry in the upcoming licensed draw.
        </p>
      </div>

      <!-- Countdown -->
      <div class="pt-8">
        <p class="text-sm font-medium text-[#C0C9D7] uppercase">Time left to enter:</p>
        <div class="text-4xl font-extrabold text-[#00F0FF] tracking-widest bg-[#0B0F1A] border border-[#00F0FF] px-10 py-4 mt-2 rounded-lg shadow-inner" id="draw-timer">
          00:29:59
        </div>
      </div>

      <button data-open-pay class="mt-10 w-full bg-[#FF2D95] hover:bg-[#FFD700] text-[#0B0F1A] font-bold py-4 uppercase tracking-wide rounded-md transition shadow-md">
        Confirm & Proceed
      </button>
    </div>

  </div>
</section>


<script src="scripts/cart.js"></script>

<?php include "footer.php"; ?>