<?php include "header.php"; ?>

<section id="contact" class="bg-white text-[#1A1A1A] py-28 px-6 font-['Nunito']">
  <div class="max-w-7xl mx-auto space-y-16">

    <!-- Header Text -->
    <div class="text-center max-w-3xl mx-auto space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#D500F9] uppercase tracking-tight font-['Fredoka']">
        Reach Out to Our Aussie Team
      </h2>
      <p class="text-base md:text-lg text-[#444]">
        Have a question about your lottery entry, account, or eligibility? Our support team in Australia is ready to assist you — quickly and clearly.
      </p>
    </div>

    <!-- Grid Layout -->
    <div class="grid lg:grid-cols-3 gap-10 items-start">
      
      <!-- Left Contact Card -->
      <div class="bg-[#FFFDE7] border border-[#FFF176] p-6 rounded-xl shadow space-y-3 text-sm">
        <h4 class="font-bold text-[#FBC02D] uppercase tracking-wide font-['Fredoka']">Email Support</h4>
        <p class="text-[#5D4037]">General enquiries, registration help, or account access questions?</p>
        <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD]" class="text-[#D500F9] font-semibold hover:underline">
          support@[CURRENT_DOMAIN_NO_TLD]
        </a>
      </div>

      <!-- Contact Form -->
      <div class="bg-[#F9F9FF] border border-[#E0E0E0] rounded-2xl p-10 shadow-lg space-y-6">
        <h3 class="text-xl text-center font-bold text-[#00C3FF] font-['Fredoka'] uppercase tracking-wider">
          Drop Us a Line
        </h3>
        <form id="contact-form" class="space-y-5">
          <input type="text" placeholder="Full Name" required
            class="w-full bg-white border border-[#CCC] text-[#1A1A1A] px-5 py-4 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00C3FF]">
          <input type="email" placeholder="Email Address" required
            class="w-full bg-white border border-[#CCC] text-[#1A1A1A] px-5 py-4 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00C3FF]">
          <textarea rows="4" placeholder="How can we help?" required
            class="w-full bg-white border border-[#CCC] text-[#1A1A1A] px-5 py-4 text-sm rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-[#00C3FF]"></textarea>
          <button type="button" id="send-btn"
            class="w-full bg-[#00C3FF] hover:bg-[#00A9DB] text-white font-bold py-4 text-sm uppercase rounded-lg transition">
            Send Message
          </button>
        </form>
        <div id="form-alert" class="hidden mt-4 p-4 bg-[#E8F5FF] text-[#00C3FF] text-center text-xs border border-[#00C3FF] rounded-md">
          ✅ Thanks for getting in touch! We'll reply as soon as we can.
        </div>
      </div>

      <!-- Right Contact Card -->
      <div class="bg-[#E0F7FA] border border-[#4DD0E1] p-6 rounded-xl shadow space-y-3 text-sm">
        <h4 class="font-bold text-[#00796B] uppercase tracking-wide font-['Fredoka']">Call Us</h4>
        <p class="text-[#37474F]">Speak directly with our Sydney-based team:</p>
        <p class="font-semibold text-[#212121]">+61 2 8012 4468</p>
        <p class="text-xs text-[#607D8B]">Available Mon–Fri, 9:00–17:00 AEST</p>
      </div>

    </div>
  </div>
</section>


<?php include "footer.php"; ?>
