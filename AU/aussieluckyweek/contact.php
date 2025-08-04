<?php include "header.php"; ?>

<section id="contact" class="bg-[#121826] text-[#C0C9D7] font-['Nunito'] py-24 px-4 relative overflow-hidden">
  <div class="absolute top-10 left-10 w-64 h-64 bg-[#00F0FF] opacity-20 rounded-full blur-3xl -z-10"></div>
  <div class="absolute bottom-10 right-10 w-72 h-72 bg-[#FFD700] opacity-20 rounded-full blur-3xl -z-10"></div>

  <div class="max-w-7xl mx-auto text-center mb-16">
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#00F0FF] font-['Fredoka']">We're Here to Help</h2>
    <p class="mt-4 max-w-2xl mx-auto text-[#C0C9D7]/80 text-base md:text-lg">
      Questions about your ticket, a recent entry, or your confirmation email? Our Melbourne-based support team is ready with straightforward answers — no bots, no runaround.
    </p>
  </div>

  <div class="grid md:grid-cols-2 gap-10 max-w-7xl mx-auto">

    <!-- Contact Form -->
    <div class="bg-[#1C1F2A] rounded-2xl p-8 md:p-10 border border-[#2C2F3A] shadow-[0_0_25px_#00F0FF]/10 space-y-6">
      <h3 class="text-2xl font-bold text-[#FFD700] font-['Fredoka'] mb-4">Send a Quick Message</h3>
      <form id="contactForm" class="space-y-4">
        <input type="text" placeholder="Your Full Name" required class="w-full bg-[#121826] border border-[#2C2F3A] rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#00F0FF]">
        <input type="email" placeholder="Your Email" required class="w-full bg-[#121826] border border-[#2C2F3A] rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#00F0FF]">
        <select required class="w-full bg-[#121826] border border-[#2C2F3A] rounded-md px-4 py-3 text-[#C0C9D7] focus:outline-none focus:ring-2 focus:ring-[#00F0FF]">
          <option value="">Choose a Topic</option>
          <option>Access or Login Help</option>
          <option>Billing or Payment</option>
          <option>Ticket or Draw Question</option>
          <option>General Enquiry</option>
        </select>
        <textarea rows="5" placeholder="Type your message here..." required class="w-full bg-[#121826] border border-[#2C2F3A] rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#00F0FF]"></textarea>
        <button type="submit" class="w-full bg-[#FFD700] text-[#121826] font-bold px-6 py-3 rounded-full hover:bg-[#e6c200] transition">
          Submit Enquiry
        </button>
        <p id="contactSuccess" class="hidden text-sm text-[#00F0FF] mt-2">Thanks for reaching out — we'll be in touch shortly.</p>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="bg-gradient-to-br from-[#1C1F2A] to-[#181B24] border border-[#2C2F3A] rounded-2xl p-8 md:p-10 shadow-[0_0_30px_#FFD700]/10 space-y-6">
      <h3 class="text-2xl font-bold text-[#FFD700] font-['Fredoka'] mb-4">Contact Details</h3>

      <div class="space-y-4 text-sm text-[#C0C9D7]/90">
        <div>
          <p class="font-semibold text-[#00F0FF]">Phone</p>
          <p>
            <a href="tel:+61280124468" class="underline hover:text-[#FFD700]">
              +61 2 8012 4468
            </a><br>
            Mon–Fri: 9am to 5pm AEST
          </p>
        </div>

        <div>
          <p class="font-semibold text-[#00F0FF]">Email</p>
          <p>support@[CURRENT_DOMAIN_NO_TLD].com<br>We reply within one business day</p>
        </div>

        <div>
          <p class="font-semibold text-[#00F0FF]">Office</p>
          <p>Level 2, 210 Collins Street<br>Melbourne VIC 3000</p>
        </div>
      </div>

      <a href="tel:+61280124468" class="block md:hidden bg-[#FFD700] text-[#121826] font-semibold text-center px-6 py-3 rounded-full transition hover:bg-[#e6c200]">
        Call Support
      </a>

      <p class="text-xs text-[#C0C9D7]/60 pt-6 border-t border-[#2C2F3A]">
        Services available exclusively to Australian residents aged 18+. We operate in line with all national standards on consumer protection and data privacy.
      </p>
    </div>

  </div>
</section>

<?php include "footer.php"; ?>