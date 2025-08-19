<?php include "header.php"; ?>

<section id="forgot-password" class="bg-[#0B0B0B] text-[#EAEAEA] py-28 px-6 font-['Nunito']">
  <div class="max-w-3xl mx-auto bg-[#111214] border border-[#3C3C3C] rounded-2xl shadow-2xl p-12 space-y-8" style="box-shadow:0 0 40px rgba(0,163,255,0.15);">

    <h2 id="forgotPasswordTitle" class="font-['Bebas_Neue'] text-5xl uppercase text-center tracking-wider" style="color:#00A3FF;letter-spacing:0.15em;">
      Need Help Accessing Your Account?
    </h2>

    <p class="text-center text-gray-300 text-lg leading-relaxed max-w-2xl mx-auto" style="line-height:1.8;">
      Lost or forgotten your password? No stress — it happens. Just fill out the form below, and we’ll send you a secure link to set up a new one. Your details are handled with the highest privacy standards.
    </p>

    <p class="text-center text-gray-400 text-sm max-w-2xl mx-auto" style="font-style:italic;">
      This process confirms that you’re the rightful account owner. No marketing emails, no third-party sharing — just secure verification.
    </p>

    <form class="space-y-6" aria-labelledby="forgotPasswordTitle" autocomplete="off" style="margin-top:1rem;">
      <input type="text" name="fullname" required placeholder="Your Full Name"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00A3FF]"
        style="box-shadow:inset 0 0 10px rgba(0,163,255,0.05);">
      
      <input type="tel" name="phone" required placeholder="Mobile Number"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00A3FF]"
        style="box-shadow:inset 0 0 10px rgba(0,163,255,0.05);">
      
      <input type="email" name="email" required placeholder="Email You Registered With"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00A3FF]"
        style="box-shadow:inset 0 0 10px rgba(0,163,255,0.05);">
      
      <textarea name="note" rows="3" placeholder="Additional Information (optional)"
        class="w-full px-5 py-4 bg-[#0B0B0B] border border-[#3C3C3C] text-base resize-none rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00A3FF]"
        style="box-shadow:inset 0 0 10px rgba(0,163,255,0.05);"></textarea>
      
      <button type="submit" data-modal-open="thanks"
        class="w-full bg-[#00A3FF] hover:bg-[#1EBBFF] text-[#0B0B0B] font-bold py-4 text-base uppercase tracking-wide transition rounded-lg"
        style="letter-spacing:0.05em;box-shadow:0 5px 20px rgba(0,163,255,0.4);">
        Send Password Reset Link
      </button>
    </form>

    <div class="text-center pt-4">
      <a href="#" data-modal-open="login" class="text-sm underline text-[#00A3FF] hover:text-white" style="transition:0.3s;">
        ← Return to Login
      </a>
    </div>

  </div>
</section>

<?php include "footer.php"; ?>