<?php include "header.php"; ?>

<section id="contact" class="bg-[#121212] text-[#F5F5F5] py-20 px-6 h-[70vh]">
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12">
    
    <!-- Kontakt informacije -->
    <div class="space-y-6">
      <h2 class="text-3xl sm:text-4xl font-extrabold">Kontaktirajte nas</h2>
      <p class="text-[#BDBDBD]">
        Imate pitanja, prijedloge ili želite suradnju? Javite se timu [CURRENT_DOMAIN_NO_TLD] i odgovorit ćemo vam u najkraćem mogućem roku.
      </p>
      <ul class="space-y-2 text-[#BDBDBD]">
        <li><strong>E-mail:</strong> <a href="mailto:contact@[CURRENT_DOMAIN_NO_TLD].com" class="hover:text-[#FF6F00] transition">contact@[CURRENT_DOMAIN_NO_TLD].com</a></li>
        <li><strong>Radno vrijeme:</strong> Pon–Pet, 9:00 – 18:00 (CET)</li>
      </ul>
    </div>

    <!-- Kontakt forma -->
    <form id="contact-form" class="space-y-6">
      <div>
        <input type="text" placeholder="Vaše ime" required class="w-full px-4 py-3 bg-[#1E1E1E] border border-[#2A2A2A] rounded-lg text-[#F5F5F5] placeholder-[#BDBDBD] focus:outline-none focus:ring-2 focus:ring-[#D32F2F]">
      </div>
      <div>
        <input type="email" placeholder="Vaš e-mail" required class="w-full px-4 py-3 bg-[#1E1E1E] border border-[#2A2A2A] rounded-lg text-[#F5F5F5] placeholder-[#BDBDBD] focus:outline-none focus:ring-2 focus:ring-[#D32F2F]">
      </div>
      <div>
        <textarea placeholder="Vaša poruka" rows="5" required class="w-full px-4 py-3 bg-[#1E1E1E] border border-[#2A2A2A] rounded-lg text-[#F5F5F5] placeholder-[#BDBDBD] focus:outline-none focus:ring-2 focus:ring-[#D32F2F]"></textarea>
      </div>
      <div>
        <button type="submit" class="w-full py-3 bg-[#D32F2F] hover:bg-[#FF5252] text-white font-semibold rounded-lg transition">
          Pošalji poruku
        </button>
      </div>
      <p id="form-success" class="hidden text-green-500 font-medium text-center">Vaša poruka je poslana. Naš tim će vam se uskoro javiti.</p>
    </form>
  </div>
</section>

<?php include "footer.php"; ?>
