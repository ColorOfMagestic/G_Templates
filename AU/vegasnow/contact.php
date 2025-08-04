<?php include "header.php"; ?>

<section id="contact" class="bg-[#0B0F1A] text-[#F3F6F9] py-28 px-6 font-sans">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16 items-start">

    <!-- LEFT -->
    <div class="space-y-6">
      <h2 class="text-4xl font-extrabold text-[#FFD700] font-[Orbitron] uppercase tracking-wide">Contact Us</h2>
      <p class="text-base text-[#B7BDC6]">
        Have a question about your entry, draw schedules, or results? Our Sydney-based support team is ready to assist — responsive, professional, and local.
      </p>
      <p class="text-sm text-[#B7BDC6]/80">
        We aim to reply within 24 hours on business days.
      </p>
    </div>

    <!-- CENTER FORM -->
    <div class="bg-[#1D1235] px-8 py-10 border border-[#2A2A3B] shadow-[0_0_25px_#FF2D95]/40 rounded-2xl space-y-6">
      <h3 class="text-xl text-center font-bold text-[#FF2D95] font-[Orbitron] uppercase tracking-wide">Send a Message</h3>
      <form id="contact-form" class="space-y-4">
        <input type="text" placeholder="Full Name" required
          class="w-full bg-[#121212] border border-[#2C2C2C] text-[#F3F6F9] px-5 py-3 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF2D95]">
        <input type="email" placeholder="Email Address" required
          class="w-full bg-[#121212] border border-[#2C2C2C] text-[#F3F6F9] px-5 py-3 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF2D95]">
        <textarea rows="4" placeholder="Your Message" required
          class="w-full bg-[#121212] border border-[#2C2C2C] text-[#F3F6F9] px-5 py-3 text-sm resize-none rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF2D95]"></textarea>
        <button type="submit" id="send-btn"
          class="w-full bg-[#FF2D95] hover:bg-[#FFD700] text-[#121212] font-bold py-3 rounded-md text-sm uppercase transition">
          Submit
        </button>
      </form>
      <div id="form-alert" class="hidden mt-4 p-3 bg-[#121212] text-[#FFD700] text-center text-xs border border-[#FFD700] rounded">
        ✅ Your message has been received.
      </div>
    </div>

    <!-- RIGHT INFO -->
    <div class="space-y-8">

      <div class="bg-[#1D1235] px-6 py-6 border border-[#2A2A3B] shadow-[0_0_20px_#FFD700]/40 rounded-xl space-y-3">
        <h3 class="text-sm font-bold text-[#FFD700] font-[Orbitron] uppercase tracking-wide">Email Support</h3>
        <p class="text-sm text-[#B7BDC6]">For any queries related to accounts or lottery entries</p>
        <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD]"
           class="text-[#FF2D95] font-medium text-sm hover:underline">support@[CURRENT_DOMAIN_NO_TLD]</a>
      </div>

      <div class="bg-[#1D1235] px-6 py-6 border border-[#2A2A3B] shadow-[0_0_20px_#FF2D95]/40 rounded-xl space-y-3">
        <h3 class="text-sm font-bold text-[#FF2D95] font-[Orbitron] uppercase tracking-wide">Phone Support</h3>
        <p class="text-sm text-[#B7BDC6]">Speak to our support team directly</p>
        <p class="font-semibold text-sm text-[#F3F6F9]">+61 2 8012 4468</p>
        <p class="text-xs text-[#B7BDC6]/80">Mon–Fri, 9:00am to 5:00pm AEST</p>
      </div>

    </div>
  </div>
</section>


<?php include "footer.php"; ?>
