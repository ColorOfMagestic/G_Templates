<?php include "header.php"; ?>

<section id="contact" class="bg-[#161D34] text-[#F7F8FA] py-20 px-6 h-[70vh] flex items-center">
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 w-full">
    <div class="space-y-6 flex flex-col justify-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-[#E41C23]">Kontaktiraj nas</h2>
      <p class="text-[#BDBDBD]">
        Imaš pitanja, prijedlog ili želiš surađivati? Piši ekipi s [CURRENT_DOMAIN_NO_TLD] i odgovorit ćemo ti čim stignemo — obično unutar jednog radnog dana.
      </p>
      <p class="text-[#BDBDBD]">
        Otvoreni smo za sve upite — bilo da trebaš pomoć oko registracije, imaš prijedlog za poboljšanje stranice ili želiš podijeliti svoje iskustvo s online casinima. Povjerenje i zadovoljstvo korisnika su nam na prvom mjestu!
      </p>
      <ul class="space-y-2 text-[#BDBDBD]">
        <li>
          <strong>E-mail:</strong>
          <a href="mailto:contact@[CURRENT_DOMAIN_NO_TLD].com" class="hover:text-[#E41C23] transition">
            contact@[CURRENT_DOMAIN_NO_TLD].com
          </a>
        </li>
        <li>
          <strong>Radno vrijeme:</strong> pon–pet, 9:00 – 18:00 (CET)
        </li>
        <li>
          Na upite odgovaramo najkasnije u roku od 24 sata. Vikendom i blagdanima može potrajati malo duže, ali ne brini — svaka poruka je važna!
        </li>
        <li>
          Tvoje podatke koristimo isključivo za kontakt i nikada ih ne dijelimo trećim stranama. Više o privatnosti pročitaj u <a href="/privacy" class="underline text-[#FFD700] hover:text-[#E41C23]">pravilima privatnosti</a>.
        </li>
      </ul>
    </div>
    <form id="contact-form" class="space-y-6">
      <div>
        <input type="text" placeholder="Tvoje ime" required class="w-full px-4 py-3 bg-white border border-[#FFD700] rounded-lg text-[#161D34] placeholder-[#7D6A55] focus:outline-none focus:ring-2 focus:ring-[#E41C23]">
      </div>
      <div>
        <input type="email" placeholder="Tvoj e-mail" required class="w-full px-4 py-3 bg-white border border-[#FFD700] rounded-lg text-[#161D34] placeholder-[#7D6A55] focus:outline-none focus:ring-2 focus:ring-[#E41C23]">
      </div>
      <div>
        <textarea placeholder="Tvoja poruka" rows="5" required class="w-full px-4 py-3 bg-white border border-[#FFD700] rounded-lg text-[#161D34] placeholder-[#7D6A55] focus:outline-none focus:ring-2 focus:ring-[#E41C23]"></textarea>
      </div>
      <div>
        <button type="submit" class="w-full py-3 bg-[#E41C23] hover:bg-[#FFD700] hover:text-[#161D34] text-white font-semibold rounded-lg transition">
          Pošalji poruku
        </button>
      </div>
      <p id="form-success" class="hidden text-green-500 font-medium text-center">Poruka je poslana. Naš tim će ti se javiti uskoro. Hvala na povjerenju!</p>
    </form>
  </div>
</section>

<?php include "footer.php"; ?>
