<?php include "header.php"; ?>

<section id="forgot-password" class="bg-[#FFF8E1] text-[#212121] py-28 px-6 font-['Nunito']">
  <div class="max-w-lg mx-auto bg-white border-2 border-[#2E7D32] rounded-2xl shadow-xl p-10 space-y-8">

    <h2 id="forgotPasswordTitle" class="text-3xl md:text-4xl font-['Playfair_Display'] font-extrabold uppercase text-center tracking-widest">
      Trouble Logging In?
    </h2>

    <p class="text-center text-[#424242] text-base leading-relaxed max-w-md mx-auto">
      No worries — it happens to the best of us. Just fill in your details below and we’ll send you a secure link to reset your password. It only takes a minute, and your info stays private and protected.
    </p>

    <p class="text-center text-[#424242] text-sm max-w-md mx-auto">
      This process helps us verify your identity and make sure it’s really you making the request. Your security is our top priority, and we’ll never share your personal details without consent.
    </p>

    <form class="space-y-5" aria-labelledby="forgotPasswordTitle" autocomplete="off">
      <input type="text" name="fullname" required placeholder="Full Name"
             class="w-full px-5 py-4 border border-[#DCDCDC] text-sm focus:outline-none focus:ring-2 focus:ring-[#2E7D32] rounded-md">

      <input type="tel" name="phone" required placeholder="Phone Number"
             class="w-full px-5 py-4 border border-[#DCDCDC] text-sm focus:outline-none focus:ring-2 focus:ring-[#2E7D32] rounded-md">

      <input type="email" name="email" required placeholder="Email Address"
             class="w-full px-5 py-4 border border-[#DCDCDC] text-sm focus:outline-none focus:ring-2 focus:ring-[#2E7D32] rounded-md">

      <textarea name="note" rows="3" placeholder="Any extra info (optional)"
                class="w-full px-5 py-4 border border-[#DCDCDC] text-sm resize-none focus:outline-none focus:ring-2 focus:ring-[#2E7D32] rounded-md"></textarea>

      <button type="submit" data-modal-open="thanks"
              class="w-full bg-[#212121] hover:bg-[#2E7D32] text-[#FFF8E1] font-bold py-4 text-sm uppercase tracking-wide transition rounded-md">
        Send Reset Instructions
      </button>
    </form>

    <div class="text-center pt-4">
      <a href="#" data-modal-open="login" class="text-sm underline text-[#2E7D32] hover:text-[#C62828]">
        ← Back to Login
      </a>
    </div>

  </div>
</section>

<?php include "footer.php"; ?>