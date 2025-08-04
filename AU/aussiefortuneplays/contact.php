<?php include "header.php"; ?>
<section id="contact" class="bg-[#FAFAFA] text-[#1A1A1A] py-16 px-4">
  <div class="max-w-4xl mx-auto space-y-12">

    <!-- Header -->
    <div class="text-center space-y-4">
      <h2 class="text-3xl md:text-4xl font-extrabold text-[#0D47A1]">Got a Question?</h2>
      <p class="max-w-2xl mx-auto text-sm md:text-base text-[#444]">
        Need help with a ticket or just curious? Reach out — our Aussie support crew is here to assist, with zero bots involved.
      </p>
    </div>

    <!-- Contact Form Card (Modified Layout) -->
<div class="bg-white border border-[#E0E0E0] shadow rounded-xl p-6 space-y-4">
  <h3 class="text-xl font-semibold text-[#0D47A1]">Drop Us a Line</h3>

  <form class="space-y-4">
    <div class="grid md:grid-cols-2 gap-4">
      <!-- Left Column: Name + Email -->
      <div class="space-y-4">
        <input type="text" required placeholder="Your Name"
          class="w-full px-3 py-2 border border-[#CFCFCF] rounded focus:ring-2 focus:ring-[#FFD700] focus:outline-none text-sm" />
        <input type="email" required placeholder="Email Address"
          class="w-full px-3 py-2 border border-[#CFCFCF] rounded focus:ring-2 focus:ring-[#FFD700] focus:outline-none text-sm" />
      </div>

      <!-- Right Column: Topic + Message -->
      <div class="space-y-4">
        <select required
          class="w-full px-3 py-2 border border-[#CFCFCF] rounded focus:ring-2 focus:ring-[#FFD700] focus:outline-none text-sm">
          <option disabled selected>Select Topic</option>
          <option>Ticket or Entry</option>
          <option>Payments</option>
          <option>Draw Information</option>
          <option>Website Issues</option>
          <option>Other</option>
        </select>
        <textarea rows="5" required placeholder="Your Message"
          class="w-full px-3 py-2 border border-[#CFCFCF] rounded focus:ring-2 focus:ring-[#FFD700] focus:outline-none text-sm"></textarea>
      </div>
    </div>

    <p class="text-xs text-[#555]">
      All enquiries are handled in Australia, under national consumer standards.
    </p>

    <button type="submit"
      class="bg-[#FF6F00] hover:bg-[#FDC100] text-[#1A1A1A] px-5 py-2 rounded-full font-semibold text-sm w-full sm:w-auto transition">
      Submit
    </button>
  </form>
</div>


    <!-- Contact Info Card -->
    <div class="bg-[#E0E0E0] rounded-xl p-6 space-y-4 shadow-inner text-sm">
      <h3 class="text-xl font-semibold text-[#0D47A1]">Contact Details</h3>

      <div class="md:flex justify-between">
        <div>
          <p class="font-medium">Phone</p>
          <p class="text-[#333] mt-1"><a href="tel:+61280124468" class="hover:underline transition">+61 2 8012 4468</a><br>Mon–Fri, 9:00–17:00 AEST</p>
        </div>
        <div>
          <p class="font-medium">Email</p>
          <p class="text-[#333] mt-1"><a href="mailto:support@[CURRENT_DOMAIN_NO_TLD].com" class="hover:underline transition">support@[CURRENT_DOMAIN_NO_TLD].com</a></p>
        </div>
        <div>
          <p class="font-medium">Address</p>
          <p class="text-[#333] mt-1 leading-relaxed">
            Level 2, 210 Collins Street<br>
            Melbourne VIC 3000
          </p>
        </div>
      </div>

      <p class="text-xs text-[#333] pt-3 border-t border-[#C7B299]">
        For residents 18+ in Australia. We operate under local laws and promote responsible participation.
      </p>
    </div>
  </div>
</section>



<?php include "footer.php"; ?>
