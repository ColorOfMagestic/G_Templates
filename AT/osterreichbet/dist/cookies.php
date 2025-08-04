<?php include "header.php"; ?>

<section id="cookies" class="bg-gradient-to-br from-[#F7F9FC] to-[#E6E6E6] text-[#1E1E1E] py-24 px-4 md:px-10">
  <div class="max-w-6xl mx-auto space-y-16">

    <!-- Intro -->
    <div class="text-center space-y-4">
      <h2 class="text-xl md:text-3xl font-extrabold uppercase tracking-wide text-[#A00000] font-['Playfair_Display']">
        Cookie-Richtlinie
      </h2>
      <p class="text-base md:text-lg text-[#2F5233] max-w-3xl mx-auto">
        Auf <strong>[CURRENT_DOMAIN_NO_TLD]</strong> verwenden wir Cookies, um Funktionalität, Sicherheit und Nutzererlebnis zu verbessern – selbstverständlich DSGVO-konform und transparent.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Zweck</h3>
        <p class="text-sm leading-relaxed">
          Cookies speichern z. B. Spracheinstellungen, Login-Zustände und tragen zur Stabilität und Sicherheit der Website bei.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Cookie-Arten</h3>
        <p class="text-sm leading-relaxed">
          Unterschieden wird zwischen notwendigen, funktionalen, Analyse- und Marketing-Cookies. Letztere nur mit aktiver Einwilligung.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Drittanbieter</h3>
        <p class="text-sm leading-relaxed">
          Externe Dienste (z. B. Stripe, Google) können Cookies setzen – jedoch ohne Zugriff auf deine persönlichen Daten.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Deine Kontrolle</h3>
        <p class="text-sm leading-relaxed">
          Nicht essenzielle Cookies kannst du jederzeit im Banner oder in den Browsereinstellungen deaktivieren – ohne Nachteile.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Rechtliche Basis</h3>
        <p class="text-sm leading-relaxed">
          Wir halten uns strikt an die DSGVO, die österreichische Datenschutzbehörde und die Google Ads-Vorgaben zur Einwilligung.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Aktualisierungen</h3>
        <p class="text-sm leading-relaxed">
          Änderungen werden stets aktuell auf dieser Seite veröffentlicht und gelten ab dem Zeitpunkt der Veröffentlichung.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Essenzielle Services</h3>
        <p class="text-sm leading-relaxed">
          Sicherheits- und Identitätsfunktionen sind technisch notwendig und können nicht deaktiviert werden. Sie sind kurzfristig und datensparsam.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Speicherdauer</h3>
        <p class="text-sm leading-relaxed">
          Je nach Art werden Cookies sofort, nach Sitzung oder nach bis zu 12 Monaten automatisch gelöscht – oder manuell über deinen Browser.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow border border-[#C0C0C0] p-6 md:col-span-2">
        <h3 class="text-lg font-bold text-[#ED1C24] mb-2">Transparenz & Freiwilligkeit</h3>
        <p class="text-sm leading-relaxed">
          Keine vorausgewählten Häkchen, keine versteckten Tracker – deine Zustimmung ist freiwillig, informiert und widerrufbar.
        </p>
      </div>
    </div>

    <!-- Cookie Table -->
    <div class="overflow-x-auto bg-white rounded-xl shadow border border-[#C0C0C0]">
      <table class="min-w-full text-sm text-left text-[#1E1E1E]">
        <thead class="bg-[#ED1C24] text-white uppercase">
          <tr>
            <th class="px-4 py-3 font-bold">Kategorie</th>
            <th class="px-4 py-3 font-bold">Zweck</th>
            <th class="px-4 py-3 font-bold">Beispiel</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-[#E0E0E0]">
          <tr>
            <td class="px-4 py-3 font-semibold">Notwendig</td>
            <td class="px-4 py-3">Sitzungsverwaltung, Login, Sicherheit</td>
            <td class="px-4 py-3">session_id, csrf_token</td>
          </tr>
          <tr>
            <td class="px-4 py-3 font-semibold">Präferenzen</td>
            <td class="px-4 py-3">Sprache, Theme-Auswahl</td>
            <td class="px-4 py-3">locale=de_AT, theme=light</td>
          </tr>
          <tr>
            <td class="px-4 py-3 font-semibold">Analyse</td>
            <td class="px-4 py-3">Nutzerverhalten anonym analysieren</td>
            <td class="px-4 py-3">Google Analytics, Matomo</td>
          </tr>
          <tr>
            <td class="px-4 py-3 font-semibold">Marketing</td>
            <td class="px-4 py-3">Personalisierte Werbung (nur mit Opt-in)</td>
            <td class="px-4 py-3">Meta Pixel, Google Ads</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Kontakt -->
    <div class="text-sm text-center pt-8 border-t border-[#C0C0C0]/40 text-[#4B4B4B]">
      Mehr Infos findest du in unserer <a href="/privacy" class="underline text-[#ED1C24] hover:text-[#2F5233]">Datenschutzerklärung</a>
      oder per E-Mail an <a href="/contact" class="underline text-[#ED1C24] hover:text-[#2F5233]">support@[CURRENT_DOMAIN_NO_TLD]</a>.
    </div>

  </div>
</section>


<?php include "footer.php"; ?>
