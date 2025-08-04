<?php include "header.php"; ?>

<section id="cart" class="bg-[#0B0F1A] py-24 px-4 sm:px-6 text-[#FFFFFF] font-[Orbitron]">
  <div class="max-w-6xl mx-auto space-y-24">

    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="text-center md:text-left space-y-4">
        <h2 class="text-4xl sm:text-5xl font-extrabold uppercase text-[#FFD700]">Complete Your Ticket</h2>
        <p class="text-base sm:text-lg text-[#C0C9D7] max-w-xl">
          You're just a few steps away from confirming your entry. Double-check your numbers, fill in your details, and get ready to take part in the next official Australian draw.
        </p>
        <p class="text-sm text-[#C0C9D7]/70">
          Need help? Reach out anytime via <a href="/contact" class="underline text-[#00F0FF] hover:text-[#FFD700]">support</a>.
        </p>
      </div>

      <div class="flex flex-wrap justify-between items-center gap-6 p-6 w-full border border-[#1C1F2A] bg-[#121826] shadow-lg">
        <p class="text-sm sm:text-base font-semibold text-[#C0C9D7]">Time remaining to join:</p>
        <div class="text-4xl sm:text-5xl font-extrabold tracking-widest text-[#00F0FF] px-6 sm:px-10 py-4 sm:py-6 bg-[#0B0F1A] border border-[#00F0FF] shadow-inner" id="draw-timer">
  00:29:59
</div>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-12 items-start">

      <div class="bg-[#121826] border border-[#1C1F2A] p-10 space-y-8 w-full">
        <h3 class="text-2xl font-bold uppercase text-[#00F0FF] text-center">Your Chosen Numbers</h3>
        <p class="text-sm text-[#C0C9D7]/80 text-center">
          Enter six numbers between 1 and 49. Each box accepts two digits (e.g. 07, 22). You can also leave it blank for a random Quick Pick.
        </p>
        <div id="number-inputs" class="grid grid-cols-3 sm:grid-cols-6 gap-4">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
          <input type="text" maxlength="2" placeholder="--" class="text-center border border-[#00F0FF] px-3 py-3 text-base font-semibold bg-[#0B0F1A] text-[#FFFFFF]">
        </div>
      </div>

      <form class="bg-[#121826] border border-[#1C1F2A] p-10 space-y-6 w-full">
        <h3 class="text-2xl font-bold uppercase text-[#00F0FF] text-center">Contact Information</h3>
        <p class="text-sm text-[#C0C9D7]/80 text-center">
          We need your details to confirm your entry and send ticket results. Your info is securely stored and never shared for marketing.
        </p>
        <input type="email" placeholder="Email Address" class="w-full border border-[#1C1F2A] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF]" required>
        <input type="tel" placeholder="+61 XXX XXX XXX" class="w-full border border-[#1C1F2A] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF]" required>
        <input type="text" placeholder="Full Name" class="w-full border border-[#1C1F2A] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF]" required>
        <input type="text" placeholder="Delivery Address" class="w-full border border-[#1C1F2A] px-5 py-4 text-base bg-[#0B0F1A] text-[#FFFFFF]" required>
      </form>
    </div>

    <div class="bg-[#121826] border border-[#1C1F2A] p-10 text-center space-y-6 w-full">
      <p class="text-base font-medium uppercase text-[#FFD700]">Your Ticket</p>
      <div class="flex items-center justify-center gap-4">
        <button type="button" onclick="adjustTickets(-1)" class="w-10 h-10 bg-[#0B0F1A] border border-[#FFD700] text-[#FFD700] font-bold hover:scale-110 transition">−</button>
        <div class="text-xl font-bold text-[#FFFFFF]" id="ticket-count">1</div>
        <button type="button" onclick="adjustTickets(1)" class="w-10 h-10 bg-[#0B0F1A] border border-[#FFD700] text-[#FFD700] font-bold hover:scale-110 transition">+</button>
      </div>
      <div class="text-xl font-bold text-[#00F0FF]" id="ticket-price">$10.00</div>
      <p class="text-sm text-[#C0C9D7]">
        Each ticket is valid for one entry into a licensed Australian lottery. Confirmation is sent instantly via email.
      </p>
      <button data-open-pay class="mt-4 w-full bg-[#FF007A] hover:bg-[#FF3399] text-white font-bold py-4 uppercase tracking-wide">
        Confirm and Continue
      </button>
    </div>

  </div>
</section>



<?php include "footer.php"; ?>