<?php include "header.php"; ?>
<main>
  
<section id="hero" class="relative w-full h-[90vh] flex items-center justify-center overflow-hidden">
  <video class="absolute inset-0 w-full h-full object-cover object-center z-0" autoplay loop muted playsinline>
    <source src="https://player.vimeo.com/external/488041500.hd.mp4?s=3a920581e8808dd2ade834578cc52d7af2c00048&amp;profile_id=175" type="video/mp4">
  </video>
  <div class="relative z-20 flex flex-col items-center justify-center text-center px-4 w-full max-w-2xl mx-auto">
    <section
      id="signup"
      class="w-full max-w-md mx-auto rounded-2xl px-0 py-0 my-10 flex items-center justify-center min-h-[420px] relative"
    >
      <div class="w-full max-w-sm mx-auto p-0 flex flex-col items-center">
        <div id="signup-collapsed"
          class="w-full rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-7 pt-10 pb-8 border border-white/40 relative transition-all duration-500">
          <img src="img/login-top.webp" alt="Anmelde-Banner" class="mx-auto -mt-44 mb-2 w-60 rounded-xl shadow" />
          <label for="username-short"
            class="block text-[#16335A] text-lg md:text-2xl font-semibold text-center mb-4 leading-tight">
            Wähle deinen<br><span class="font-bold">Spielernamen</span>
          </label>
          <input
            id="username-short"
            type="text"
            placeholder="Benutzername"
            autocomplete="username"
            class="w-full rounded-lg px-4 py-3 bg-white/80 text-[#222831] font-semibold text-lg shadow border border-[#FFCE00] focus:outline-none focus:border-[#16335A] transition mb-3"
            required
          >
          <button
            type="button"
            id="expand-signup"
            class="block mx-auto mt-3 transition-transform hover:scale-110 active:scale-95"
            aria-label="Registrierungsformular anzeigen"
          >
            <svg width="36" height="22" viewBox="0 0 36 22" fill="none">
              <polygon points="18,20 3,4 33,4" fill="#FFCE00" stroke="#16335A" stroke-width="2"/>
            </svg>
          </button>
        </div>

        <div id="signup-expanded"
          class="hidden w-full rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-7 pt-8 pb-8 border border-white/40 relative transition-all duration-500">
          <img src="img/login-top.webp" alt="Anmelde-Banner" class="mx-auto -mt-44 mb-2 w-60 rounded-xl shadow" />
          <h2 class="font-montserrat font-extrabold text-lg md:text-2xl text-[#16335A] mb-2 text-center">
            Erstelle deinen Account
          </h2>
          <form class="space-y-4 mt-2">
            <input
              type="text"
              placeholder="Benutzername"
              autocomplete="username"
              class="w-full rounded-xl border border-[#FFCE00] px-4 py-3 bg-white/80 text-[#222831] font-semibold text-base shadow focus:outline-none focus:border-[#16335A] transition"
              required
            >
            <input
              type="email"
              placeholder="E-Mail"
              autocomplete="email"
              class="w-full rounded-xl border border-[#F5F5F5] px-4 py-3 bg-white/80 text-[#222831] font-semibold text-base shadow focus:outline-none focus:border-[#FFCE00] transition"
              required
            >
            <input
              type="password"
              placeholder="Passwort"
              autocomplete="new-password"
              class="w-full rounded-xl border border-[#F5F5F5] px-4 py-3 bg-white/80 text-[#222831] font-semibold text-base shadow focus:outline-none focus:border-[#FFCE00] transition"
              required
            >
            <div class="flex items-center gap-2">
              <input type="checkbox" id="age-check" class="accent-[#FFCE00] w-5 h-5" required>
              <label for="age-check" class="text-sm text-[#16335A]">Ich bin mindestens 18 Jahre alt.</label>
            </div>
            <div class="flex items-center gap-2">
              <input type="checkbox" id="newsletter" class="accent-[#FFCE00] w-5 h-5">
              <label for="newsletter" class="text-sm text-[#16335A]">Ja, ich möchte Angebote & Freispiele erhalten.</label>
            </div>
            <div class="flex items-center gap-2">
              <input type="checkbox" id="terms" class="accent-[#FFCE00] w-5 h-5" required>
              <label for="terms" class="text-sm text-[#16335A]">
                Ich akzeptiere die
                <a href="/terms"
                   class="underline text-[#FFCE00] hover:text-[#16335A] transition" target="_blank">AGB</a>
                und die
                <a href="/privacy"
                   class="underline text-[#FFCE00] hover:text-[#16335A] transition" target="_blank">Datenschutzrichtlinie</a>.
              </label>
            </div>
            <button
              data-modal="info-modal"
              class="w-full py-3 rounded-2xl font-bold bg-gradient-to-r from-[#FFCE00] to-[#FF9100] text-[#16335A] text-lg shadow-lg border border-white/30 backdrop-blur-md hover:scale-105 transition"
            >
              Account erstellen
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
</section>

</main>
<?php include "footer.php"; ?>