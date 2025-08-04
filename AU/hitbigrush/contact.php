<?php include "header.php"; ?>
<section id="contact" class="bg-[#0B0F1A] text-[#C0C9D7] py-28 px-6 font-sans">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-14 items-start">

    <!-- Left Column -->
    <div class="space-y-6">
      <h2 class="text-4xl font-extrabold text-[#FFD700] font-[Orbitron] uppercase tracking-wide">
        Contact Us
      </h2>
      <p class="text-base text-[#C0C9D7]/80">
        Have a question about your entry, draw times, or how it all works? Our local support team is here to help — no bots, just real people ready to assist.
      </p>
      <p class="text-sm text-[#C0C9D7]/60">
        Whether it's a payment issue, technical glitch, or just a general enquiry, we aim to respond within 1 business day.
      </p>
    </div>

    <!-- Center Column -->
    <div class="bg-[#121826] px-8 py-10 shadow-[0_0_20px_#00F0FF] border border-[#1C1F2A] space-y-8">
      <h3 class="text-xl text-center font-bold text-[#00F0FF] font-[Orbitron] uppercase tracking-wide">
        Send a Message
      </h3>
      <form id="contact-form" class="space-y-5">
        <input type="text" placeholder="Your Name" required
          class="w-full bg-[#0B0F1A] border border-[#1C1F2A] text-[#FFFFFF] px-5 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#00F0FF]">
        <input type="email" placeholder="Your Email" required
          class="w-full bg-[#0B0F1A] border border-[#1C1F2A] text-[#FFFFFF] px-5 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#00F0FF]">
        <textarea rows="4" placeholder="Your Message" required
          class="w-full bg-[#0B0F1A] border border-[#1C1F2A] text-[#FFFFFF] px-5 py-4 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-[#00F0FF]"></textarea>
        <button type="button" id="send-btn"
          class="w-full bg-[#00F0FF] hover:bg-[#26D6BA] text-[#0B0F1A] font-bold py-4 text-sm tracking-wide transition uppercase">
          Submit
        </button>
      </form>
      <div id="form-alert" class="hidden mt-4 p-4 bg-[#003c3a] text-[#00F0FF] text-center text-xs border border-[#00F0FF]">
        ✅ Message sent. We'll get back to you soon.
      </div>
    </div>

    <!-- Right Column -->
    <div class="space-y-10">

      <div class="bg-[#121826] px-8 py-8 shadow-[0_0_20px_#FFD700] border border-[#1C1F2A] space-y-3">
        <h3 class="text-base font-bold text-[#FFD700] font-[Orbitron] uppercase">General Support</h3>
        <p class="text-sm text-[#C0C9D7]/80">Need help with a purchase or draw entry?</p>
        <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD]" class="text-[#00F0FF] hover:underline font-semibold text-sm">
          support@[CURRENT_DOMAIN_NO_TLD]
        </a>
      </div>

      <div class="bg-[#121826] px-8 py-8 shadow-[0_0_20px_#00F0FF] border border-[#1C1F2A] space-y-3">
        <h3 class="text-base font-bold text-[#00F0FF] font-[Orbitron] uppercase">Phone Support</h3>
        <p class="text-sm text-[#C0C9D7]/80">Speak to our Aussie-based team directly</p>
        <p class="font-semibold text-sm text-[#FFFFFF]">+61 2 8012 4468</p>
        <p class="text-xs text-[#C0C9D7]/60">Monday to Friday, 9:00am–5:00pm AEST</p>
      </div>

    </div>
  </div>
</section>


<?php include "footer.php"; ?>
