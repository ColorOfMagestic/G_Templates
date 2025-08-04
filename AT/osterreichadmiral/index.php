<?php include "header.php"; ?>
<main>

<section id="hero" class="relative pt-36 pb-12 min-h-[100vh] bg-[#152848] overflow-hidden">
  <div class="absolute inset-0 z-0 w-full h-full pointer-events-none">
    <img src="img/hero-bg.webp" alt="Sportwetten Hintergrund" class="object-cover w-full h-full opacity-80" />
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 flex flex-col items-start">
    <div class="w-full md:max-w-2xl flex flex-col items-start">
      <h1 class="text-4xl md:text-5xl font-extrabold text-[#F3F6F9] leading-tight mb-4 text-left w-full drop-shadow">
        DEIN SPIEL. DEINE REGELN.<br>
        WETTEN, WIE’S IN WIEN GEHÖRT.
      </h1>
      <h2 class="text-3xl md:text-5xl font-black text-[#FFD700] mb-8 drop-shadow text-left w-full">
        100 % LIZENZIERT & RECHTSSICHER
      </h2>
      <a href="/register" class="flex items-center px-10 py-4 rounded-md font-bold text-white bg-[#ED1C24] hover:bg-[#FFD700] hover:text-[#152848] transition text-xl shadow-lg mb-3">
        Jetzt registrieren
        <img src="img/arrow.svg" alt="Icon" class="ml-2 h-5 w-5" />
      </a>
    </div>

    <div class="mt-12 w-full flex flex-col items-start gap-6">
      <div class="w-full max-w-md bg-[#233053] rounded-md px-6 py-5 flex items-center gap-4 min-h-[80px] shadow-md justify-start">
        <span class="text-[#F3F6F9] text-base font-semibold text-left">
          Wette auf Fußball, Tennis & mehr – mit offiziellen Quoten und geprüften Anbietern aus Österreich.
        </span>
      </div>
      <div class="w-full max-w-md bg-[#233053] rounded-md px-6 py-5 flex items-center gap-4 min-h-[80px] shadow-md justify-start">
        <span class="text-[#F3F6F9] text-base font-semibold text-left">
          Volle Transparenz: registriert in Österreich, reguliert nach geltendem Recht, 100 % legal.
        </span>
      </div>
      <div class="w-full max-w-md bg-[#233053] rounded-md px-6 py-5 flex items-center gap-4 min-h-[80px] shadow-md justify-start">
        <span class="text-[#F3F6F9] text-base font-semibold text-left">
          Blitzschnelle Auszahlungen, echte Quoten – alles abgesichert und seriös.
        </span>
      </div>
    </div>

    <a href="/terms" target="_blank" class="font-medium text-base text-left w-full mt-6 text-[#ED1C24] hover:text-[#FFD700]">
      Teilnahme nur für Personen ab 18 Jahren&nbsp;| Es gelten die AGB
    </a>
  </div>
</section>

<section id="how-it-works" class="w-full bg-[#10192B] py-20 px-4">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#FFD700] mb-10 text-left">
      So läuft’s bei uns
    </h2>
    <div class="flex flex-col md:flex-row gap-8">
      
      <div class="flex-1 bg-[#152848] rounded-md px-7 py-8 flex flex-col items-start shadow-lg">
        <div class="mb-4">
          <img src="img/user.svg" alt="Registrierung" class="h-14 w-14" />
        </div>
        <h3 class="text-xl font-bold text-[#F3F6F9] mb-2">Registrieren</h3>
        <p class="text-[#F2F4F8] text-base">
          Lege dein persönliches Konto bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong> an – in wenigen Schritten, 100 % kostenfrei und DSGVO-konform.
        </p>
      </div>

      <div class="flex-1 bg-[#152848] rounded-md px-7 py-8 flex flex-col items-start shadow-lg">
        <div class="mb-4">
          <img src="img/wallet.svg" alt="Zahlung" class="h-14 w-14" />
        </div>
        <h3 class="text-xl font-bold text-[#F3F6F9] mb-2">Einzahlen</h3>
        <p class="text-[#F2F4F8] text-base">
          Nutze bewährte Zahlungsmethoden – von Banküberweisung bis Sofort – speziell für Nutzer:innen aus Österreich.
        </p>
      </div>

      <div class="flex-1 bg-[#152848] rounded-md px-7 py-8 flex flex-col items-start shadow-lg">
        <div class="mb-4">
          <img src="img/coin.svg" alt="Wetten" class="h-14 w-14" />
        </div>
        <h3 class="text-xl font-bold text-[#F3F6F9] mb-2">Wette platzieren</h3>
        <p class="text-[#F2F4F8] text-base">
          Wähle deine Lieblingssportart, spiele verantwortungsvoll – Gewinne werden transparent auf dein Konto ausgezahlt.
        </p>
      </div>

    </div>
  </div>
</section>

<section id="terms-accordion" class="bg-[#10192B] py-16 px-4">
  <div class="max-w-3xl mx-auto">
    <details open class="rounded-2xl border border-[#FFD700] bg-[#152848] shadow-2xl mb-6 transition-all duration-300">
      <summary class="flex justify-between items-center px-8 py-6 cursor-pointer font-extrabold text-[#FFD700] text-lg md:text-2xl  select-none tracking-wide">
        TEILNAHMEBEDINGUNGEN
        <svg class="ml-2 w-7 h-7 transition-transform duration-300 details-open:rotate-180" fill="none" stroke="#FFD700" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
      </summary>
      <div class="px-8 py-6 text-[#F2F4F8] text-base space-y-5 leading-relaxed">
        <p>
          Diese Teilnahmebedingungen gelten für das Willkommensangebot auf <strong>[CURRENT_DOMAIN_NO_TLD]</strong>. Weitere rechtliche Hinweise findest du in unseren
          <a href="/terms" class="underline text-[#ED1C24] hover:text-[#FFD700] transition" target="_blank">Allgemeinen Geschäftsbedingungen</a>.
        </p>
        <ol class="list-decimal ml-7 space-y-2">
          <li>Die Aktion beginnt am 03.03.2025 und läuft voraussichtlich bis einschließlich 31.12.2026, 23:59 Uhr (CET).</li>
          <li>Nur neue Nutzer:innen mit Wohnsitz in Österreich können an dieser Aktion teilnehmen.</li>
          <li>Die Registrierung muss eigenständig und mit korrekten Daten erfolgen.</li>
          <li>Voraussetzungen für die Teilnahme:
            <ol class="list-[lower-alpha] ml-7">
              <li>vollendetes 18. Lebensjahr;</li>
              <li>Wohnsitz in Österreich;</li>
              <li>Eröffnung eines neuen Benutzerkontos während des Aktionszeitraums;</li>
              <li>eine qualifizierte Ersteinzahlung ab mindestens €10 über ein zugelassenes Zahlungsmittel.</li>
            </ol>
          </li>
          <li>Der 100 % Willkommensbonus (max. €100) wird nach der ersten qualifizierten Einzahlung automatisch gutgeschrieben.</li>
          <li>Die Einzahlung muss spätestens 30 Tage nach Registrierung erfolgen, um den Bonus zu erhalten.</li>
          <li>Pro Nutzer:in, Haushalt oder IP-Adresse ist nur ein Willkommensbonus zulässig.</li>
          <li>Der Bonus ist nicht mit anderen Aktionen kombinierbar und kann nicht übertragen werden.</li>
          <li>Bonusguthaben wird nach dreifacher Umsetzung von Einzahlung + Bonus bei Mindestquoten von 1,70 auszahlbar.</li>
          <li>Nur Sportwetten (keine Casino-, Live- oder andere Spiele) zählen zum Bonusumsatz.</li>
          <li>Die Umsatzbedingungen müssen innerhalb von 90 Tagen erfüllt werden, andernfalls verfällt das Bonusguthaben inklusive etwaiger Gewinne.</li>
          <li>Der aktuelle Bonusstatus kann jederzeit im Kundenkonto eingesehen werden.</li>
          <li>Bei Verdacht auf Missbrauch (z. B. Mehrfachkonten, Manipulation, automatisierte Wettmuster) behalten wir uns Maßnahmen bis hin zum Ausschluss vor.</li>
          <li>Auszahlungen von Bonusgewinnen erfolgen erst nach vollständiger Prüfung gemäß interner Sicherheitsrichtlinien.</li>
          <li>Die Aktion kann jederzeit geändert oder vorzeitig beendet werden – ohne Angabe von Gründen und ohne individuelle Benachrichtigung.</li>
          <li>Die folgenden Konstellationen sind vom Bonus ausgeschlossen:
            <ol class="list-[lower-alpha] ml-7">
              <li>mehrere Konten aus demselben Haushalt;</li>
              <li>gleiche Zahlungsdaten oder Kontaktinformationen bei verschiedenen Konten;</li>
              <li>verdächtige IP-Zugriffe oder koordiniertes Verhalten;</li>
              <li>nicht nachvollziehbare Spielmuster oder Quotenmissbrauch;</li>
              <li>Verstoß gegen geltende Bonusbedingungen.</li>
            </ol>
          </li>
          <li>Diese Teilnahmebedingungen unterliegen österreichischem Recht. Gerichtsstand ist Wien.</li>
        </ol>
      </div>
    </details>
  </div>
</section>

<section id="responsible-gaming" class="bg-[#152848] py-8 px-4">
  <div class="max-w-3xl mx-auto rounded-2xl shadow-xl border border-[#FFD700] bg-[#10192B]/90 px-4 sm:px-8 py-7 flex flex-col gap-5">
    <h2 class="text-2xl md:text-3xl font-extrabold text-[#FFD700] mb-2 uppercase text-center tracking-wider">
      Verantwortungsvolles Spielen
    </h2>
    <p class="text-[#F2F4F8] text-base text-center mb-2">
      <strong>[CURRENT_DOMAIN_NO_TLD]</strong> setzt auf Verantwortung: Wetten sind Unterhaltung – kein Mittel zur finanziellen Absicherung.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
      
      <div class="flex flex-col items-center px-1">
        <img src="img/shield.svg" alt="Limits" class="mb-2 h-9 w-9" />
        <h3 class="text-[#FFD700] font-bold text-base mb-1">Grenzen setzen</h3>
        <p class="text-[#F2F4F8] text-xs">
          Lege persönliche Einsatz- oder Zeitlimits fest.<br>
          Nutze Kontrollfunktionen direkt im Konto.
        </p>
      </div>
      
      <div class="flex flex-col items-center px-1">
        <img src="img/question.svg" alt="Hilfe" class="mb-2 h-9 w-9" />
        <h3 class="text-[#FFD700] font-bold text-base mb-1">Hilfe & Beratung</h3>
        <p class="text-[#F2F4F8] text-xs">
          Kostenlose & anonyme Beratung:<br>
          <a href="https://www.gamblingtherapyonline.org/de" target="_blank" class="underline text-[#ED1C24] hover:text-[#FFD700] transition">gamblingtherapyonline.org</a>
        </p>
      </div>
      
      <div class="flex flex-col items-center px-1">
        <img src="img/zapret.svg" alt="Selbstausschluss" class="mb-2 h-9 w-9" />
        <h3 class="text-[#FFD700] font-bold text-base mb-1">Selbstausschluss</h3>
        <p class="text-[#F2F4F8] text-xs">
          Du kannst dein Konto jederzeit freiwillig sperren – temporär oder dauerhaft.
        </p>
      </div>
    </div>

    <div class="mt-5 text-center text-xs text-[#C0C8D0]">
      Teilnahme nur für Personen ab 18 Jahren. Spiel bewusst – setz dir klare Grenzen.
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>