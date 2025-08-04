<?php include "header.php"; ?>

<section id="contact" class="bg-[#FAFAFA] text-[#212121] py-28 px-4 md:px-10 font-['Inter']">
  <div class="max-w-5xl mx-auto space-y-16">

    <div class="text-center space-y-6">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#FF6F00] uppercase font-['Playfair_Display']">
        Kontakt Os
      </h2>
      <p class="text-base md:text-lg text-[#616161] max-w-2xl mx-auto leading-relaxed">
        Har du spørgsmål, kommentarer eller brug for hjælp vedrørende vores platform? Udfyld formularen nedenfor — vores team vender tilbage inden for kort tid i åbningstiden.
      </p>
    </div>

    <form id="contactForm" class="space-y-6 w-full max-w-2xl mx-auto" autocomplete="off" novalidate>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="name" required placeholder="Navn"
          class="w-full p-3 bg-white border border-[#E0E0E0] text-[#212121] rounded-none focus:outline-none focus:ring-2 focus:ring-[#FF6F00]">
        <input type="email" name="email" required placeholder="Email"
          class="w-full p-3 bg-white border border-[#E0E0E0] text-[#212121] rounded-none focus:outline-none focus:ring-2 focus:ring-[#FF6F00]">
      </div>
      <textarea name="message" rows="5" required placeholder="Besked"
        class="w-full p-3 bg-white border border-[#E0E0E0] text-[#212121] rounded-none focus:outline-none focus:ring-2 focus:ring-[#FF6F00]"></textarea>
      <button type="submit"
        class="bg-[#FF6F00] hover:bg-[#FFB300] text-white font-bold py-3 px-8 uppercase text-sm transition rounded-none">
        Send Besked
      </button>
      <div id="formSuccess" class="hidden text-[#00C853] font-semibold text-sm pt-4">
        Tak! Din besked er modtaget. Vores team kontakter dig snarest muligt inden for almindelig åbningstid.
      </div>
    </form>

  </div>
</section>



<?php include "footer.php"; ?>
