<?php include "header.php"; ?>

<section id="contact" class="w-full bg-white py-20 px-4">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-12 md:gap-24 items-start">
    <!-- LEFT: Info & Details -->
    <div class="flex-1 max-w-lg">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#ff3d3d] mb-6">Contact our local team</h2>
      <p class="mb-8 text-[#5A4A3F] text-base font-medium">
        Got a query about your entry, payment, or just need some advice? Our Australian support crew is here to assist — with practical answers, no call-centre runaround.
      </p>
      <ul class="space-y-7">
        <li class="flex items-start gap-4">
          <span class="text-[#C9FF00] text-2xl mt-1">
            <svg width="26" height="26" fill="none" viewBox="0 0 24 24"><path d="M4 4h5l2 7-1.5 1.5a12.1 12.1 0 006 6l1.5-1.5 7 2v5a2 2 0 01-2 2C8.954 22 2 15.046 2 6A2 2 0 014 4z" stroke="currentColor" stroke-width="1.7"/></svg>
          </span>
          <div>
            <div class="font-bold text-[#23272F]">Phone</div>
            <div class="text-[#5A4A3F]">+61 2 2058 4554</div>
          </div>
        </li>
        <li class="flex items-start gap-4">
          <span class="text-[#C9FF00] text-2xl mt-1">
            <svg width="26" height="26" fill="none" viewBox="0 0 24 24"><path d="M4 4h16v16H4V4z" stroke="currentColor" stroke-width="1.7"/><path d="M4 4l8 8 8-8" stroke="currentColor" stroke-width="1.7"/></svg>
          </span>
          <div>
            <div class="font-bold text-[#23272F]">Email</div>
            <div class="text-[#5A4A3F] break-all">support@[CURRENT_DOMAIN_NO_TLD].com</div>
          </div>
        </li>
        <li class="flex items-start gap-4">
          <span class="text-[#C9FF00] text-2xl mt-1">
            <svg width="26" height="26" fill="none" viewBox="0 0 24 24"><path d="M12 21s8-7.36 8-12.08A8 8 0 0012 3a8 8 0 00-8 5.92C4 13.64 12 21 12 21z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="1.7"/></svg>
          </span>
          <div>
            <div class="font-bold text-[#23272F]">Office</div>
            <div class="text-[#5A4A3F]">
              Level 2, 210 Collins Street<br>
              Melbourne VIC 3000<br>
              <span class="text-xs text-[#7D6A55]">(Visits by prior arrangement only)</span>
            </div>
          </div>
        </li>
      </ul>
      <div class="mt-8 text-xs text-[#7D6A55]">
        <b>Note:</b> Our service is intended for adult Australian residents (18+). We operate strictly under local regulations and encourage safe, responsible participation.
      </div>
    </div>
    <!-- RIGHT: Contact Form -->
    <div class="flex-1 max-w-xl flex flex-col justify-center">
      <form id="contact-form" class="rounded-xl border border-[#C9FF00] bg-white p-7 md:p-8 flex flex-col gap-5 shadow-lg">
        <div class="text-[#FF3D7D] font-bold mb-2 text-base">Reach out anytime</div>
        <div class="flex gap-4 mb-2">
          <input type="text" name="name" placeholder="Your name"
            class="flex-1 border border-[#ECE1C6] bg-[#F9F4E6] rounded px-4 py-3 focus:border-[#C9FF00] outline-none text-[#23272F] text-base"
            required>
          <input type="email" name="email" placeholder="Your email"
            class="flex-1 border border-[#ECE1C6] bg-[#F9F4E6] rounded px-4 py-3 focus:border-[#C9FF00] outline-none text-[#23272F] text-base"
            required>
        </div>
        <select name="type"
          class="border border-[#ECE1C6] bg-[#F9F4E6] rounded px-4 py-3 text-[#23272F] focus:border-[#C9FF00] outline-none text-base"
          required>
          <option value="" disabled selected>Choose a topic</option>
          <option value="general">General enquiry</option>
          <option value="account">Account support</option>
          <option value="payment">Payment question</option>
          <option value="feedback">Feedback</option>
        </select>
        <textarea name="message" placeholder="Write your message here"
          class="border border-[#ECE1C6] bg-[#F9F4E6] rounded px-4 py-3 h-32 resize-none focus:border-[#C9FF00] outline-none text-[#23272F] text-base"></textarea>
        <div class="text-xs text-[#5A4A3F] text-center mb-2">
          We aim for prompt replies, always in line with Australian privacy and consumer standards.
        </div>
        <button type="submit"
          class="w-full py-3 rounded bg-[#C9FF00] text-[#23272F] font-bold text-base shadow-sm hover:bg-[#186A3B] hover:text-white transition">
          Send enquiry
        </button>
      </form>
      <div id="contact-success" class="hidden mt-10 text-center">
        <div class="inline-block rounded-2xl bg-[#C9FF00] text-[#23272F] px-8 py-8 shadow-lg border-2 border-[#186A3B] font-extrabold text-2xl">
          Thanks for reaching out! One of our team will be in touch soon.<br>
          We’ve sent a copy to your email.
        </div>
      </div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>