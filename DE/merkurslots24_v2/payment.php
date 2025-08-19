<?php include "header.php"; ?>

<section id="5-payment" class="bg-[#0B0B0B] text-white py-16 px-4 md:px-8 font-['Inter']">
  <div class="max-w-6xl mx-auto space-y-12">

    <div class="text-center space-y-2">
      <h2 class="text-3xl md:text-5xl font-extrabold uppercase font-['Bebas_Neue'] tracking-wide text-[#FFD700] drop-shadow-[0_0_6px_#FFD700]">
        Payment Methods
      </h2>
      <p class="text-sm text-[#B0B0B0]">Fast, secure and available 24/7</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-8 items-center justify-center">
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_visa.svg" alt="Visa" class="h-10 mx-auto">
      </div>
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_mastercard.svg" alt="Mastercard" class="h-10 mx-auto">
      </div>
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_paypal.svg" alt="PayPal" class="h-10 mx-auto">
      </div>
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_skrill.svg" alt="Skrill" class="h-10 mx-auto">
      </div>
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_neteller.svg" alt="Neteller" class="h-10 mx-auto">
      </div>
      <div class="p-4 bg-[#111] rounded-xl border border-[#FFD700]/30 hover:border-[#FFD700] shadow-lg hover:shadow-[0_0_15px_#FFD700] transition">
        <img src="img/payment_bank.svg" alt="Bank Transfer" class="h-10 mx-auto">
      </div>
    </div>

    <div class="max-w-lg mx-auto bg-[#111] border border-[#FFD700]/30 rounded-2xl p-6 shadow-lg space-y-5">
      <h3 class="text-xl font-bold font-['Bebas_Neue'] tracking-wide text-[#FFD700]">Make a Deposit</h3>

      <form id="payment-form" class="space-y-4">
        <div>
          <label for="payment-method" class="block text-sm text-[#B0B0B0] mb-1">Select Method</label>
          <select id="payment-method" name="method" class="w-full bg-[#0B0B0B] border border-[#FFD700]/30 rounded-lg px-3 py-2 text-white focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]">
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="paypal">PayPal</option>
            <option value="skrill">Skrill</option>
            <option value="neteller">Neteller</option>
            <option value="bank">Bank Transfer</option>
          </select>
        </div>

        <!-- Поля карты (только имитация, не собираем) -->
        <div class="grid grid-cols-1 gap-4">
          <div>
            <label class="block text-sm text-[#B0B0B0] mb-1">Card Number</label>
            <input type="text" maxlength="19" placeholder="•••• •••• •••• ••••" class="w-full bg-[#0B0B0B] border border-[#FFD700]/30 rounded-lg px-3 py-2 text-white focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]" autocomplete="off">
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm text-[#B0B0B0] mb-1">Expiry Date</label>
              <input type="text" maxlength="5" placeholder="MM/YY" class="w-full bg-[#0B0B0B] border border-[#FFD700]/30 rounded-lg px-3 py-2 text-white focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]" autocomplete="off">
            </div>
            <div>
              <label class="block text-sm text-[#B0B0B0] mb-1">CVV</label>
              <input type="text" maxlength="3" placeholder="•••" class="w-full bg-[#0B0B0B] border border-[#FFD700]/30 rounded-lg px-3 py-2 text-white focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]" autocomplete="off">
            </div>
          </div>
        </div>

        <div>
          <label for="amount" class="block text-sm text-[#B0B0B0] mb-1">Amount (USD)</label>
          <input type="number" id="amount" name="amount" min="10" step="1" class="w-full bg-[#0B0B0B] border border-[#FFD700]/30 rounded-lg px-3 py-2 text-white focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]" placeholder="Enter amount">
        </div>


        <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-[#FFD700] to-[#FF6B00] text-black font-bold text-lg shadow-lg hover:shadow-[0_0_15px_#FFD700] transition-all duration-300">
          Deposit Now
        </button>
      </form>

      <p class="text-xs text-[#B0B0B0] text-center">
        All card details entered here are for demonstration only and are not processed or stored.
      </p>
    </div>

  </div>
</section>

<?php include "footer.php"; ?>