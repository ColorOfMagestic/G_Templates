<?php include "header.php"; ?>

<section id="cart" class="bg-[#F4F1EC] py-24 px-4 md:px-10 text-[#1C1B1F] font-['Nunito']">
  <div class="max-w-6xl mx-auto space-y-12">

    <!-- Header -->
    <div class="text-center space-y-6">
      <h2 class="text-4xl font-bold text-[#5E3A87] font-['Fredoka']">
        Confirm Your Entry
      </h2>
      <p class="text-base leading-relaxed text-[#1C1B1F]/80 max-w-2xl mx-auto">
        Enter your details below to take part in the next official Australian lottery draw.
        Once submitted, you'll receive a confirmation by email. No account needed — just a simple, secure way to participate.
      </p>
    </div>

    <!-- Form and Cart Grid -->
    <div class="grid md:grid-cols-2 gap-10 items-start">

      <!-- Form Block -->
      <div class="bg-[#FFFFFF] p-8 md:p-10 rounded-2xl border border-[#E0E0E0] shadow-md space-y-6">
        <form id="ticket-form" class="space-y-6">
          <input type="email" id="email" placeholder="Email address" required class="w-full bg-[#F4F1EC] border border-[#DADADA] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="tel" id="phone" placeholder="+61 XXX XXX XXX" required class="w-full bg-[#F4F1EC] border border-[#DADADA] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="text" id="name" placeholder="Full name" required class="w-full bg-[#F4F1EC] border border-[#DADADA] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">
          <input type="text" id="address" placeholder="Residential address" required class="w-full bg-[#F4F1EC] border border-[#DADADA] rounded px-4 py-3 focus:ring-2 focus:ring-[#5E3A87]">

          <!-- Winning Numbers -->
          <div class="space-y-2">
            <label class="block text-sm font-semibold text-[#1C1B1F]">Choose Your Numbers</label>
            <div class="grid grid-cols-6 gap-2">
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
              <input type="text" maxlength="2"  min="1" max="99" placeholder="00" class="text-center bg-[#F4F1EC] border border-[#DADADA] rounded py-2 px-3 focus:ring-2 focus:ring-[#009688]" required>
            </div>
            <p class="text-xs text-[#1C1B1F]/60 mt-1">Pick six numbers between 1 and 99</p>
          </div>
        </form>
      </div>

      <!-- Cart Summary -->
      <div class="space-y-6">
        <div class="rounded-2xl border border-[#E0E0E0] bg-[#FFFFFF] p-6 space-y-4 shadow-md">
          <div class="flex justify-between items-center text-base">
            <span class="text-[#5E3A87] font-medium">Ticket #<span id="ticket-number">1</span></span>
            <div class="flex items-center gap-2">
              <button type="button" onclick="decreaseCount()" class="bg-[#F4F1EC] px-3 py-1 rounded border border-[#DADADA]">−</button>
              <span id="ticket-count" class="font-bold">1</span>
              <button type="button" onclick="increaseCount()" class="bg-[#F4F1EC] px-3 py-1 rounded border border-[#DADADA]">+</button>
            </div>
          </div>
          <div class="text-sm text-[#1C1B1F]/60">1 ticket | Next draw only</div>
        </div>

        <div class="bg-[#FFFFFF] rounded-2xl border border-[#E0E0E0] p-6 text-center shadow-md">
          <p class="text-sm text-[#1C1B1F]/70">Total payment:</p>
          <div id="total-amount" class="text-3xl font-extrabold text-[#FF6F3C] mb-4">$10.00</div>
          <button onclick="submitForm()" class="w-full bg-[#FF6F3C] text-white py-4 rounded-xl font-bold hover:bg-[#e65c2a] transition">
            Pay Now
          </button>
          <p id="confirmation-message" class="mt-4 text-sm text-[#5E3A87] hidden">We'll email you a confirmation shortly. Thanks for entering!</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include "footer.php"; ?>