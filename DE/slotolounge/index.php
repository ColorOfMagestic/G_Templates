<?php include "header.php"; ?>
<main>
  
<section
  id="hero"
  class="relative w-full min-h-[90vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#3A1C71] via-[#D76D77] to-[#FFAF7B]"
>
  <!-- Hintergrundbild -->
  <div class="absolute inset-0 w-full h-full z-0">
    <img
      src="img/hero-bg.webp"
      alt="Slotolounge Startbild"
      class="w-full h-full object-cover object-center opacity-80"
      loading="lazy"
    />
    <div class="absolute inset-0 bg-[#23213B]/60"></div>
  </div>

  <div class="relative z-20 flex flex-col items-center justify-center text-center px-4 w-full max-w-2xl mx-auto">
    <!-- Begrüßung und Beschreibung -->
    <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-3 drop-shadow font-[Montserrat]">
      Willkommen bei Slotolounge
    </h1>
    <p class="text-lg md:text-xl text-[#ECE1C6] mb-8 font-medium">
      Entdecke faire Unterhaltung, tägliche Aktionen und mehr als 200 Slots – alles legal, transparent und nur für Erwachsene in Deutschland.
    </p>

    <section
      id="signup"
      class="w-full max-w-md mx-auto rounded-2xl px-0 py-0 my-10 flex items-center justify-center min-h-[420px] relative"
    >
      <div class="w-full max-w-sm mx-auto p-0 flex flex-col items-center">
        <!-- Minimiertes Formular -->
        <div
          id="signup-collapsed"
          class="w-full rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-7 pt-10 pb-8 border border-white/40 relative transition-all duration-500"
        >
          <img
            src="img/login-top.webp"
            alt="Registrierungsbanner"
            class="mx-auto -mt-44 mb-2 w-72 rounded-xl"
          />
          <label
            for="username-short"
            class="block text-[#1C1B1F] text-lg md:text-2xl font-semibold text-center mb-4 leading-tight"
          >
            Wähle deinen<br /><span class="font-bold">individuellen Spielernamen</span>
          </label>
          <input
            id="username-short"
            type="text"
            placeholder="Benutzername"
            autocomplete="username"
            class="w-full rounded-lg px-4 py-3 bg-white/80 text-[#1C1B1F] font-semibold text-lg shadow border border-[#FF5F00] focus:outline-none focus:border-[#3A1C71] transition mb-3"
            required
          />
          <button
            type="button"
            id="expand-signup"
            class="block mx-auto mt-3 transition-transform hover:scale-110 active:scale-95"
            aria-label="Registrierungsformular anzeigen"
          >
            <svg width="36" height="22" viewBox="0 0 36 22" fill="none">
              <polygon points="18,20 3,4 33,4" fill="#FF5F00" stroke="#1C1B1F" stroke-width="2" />
            </svg>
          </button>
        </div>

        <!-- Ausgeklapptes Formular -->
        <div
          id="signup-expanded"
          class="hidden w-full rounded-2xl bg-white/30 backdrop-blur-lg shadow-2xl px-7 pt-8 pb-8 border border-white/40 relative transition-all duration-500"
        >
          <img
            src="img/login-top.webp"
            alt="Registrierungsbanner"
            class="mx-auto -mt-44 mb-2 w-60 rounded-xl shadow"
          />
          <h2 class="font-[Montserrat] font-extrabold text-lg md:text-2xl text-[#1C1B1F] mb-2 text-center">
            Erstelle jetzt deinen kostenlosen Account
          </h2>
          <form class="space-y-4 mt-2">
            <input
              type="text"
              placeholder="Benutzername"
              autocomplete="username"
              class="w-full rounded-xl border border-[#FF5F00] px-4 py-3 bg-white/80 text-[#1C1B1F] font-semibold text-base shadow focus:outline-none focus:border-[#3A1C71] transition"
              required
            />
            <input
              type="email"
              placeholder="E-Mail"
              autocomplete="email"
              class="w-full rounded-xl border border-[#F5F5F5] px-4 py-3 bg-white/80 text-[#1C1B1F] font-semibold text-base shadow focus:outline-none focus:border-[#FF5F00] transition"
              required
            />
            <input
              type="password"
              placeholder="Passwort"
              autocomplete="new-password"
              class="w-full rounded-xl border border-[#F5F5F5] px-4 py-3 bg-white/80 text-[#1C1B1F] font-semibold text-base shadow focus:outline-none focus:border-[#FF5F00] transition"
              required
            />
            <div class="flex items-center gap-2">
              <input type="checkbox" id="age-check" class="accent-[#FF5F00] w-5 h-5" required />
              <label for="age-check" class="text-sm text-[#1C1B1F]">Ich bin mindestens 18 Jahre alt und bestätige meinen Wohnsitz in Deutschland.</label>
            </div>
            <div class="flex items-center gap-2">
              <input type="checkbox" id="newsletter" class="accent-[#FF5F00] w-5 h-5" />
              <label for="newsletter" class="text-sm text-[#1C1B1F]">Ja, ich möchte Angebote & Freispiele per E-Mail erhalten.</label>
            </div>
            <div class="flex items-center gap-2">
              <input type="checkbox" id="terms" class="accent-[#FF5F00] w-5 h-5" required />
              <label for="terms" class="text-sm text-[#1C1B1F]">
                Ich akzeptiere die
                <a
                  href="/terms"
                  class="underline text-[#FF5F00] hover:text-[#3A1C71] transition"
                  target="_blank"
                  >AGB</a
                >
                und die
                <a
                  href="/privacy"
                  class="underline text-[#FF5F00] hover:text-[#3A1C71] transition"
                  target="_blank"
                  >Datenschutzrichtlinie</a
                >.
              </label>
            </div>
            <button
              data-modal="info-modal"
              class="w-full py-3 rounded-2xl font-bold bg-gradient-to-r from-[#FF5F00] to-[#7CFFCB] text-[#23213B] text-lg shadow-lg border border-white/30 backdrop-blur-md hover:scale-105 transition"
            >
              Kostenlos registrieren
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
</section>


</main>
<?php include "footer.php"; ?>