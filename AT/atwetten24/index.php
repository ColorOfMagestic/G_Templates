<?php include "header.php"; ?>
<main>

<section id="hero" class="relative pt-36 pb-16 bg-[#F7F9FC]">
  <div class="max-w-7xl mx-auto px-4 flex flex-col-reverse lg:flex-row items-center justify-between gap-10">

    <!-- LEFT: Text Block -->
    <div class="w-full lg:w-1/2 flex flex-col items-start">
      <h1 class="text-4xl md:text-5xl font-extrabold text-[#0E1A2B] leading-tight mb-4 w-full">
        DEINE QUOTE. DEIN SPIEL.<br>
        WETTEN MIT VERTRAUEN – MADE IN ÖSTERREICH
      </h1>
      <h2 class="text-3xl md:text-4xl font-black text-[#FFD700] mb-8 w-full">
        100% LEGAL, LIZENZIERT & DSGVO-KONFORM
      </h2>
      <button data-modal-target="registerModal"
        class="inline-flex items-center px-8 py-3 rounded-full font-semibold text-white bg-[#D00000] hover:bg-[#B00000] transition text-lg shadow-lg">
        Jetzt registrieren – starte sicher & gesetzeskonform!
      </button>
      <a href="/terms" target="_blank" class="mt-4 text-[#1CB5E0] font-medium text-base">
        Teilnahme ab 18&nbsp;| Lizenz gemäß NÖ WettG&nbsp;| AGB gelten
      </a>
    </div>

    <!-- RIGHT: Hero Image -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <img src="img/hero.webp" alt="Sportwetten Hero" class="max-w-full h-auto rounded-2xl shadow-lg" />
    </div>
  </div>

  <!-- Feature Cards -->
  <div class="mt-16 max-w-7xl mx-auto px-4">
    <div class="bg-white border border-[#DDE3EA] rounded-2xl shadow-lg px-6 py-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- Card 1 -->
        <div class="flex flex-col items-center text-center px-4">
          <img src="img/sport.svg" alt="" class="h-16 w-16 mb-4" />
          <h3 class="text-lg font-bold text-[#0E1A2B] mb-2">Top-Sportarten & Quoten</h3>
          <p class="text-[#1C1E21] text-base font-medium mb-1">
            Wetten auf Fußball, Tennis, Eishockey & mehr – mit offiziellen Quoten unserer lizenzierten Partner.
          </p>
          <p class="text-sm text-[#4B5563]">
            Live-Wetten, tagesaktuelle Angebote & Highlights aus nationalen und internationalen Wettbewerben.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="flex flex-col items-center text-center px-4">
          <img src="img/license.svg" alt="" class="h-16 w-16 mb-4" />
          <h3 class="text-lg font-bold text-[#0E1A2B] mb-2">Geprüfte Lizenz & Datenschutz</h3>
          <p class="text-[#1C1E21] text-base font-medium mb-1">
            Vollständig reguliert nach NÖ Wettgesetz – mit Datenschutz nach EU-DSGVO und laufender Kontrolle.
          </p>
          <p class="text-sm text-[#4B5563]">
            Deine Daten und Einsätze sind geschützt – transparent und nachvollziehbar.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="flex flex-col items-center text-center px-4">
          <img src="img/shield.svg" alt="" class="h-16 w-16 mb-4" />
          <h3 class="text-lg font-bold text-[#0E1A2B] mb-2">Schnelle & sichere Auszahlungen</h3>
          <p class="text-[#1C1E21] text-base font-medium mb-1">
            Gewinne werden zügig und sicher ausgezahlt – ohne komplizierte Umwege oder versteckte Gebühren.
          </p>
          <p class="text-sm text-[#4B5563]">
            Unser deutschsprachiges Support-Team in Wien hilft dir persönlich und zuverlässig.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<section id="terms-accordion" class="max-w-6xl mx-auto px-4 py-16">
  <div class="bg-white border border-[#DDE3EA] rounded-2xl shadow-lg overflow-hidden">
    <div class="px-6 py-6 md:py-10">
      <h2 class="text-xl md:text-3xl font-extrabold text-[#0E1A2B] mb-6 font-['Playfair_Display'] uppercase">
        Teilnahmebedingungen
      </h2>
      <div class="space-y-5 text-[#1C1E21] text-base leading-relaxed">
        <p>
          Diese Bonusaktion wird veranstaltet von <strong>ElectraWorks Europe Limited</strong>, registriert unter der Nummer C92801 mit Sitz im Penthouse Spinola Business Centre, 46 St. Christopher Street, Valletta, Malta, VLT 1464.
        </p>

        <ol class="list-decimal ml-6 space-y-4">
          <li>Der Aktionszeitraum beginnt am 03.03.2025 und endet am 31.12.2026 um 23:59 Uhr (MEZ).</li>
          <li>Das Angebot kann nicht mit anderen Registrierungsaktionen kombiniert werden.</li>
          <li>Mit deiner Teilnahme bestätigst du die Akzeptanz dieser Bedingungen, der <a href="/terms" class="text-[#D00000] hover:underline" target="_blank">AGB</a> sowie unserer <a href="/terms" class="text-[#D00000] hover:underline" target="_blank">Aktionsregeln</a>.</li>
          <li>Teilnahmeberechtigt sind Personen, die:
            <ol class="list-[lower-alpha] ml-6 mt-2 space-y-1">
              <li>mindestens 18 Jahre alt sind,</li>
              <li>sich im Aktionszeitraum erstmalig bei [CURRENT_DOMAIN_NO_TLD] registrieren,</li>
              <li>ihren Wohnsitz in Österreich haben,</li>
              <li>mindestens €10 einzahlen,</li>
              <li>eine akzeptierte Zahlungsmethode nutzen (z. B. Banküberweisung, EPS, Visa, PayPal, Giropay, u. a.).</li>
            </ol>
          </li>
          <li>Um den 100 % Willkommensbonus bis zu €100 zu erhalten, muss die qualifizierte Einzahlung innerhalb von 30 Tagen nach der Registrierung erfolgen.</li>
          <li>Der Mindestbetrag für eine bonusqualifizierende Einzahlung beträgt €10.</li>
          <li>Der Bonus wird automatisch nach erfolgreicher Einzahlung auf das Konto gutgeschrieben.</li>
          <li>Du hast 30 Tage nach der Registrierung Zeit, um deine qualifizierte Einzahlung durchzuführen.</li>
          <li>Pro Haushalt, Endgerät oder IP-Adresse ist nur ein Willkommensbonus möglich.</li>
          <li>Der Bonus ist nicht übertragbar und kann nicht mit anderen Aktionen kombiniert werden.</li>
          <li>Bonusart: Der Bonusbetrag und daraus resultierende Gewinne unterliegen Umsatzbedingungen.</li>
          <li>Bei vorzeitiger Löschung des Bonus verfallen auch alle daraus erzielten Gewinne.</li>
          <li>Sowohl Bonus als auch Einzahlung müssen jeweils dreimal zu einer Mindestquote von 1,70 umgesetzt werden.</li>
          <li>Nur Wetten im Bereich Sport werden für die Umsatzanforderungen angerechnet.</li>
          <li>Nach Aktivierung des Bonus hast du 90 Tage Zeit, um alle Bedingungen zu erfüllen – danach verfällt der Bonus inklusive etwaiger Gewinne.</li>
          <li>Den Status deines Bonus kannst du jederzeit im Kundenkonto einsehen.</li>
          <li>Bei Missbrauchsverdacht (z. B. betrügerisches Verhalten, Mehrfachregistrierung, Spielsucht) behalten wir uns das Recht vor, den Bonus sowie Gewinne zu stornieren.</li>
          <li>Verdachtsfälle können zur Sperrung des Kontos oder zur Aussetzung der Aktion führen.</li>
          <li>Wir behalten uns vor, Teilnehmer:innen ohne Angabe von Gründen vom Angebot auszuschließen, wenn Voraussetzungen nicht erfüllt sind.</li>
          <li>Diese Bedingungen können jederzeit geändert werden. Bitte informiere dich regelmäßig über den aktuellen Stand.</li>
          <li>Der Veranstalter behält sich das Recht vor, die Aktion jederzeit ohne Vorankündigung zu beenden.</li>
          <li>Nur ein Konto pro Person ist erlaubt. Eine Teilnahme wird ausgeschlossen bei:
            <ol class="list-[lower-alpha] ml-6 mt-2 space-y-1">
              <li>mehreren Konten pro IP-Adresse,</li>
              <li>mehreren Konten innerhalb eines Haushalts,</li>
              <li>identischen Zahlungsdaten oder E-Mail-Adressen,</li>
              <li>Verdacht auf Mehrfachkonten einer Person,</li>
              <li>Verdacht auf organisierte Wettabgaben zwischen mehreren Nutzer:innen.</li>
            </ol>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section id="certifications" class="relative py-16 px-4">
  <div class="absolute inset-0 z-0 bg-gradient-to-br from-[#F7F9FC] via-[#FFFFFF] to-[#EDEFF2]"></div>

  <div class="relative z-10 max-w-6xl mx-auto">
    <div
      class="bg-white/90 border border-[#DDE3EA] rounded-2xl shadow-lg py-10 px-6 flex flex-col items-center text-center backdrop-blur-sm">

      <h2 class="text-xl md:text-3xl font-extrabold text-[#0E1A2B] mb-6 font-['Playfair_Display'] uppercase">
        Lizenzen & Prüfsiegel
      </h2>

      <p class="text-[#4B5563] text-base max-w-3xl mb-10">
        [CURRENT_DOMAIN_NO_TLD] setzt auf geprüfte Qualität, rechtliche Sicherheit und Spielerschutz nach österreichischem Standard. Alle Partner sind durch anerkannte Behörden lizenziert und unterliegen regelmäßiger Kontrolle. Für dich heißt das: wetten mit Verantwortung – rechtlich sauber und transparent.
      </p>

      <div class="w-full rounded-2xl p-6 sm:p-10 shadow-lg bg-gradient-to-br from-[#F7F9FC] via-[#FFFFFF] to-[#EDEFF2]">
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-6 justify-items-center max-w-5xl mx-auto">

          <!-- Row 1 -->
          <a href="https://authorisation.mga.org.mt/verification.aspx?lang=EN&company=7627d226-df21-437e-89f2-5d323a0d88dd&details=1" target="_blank" rel="noopener noreferrer">
            <img src="img/mga_logo.webp" alt="Malta Gaming Authority" class="h-10 w-auto" />
          </a>
          <a href="https://www.ecogra.org/srs/dispute.php" target="_blank" rel="noopener noreferrer">
            <img src="img/ecogra.webp" alt="eCOGRA Zertifizierung" class="h-10 w-auto" />
          </a>
          <a href="http://www.egba.eu/" target="_blank" rel="noopener noreferrer">
            <img src="img/egba.webp" alt="EGBA Mitglied" class="h-10 w-auto" />
          </a>
          <a href="https://ibia.bet/" target="_blank" rel="noopener noreferrer">
            <img src="img/ibia-logo.webp" alt="IBIA Integrität" class="h-10 w-auto" />
          </a>
          <a href="https://www.gamcare.org.uk/" target="_blank" rel="noopener noreferrer">
            <img src="img/gamcare.webp" alt="GamCare Spielerschutz" class="h-10 w-auto" />
          </a>

          <!-- Row 2 -->
          <a href="http://www.gibraltar.gov.gi/new/remote-gambling" target="_blank" rel="noopener noreferrer">
            <img src="img/hm-gov-of-gibraltar.webp" alt="Regierung Gibraltar Lizenz" class="h-10 w-auto" />
          </a>
          <a href="http://www.itechlabs.com.au/" target="_blank" rel="noopener noreferrer">
            <img src="img/itech-labs.webp" alt="iTech Labs Testzertifikat" class="h-10 w-10" />
          </a>
          <a href="http://www.gamblingcommission.gov.uk/home.aspx" target="_blank" rel="noopener noreferrer">
            <img src="img/gambling-commission.webp" alt="UK Gambling Commission" class="h-10 w-auto" />
          </a>
          <a href="" rel="noopener noreferrer">
            <img src="img/18plus.webp" alt="Nur für 18+" class="h-10 w-10" />
          </a>
          <a href="https://www.playfaircode.at/" target="_blank" rel="noopener noreferrer">
            <img src="img/AT_PlayFair.webp" alt="Play Fair Code Austria" class="h-10 w-auto" />
          </a>

        </div>
      </div>

    </div>
  </div>
</section>


  <section id="contact" class="bg-[#F7F9FC] py-28 px-4 md:px-10 font-['Inter']">
  <div class="max-w-3xl mx-auto bg-white border border-[#DDE3EA] rounded-2xl shadow-lg p-8 sm:p-12">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#0E1A2B] text-center mb-8 font-['Playfair_Display'] uppercase">
      Kontakt aufnehmen
    </h2>

    <div id="contact-form-wrapper">
      <form id="contact-form" class="space-y-6">
        <div>
          <label for="name" class="block text-sm font-medium text-[#1C1E21] mb-1">Dein Name</label>
          <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-[#DDE3EA] rounded-lg text-sm focus:ring-2 focus:ring-[#D00000] outline-none" />
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-[#1C1E21] mb-1">E-Mail-Adresse</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-[#DDE3EA] rounded-lg text-sm focus:ring-2 focus:ring-[#D00000] outline-none" />
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-[#1C1E21] mb-1">Nachricht</label>
          <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-[#DDE3EA] rounded-lg text-sm focus:ring-2 focus:ring-[#D00000] outline-none"></textarea>
        </div>
        <button type="submit" class="w-full py-3 px-6 bg-[#D00000] text-white font-semibold rounded-full hover:bg-[#B00000] transition">
          Nachricht senden
        </button>
      </form>
    </div>

    <div id="contact-success" class="hidden text-center text-[#1C1E21]">
      <h3 class="text-2xl font-bold mt-6 mb-2">Vielen Dank!</h3>
      <p class="text-base text-[#4B5563]">Unser Team wird sich in Kürze mit dir in Verbindung setzen.</p>
    </div>
  </div>
</section>


</main>
<?php include "footer.php"; ?>