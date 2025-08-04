<?php include "header.php"; ?>

<section id="cart" class="bg-[#121826] py-24 px-4 md:px-10 text-[#C0C9D7] font-['Nunito']">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">

    <!-- Form Block -->
    <div class="space-y-8">
      <h2 class="text-4xl font-bold text-[#FFD700] flex items-center gap-4 font-['Fredoka']">
        Confirm Your Entry
        <img src="img/logo.webp" alt="Lottery" class="h-16">
      </h2>

      <p class="text-base leading-relaxed text-[#C0C9D7]/80">
        Enter your details below to take part in the next official Australian lottery draw.
        Once submitted, you'll receive a confirmation by email. No account needed — just a simple, secure way to participate.
      </p>

      <form id="ticket-form" class="space-y-5">
        <input type="email" id="email" placeholder="Email address" required class="w-full bg-[#1C1F2A] border border-[#2C2F3A] rounded px-4 py-3 focus:ring-2 focus:ring-[#00F0FF]">
        <input type="tel" id="phone" placeholder="+61 XXX XXX XXX" required class="w-full bg-[#1C1F2A] border border-[#2C2F3A] rounded px-4 py-3 focus:ring-2 focus:ring-[#00F0FF]">
        <input type="text" id="name" placeholder="Full name" required class="w-full bg-[#1C1F2A] border border-[#2C2F3A] rounded px-4 py-3 focus:ring-2 focus:ring-[#00F0FF]">
        <input type="text" id="address" placeholder="Residential address" required class="w-full bg-[#1C1F2A] border border-[#2C2F3A] rounded px-4 py-3 focus:ring-2 focus:ring-[#00F0FF]">
      </form>
    </div>

    <!-- Cart Summary -->
    <div class="space-y-6">
      <div class="rounded-2xl border border-[#2C2F3A] bg-[#1C1F2A] p-6 space-y-4 shadow-[0_0_20px_#00F0FF]/10">
        <div class="flex justify-between items-center text-base">
          <span class="text-[#C0C9D7]/80">Ticket #<span id="ticket-number">1</span></span>
          <div class="flex items-center gap-2">
            <button type="button" onclick="decreaseCount()" class="bg-[#2C2F3A] px-3 py-1 rounded">−</button>
            <span id="ticket-count" class="font-bold">1</span>
            <button type="button" onclick="increaseCount()" class="bg-[#2C2F3A] px-3 py-1 rounded">+</button>
          </div>
        </div>
        <div class="text-sm text-[#C0C9D7]/60">1 ticket | Next draw only</div>
      </div>

      <div class="bg-[#1C1F2A] rounded-2xl border border-[#2C2F3A] p-6 text-center shadow-[0_0_20px_#FFD700]/10">
        <p class="text-sm text-[#C0C9D7]/70">Total payment:</p>
        <div id="total-amount" class="text-3xl font-extrabold text-[#FFD700] mb-4">$10.00</div>
        <button onclick="submitForm()" class="w-full bg-[#FFD700] text-[#121826] py-4 rounded-xl font-bold hover:bg-[#e6c200] transition">
          Pay Now
        </button>
        <p id="confirmation-message" class="mt-4 text-sm text-[#00F0FF] hidden">We'll email you a confirmation shortly. Thanks for entering!</p>
      </div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>