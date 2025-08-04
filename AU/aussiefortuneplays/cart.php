<?php include "header.php"; ?>
<section id="cart" class="bg-[#FFF8E1] py-20 px-4 md:px-10 text-[#1A1A1A]">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-start">

    <!-- Left: User Details -->
    <div class="bg-white rounded-2xl shadow-xl p-8 space-y-6">
      <h2 class="text-3xl font-extrabold">Enter Your Details</h2>

      <form class="space-y-4">
        <input type="email" placeholder="Email Address" required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-base focus:ring-2 focus:ring-[#FF9900]">
        <input type="tel" placeholder="+61 XXX XXX XXX" required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-base focus:ring-2 focus:ring-[#FF9900]">
        <input type="text" placeholder="Full Name" required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-base focus:ring-2 focus:ring-[#FF9900]">
        <input type="text" placeholder="Address" required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-base focus:ring-2 focus:ring-[#FF9900]">
      </form>
    </div>

    <!-- Right: Numbers + Summary -->
    <div class="bg-white rounded-2xl shadow-xl p-8 space-y-8">

      <!-- Number Input -->
      <div>
        <label class="block text-sm font-semibold mb-2">Choose Your Numbers</label>
        <div id="number-inputs" class="grid grid-cols-6 gap-2">
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
          <input type="text" maxlength="2" class="text-center border rounded px-2 py-1 w-full" />
        </div>
      </div>

      <!-- Ticket Summary -->
      <div id="ticket-item" class="border border-dashed border-[#FF9900] rounded-lg p-5 space-y-4">
        <div class="flex justify-between items-center">
          <span class="text-sm font-bold">#1 Ticket</span>
          <div class="flex items-center gap-3">
            <button id="decrease" class="px-2 bg-gray-100 hover:bg-gray-200 rounded">−</button>
            <span id="ticket-count" class="font-semibold">1</span>
            <button id="increase" class="px-2 bg-gray-100 hover:bg-gray-200 rounded">+</button>
            <button id="remove-ticket" class="text-red-600 hover:text-red-800 text-xl" title="Remove">×</button>
          </div>
        </div>
        <p class="text-sm text-[#666]">1 bet | 1 draw</p>
        <p class="font-semibold">Total: <span id="ticket-total">$10.00</span></p>
      </div>

      <!-- Payment -->
      <div class="bg-[#FFF3E0] border border-[#FFD699] p-6 rounded-xl text-center">
        <p class="text-base text-[#555] mb-2">To be paid:</p>
        <div id="total-amount" class="text-3xl font-extrabold mb-4">$10.00</div>
        <button data-open-pay
          class="bg-[#FF9900] text-white font-semibold w-full py-4 rounded-xl text-base hover:bg-[#e98a00] transition">
          Pay Now
        </button>
      </div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>