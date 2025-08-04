<?php include "header.php"; ?>

<section id="cart"
  class="w-full min-h-[340px] py-14 px-2 md:px-8 flex items-center justify-center bg-white relative overflow-hidden"
  style="background: url('img/cart_bg.webp') center/cover no-repeat;">
  <div class="absolute inset-0 bg-[#F7F8FA] bg-opacity-80 pointer-events-none z-0"></div>
  <div class="max-w-5xl w-full flex flex-col md:flex-row gap-8 md:gap-16 relative z-10">
    <!-- LEFT: Add Ticket Form -->
    <div class="flex-1 min-w-[260px] flex flex-col gap-7 bg-white bg-opacity-90 rounded-2xl shadow-md p-6 md:p-10">
      <h2 class="text-3xl md:text-4xl font-extrabold text-[#FFD700] mb-2 tracking-tight font-['Cairo',sans-serif]">
        Your Ticket Cart
      </h2>
      <label class="block text-base font-bold text-[#5A4A3F] mb-1 font-['Open_Sans',sans-serif]">Pick your numbers:</label>
      <form id="ticket-form" class="flex flex-col gap-3">
        <div id="numbers-row" class="flex items-center gap-2">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
          <input type="text" maxlength="2" class="ticket-number w-12 h-12 text-center border-2 border-[#FFD700] rounded-full focus:border-[#1589FF] bg-[#F7F8FA] text-xl font-extrabold text-[#186A3B] transition placeholder:text-[#D7C97E]" placeholder="00">
        </div>
        <button id="random-btn" type="button" class="flex items-center gap-2 bg-[#F3F3F3] border border-[#FFD700] text-[#186A3B] font-semibold px-5 py-2 rounded-lg hover:bg-[#FFD700] hover:text-[#186A3B] transition w-max shadow-sm mt-2">
          <svg class="w-4 h-4 text-[#FFD700]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
          Quick Pick
        </button>
        <div class="flex items-center gap-5 text-sm font-bold text-[#FFD700] mt-2">
          <span>Multiplier:
            <input type="number" id="multiplier" min="1" value="1" class="w-12 ml-1 px-1 border border-[#F3F3F3] rounded bg-[#F7F8FA] text-[#186A3B] font-bold" />
          </span>
          <span>Draws:
            <input type="number" id="circulation" min="1" value="1" class="w-12 ml-1 px-1 border border-[#F3F3F3] rounded bg-[#F7F8FA] text-[#186A3B] font-bold" />
          </span>
        </div>
        <button type="submit" class="mt-2 px-7 py-2 rounded-xl bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] font-extrabold shadow transition w-max text-lg">Add Ticket</button>
      </form>
      <div class="text-lg font-bold mt-1 text-[#FFD700]">
        Total: <span id="total-amount" class="text-[#5A4A3F]">$0.00</span>
      </div>
      <button data-modal="auth-modal"  class="mt-3 px-7 py-2 rounded-lg bg-[#FF3D3D] hover:bg-[#FFD700] text-white hover:text-[#23272F] font-extrabold shadow transition text-lg w-max">Proceed to Payment</button>
      <div id="cart-success" class="hidden mt-4 text-[#186A3B] bg-[#FFD700] bg-opacity-90 rounded-xl px-4 py-3 font-semibold text-lg text-center shadow">
        Payment complete! You’ll get a confirmation by email shortly.
      </div>
    </div>
    <!-- RIGHT: Cart list with ticket items -->
    <div class="flex-1 min-w-[320px] relative">
      <div class="relative z-10 flex flex-col gap-4 py-6 items-center bg-white bg-opacity-90 rounded-2xl shadow-md" id="tickets-list"></div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>