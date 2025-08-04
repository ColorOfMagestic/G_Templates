<?php include "header.php"; ?>
<main>

<section id="hero" class="relative pt-36 pb-24 min-h-[100vh] bg-[#152848] overflow-hidden">
  <div class="absolute inset-0 z-0 w-full h-full pointer-events-none">
    <img src="img/hero-bg.webp" alt="Sportwetten Hintergrund" class="object-cover w-full h-full opacity-80" />
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 flex items-center min-h-[50vh]">
    <div class="bg-[#152848]/80 backdrop-blur-sm rounded-xl p-8 md:p-12 w-full md:w-2/3">
      <h1 class="text-3xl md:text-5xl font-extrabold text-[#F3F6F9] leading-tight mb-4 drop-shadow text-left">
        DEIN SPIEL. DEINE REGELN.<br>
        WETTINFORMATIONEN, WIE’S IN WIEN GEHÖRT.
      </h1>
      <h2 class="text-xl md:text-3xl font-black text-[#FFD700] mb-6 drop-shadow text-left">
        100 % LIZENZIERT & RECHTSSICHER
      </h2>
      <p class="text-base md:text-lg text-[#F3F6F9] leading-relaxed mb-4">
        <strong>[CURRENT_DOMAIN_NO_TLD]</strong> bietet dir geprüfte Infos über Anbieter mit Lizenz in Österreich – rechtlich einwandfrei, nachvollziehbar und transparent. Keine Lockangebote, kein Risiko – nur Klarheit für alle, die wissen wollen, wo legal gewettet wird.
      </p>
      <p class="text-base md:text-lg text-[#F3F6F9] leading-relaxed mb-6">
        Erhalte Zugang zu detaillierten Vergleichen, sicheren Plattformen und aktuellen Quoten im Bereich Fußball, Tennis, Wintersport und mehr. Natürlich nur bei nachgewiesener Volljährigkeit und im Einklang mit österreichischem Recht.
      </p>
      <a href="/register" class="inline-flex items-center px-8 py-3 rounded-xl font-bold text-white bg-[#ED1C24] hover:bg-[#FFD700] hover:text-[#152848] transition text-lg shadow-lg">
        Jetzt kostenlos informieren
      </a>
      <div class="mt-6">
        <a href="/terms" target="_blank" class="text-sm font-medium text-[#ED1C24] hover:text-[#FFD700] transition">
          Nur für Personen ab 18 Jahren – AGB beachten
        </a>
      </div>
    </div>
  </div>
</section>

<section id="vorteile" class="bg-[#FAFAF6] py-24 px-4 md:px-10">
  <div class="max-w-7xl mx-auto text-center space-y-12">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#A00000] uppercase tracking-wide font-['Playfair_Display']">
      Warum [CURRENT_DOMAIN_NO_TLD]?
    </h2>
    <div class="grid md:grid-cols-3 gap-8">
      
      <div class="bg-white rounded-xl shadow-md border border-[#E0E0E0] p-8 flex flex-col items-center text-center">
        <img src="img/icon-legal.svg" alt="Legal Icon" class="h-12 w-12 mb-4" />
        <h3 class="text-xl font-semibold text-[#1E1E1E] mb-2">100 % legal & lizenziert</h3>
        <p class="text-[#4B4B4B] text-sm leading-relaxed">
          Auf <strong>[CURRENT_DOMAIN_NO_TLD]</strong> findest du ausschließlich Informationen zu staatlich lizenzierten Buchmachern in Österreich – rechtskonform, sicher und transparent geprüft durch heimische Behörden.
        </p>
        <p class="text-[#4B4B4B] text-sm leading-relaxed mt-2">
          So weißt du genau, bei welchen Anbietern du legal unterwegs bist – ganz ohne Risiko oder Unsicherheit.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow-md border border-[#E0E0E0] p-8 flex flex-col items-center text-center">
        <img src="img/icon-odds.svg" alt="Odds Icon" class="h-12 w-12 mb-4" />
        <h3 class="text-xl font-semibold text-[#1E1E1E] mb-2">Aktuelle Quoten & Auszahlungsinfos</h3>
        <p class="text-[#4B4B4B] text-sm leading-relaxed">
          Wir zeigen dir, wo du faire Quoten findest – transparent und ohne irreführende Versprechen. Plus: objektive Informationen zur Auszahlungsgeschwindigkeit und Zahlungsmethoden.
        </p>
        <p class="text-[#4B4B4B] text-sm leading-relaxed mt-2">
          Alle Angaben basieren auf öffentlich einsehbaren Quellen und Nutzerfeedback aus Österreich.
        </p>
      </div>

      <div class="bg-white rounded-xl shadow-md border border-[#E0E0E0] p-8 flex flex-col items-center text-center">
        <img src="img/icon-sports.svg" alt="Sports Icon" class="h-12 w-12 mb-4" />
        <h3 class="text-xl font-semibold text-[#1E1E1E] mb-2">Vielfalt im Überblick</h3>
        <p class="text-[#4B4B4B] text-sm leading-relaxed">
          Egal ob Fußball, Wintersport, Tennis oder Motorsport – wir informieren über Anbieter mit breitem Wettangebot, ganz ohne Registrierung oder Verpflichtung.
        </p>
        <p class="text-[#4B4B4B] text-sm leading-relaxed mt-2">
          So kannst du Anbieter vergleichen und Entscheidungen bewusst treffen – einfach, neutral und jederzeit abrufbar.
        </p>
      </div>

    </div>
  </div>
</section>

<section id="how-it-works" class="w-full bg-[#FAFAF6] py-24 px-4 md:px-10">
  <div class="max-w-6xl mx-auto space-y-12">
    <div class="space-y-2 text-left">
      <span class="text-sm font-semibold uppercase text-[#2F5233] tracking-widest">So funktioniert's</span>
      <h2 class="text-3xl md:text-4xl font-extrabold text-[#A00000] font-['Playfair_Display']">
        In drei Schritten zum Überblick
      </h2>
    </div>

    <div class="flex flex-col md:flex-row gap-8">
      
      <div class="flex-1 bg-white rounded-xl px-7 py-8 shadow-md border border-[#C0C0C0]">
        <h3 class="text-2xl font-extrabold text-[#ED1C24] mb-4">1. Kostenlos registrieren</h3>
        <p class="text-[#1E1E1E] text-base leading-relaxed">
          Erstelle dein persönliches Konto bei <strong>[CURRENT_DOMAIN_NO_TLD]</strong> – in weniger als zwei Minuten, ganz ohne Verpflichtung. Alle Daten werden DSGVO-konform behandelt.
        </p>
        <p class="text-[#1E1E1E] text-base leading-relaxed mt-2">
          So erhältst du Zugriff auf geprüfte Informationen zu Anbietern mit Lizenz in Österreich.
        </p>
      </div>

      <div class="flex-1 bg-white rounded-xl px-7 py-8 shadow-md border border-[#C0C0C0]">
        <h3 class="text-2xl font-extrabold text-[#ED1C24] mb-4">2. Anbieter vergleichen</h3>
        <p class="text-[#1E1E1E] text-base leading-relaxed">
          Informiere dich über verfügbare Zahlungsmethoden, Lizenzstatus, Auszahlungsdauer und Quotenübersicht – auf Basis neutraler Kriterien.
        </p>
        <p class="text-[#1E1E1E] text-base leading-relaxed mt-2">
          Alle Infos basieren auf öffentlich zugänglichen Daten und offiziellen Angaben der Anbieter.
        </p>
      </div>

      <div class="flex-1 bg-white rounded-xl px-7 py-8 shadow-md border border-[#C0C0C0]">
        <h3 class="text-2xl font-extrabold text-[#ED1C24] mb-4">3. Sicher entscheiden</h3>
        <p class="text-[#1E1E1E] text-base leading-relaxed">
          Sobald du alle Fakten kennst, kannst du eigenverantwortlich entscheiden, ob und bei wem du ein Angebot nutzen möchtest – ganz im Einklang mit österreichischem Recht.
        </p>
        <p class="text-[#1E1E1E] text-base leading-relaxed mt-2">
          Wir zeigen dir nur Anbieter, die behördlich lizenziert und transparent registriert sind.
        </p>
      </div>

    </div>
  </div>
</section>

<section id="terms-accordion" class="bg-[#FAFAF6] py-24 px-4 md:px-10">
  <div class="max-w-6xl mx-auto">
    <details open class="rounded-2xl border border-[#FFD700] bg-white shadow-2xl mb-6 transition-all duration-300">
      <summary class="flex justify-between items-center px-8 py-6 cursor-pointer font-extrabold text-[#A00000] text-lg md:text-2xl select-none tracking-wide">
        TEILNAHMEBEDINGUNGEN
        <svg class="ml-2 w-7 h-7 transition-transform duration-300 details-open:rotate-180" fill="none" stroke="#A00000" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
      </summary>

      <div class="px-8 py-6 text-[#1E1E1E] text-base leading-relaxed grid md:grid-cols-2 gap-8">
        <div class="space-y-5">
          <p>
            Die folgenden Bedingungen gelten für das Willkommensangebot auf <strong>[CURRENT_DOMAIN_NO_TLD]</strong>. Dieses Angebot ist ausschließlich Informationszwecken gewidmet. Weitere Details findest du in den
            <a href="/terms" class="underline text-[#ED1C24] hover:text-[#2F5233] transition" target="_blank">Allgemeinen Geschäftsbedingungen</a>.
          </p>
          <ol class="list-decimal ml-5 space-y-2">
            <li>Der Aktionszeitraum beginnt am 03.03.2025 und endet am 31.12.2026 um 23:59 Uhr (MEZ).</li>
            <li>Teilnahmeberechtigt sind ausschließlich volljährige Personen mit dauerhaftem Wohnsitz in Österreich.</li>
            <li>Registrierungen müssen eigenständig, vollständig und wahrheitsgemäß erfolgen. Unvollständige oder automatisierte Anmeldungen werden ausgeschlossen.</li>
            <li>Voraussetzungen für eine Teilnahme:
              <ol class="list-[lower-alpha] ml-6">
                <li>Vollendung des 18. Lebensjahres;</li>
                <li>österreichischer Wohnsitz zum Zeitpunkt der Registrierung;</li>
                <li>erstmalige Kontoerstellung im Aktionszeitraum;</li>
                <li>eine qualifizierende Ersteinzahlung ab €10.</li>
              </ol>
            </li>
            <li>Das Angebot umfasst einen 100 %-Bonus bis max. €100 auf die erste Einzahlung – kein Auszahlungsversprechen, sondern als freiwillige Werbeaktion zu verstehen.</li>
            <li>Die qualifizierende Einzahlung muss innerhalb von 30 Tagen nach der Registrierung erfolgen.</li>
            <li>Jede Person, Adresse oder IP darf nur einmal am Angebot teilnehmen.</li>
            <li>Eine Kombination mit anderen Aktionen oder eine Übertragung ist ausgeschlossen.</li>
          </ol>
        </div>

        <div class="space-y-5">
          <ol start="9" class="list-decimal ml-5 space-y-2">
            <li>Bonusguthaben wird nur dann auszahlbar, wenn ein dreifacher Umsatz bei einer Mindestquote von 1,70 erreicht wurde.</li>
            <li>Nur Wetten auf Sportereignisse zählen für die Erfüllung der Umsatzvorgabe.</li>
            <li>Die Umsatzanforderungen müssen innerhalb von 90 Tagen erfüllt werden, andernfalls verfällt der Bonus.</li>
            <li>Der aktuelle Bonusstatus ist im Benutzerkonto jederzeit abrufbar.</li>
            <li>Bei Verdacht auf Manipulation, Missbrauch oder Umgehung der Bedingungen behält sich <strong>[CURRENT_DOMAIN_NO_TLD]</strong> das Recht vor, die Teilnahme rückwirkend zu annullieren.</li>
            <li>Vor Auszahlung kann eine Identitäts- und Sicherheitsprüfung erfolgen. Dies dient dem Schutz aller Nutzer:innen und der Einhaltung gesetzlicher Vorgaben.</li>
            <li>Das Angebot kann jederzeit – auch ohne Vorankündigung – geändert, angepasst oder beendet werden.</li>
            <li>Folgende Fälle führen zum Ausschluss:
              <ol class="list-[lower-alpha] ml-6">
                <li>mehrfache Konten pro Haushalt oder Einzelperson;</li>
                <li>geteilte Zahlungsdaten unter mehreren Nutzer:innen;</li>
                <li>verdächtige Zugriffsmuster (z. B. VPN, Bot-Verhalten);</li>
                <li>systematisches Ausnutzen von Quoten oder Bonusbedingungen;</li>
                <li>jeglicher Verstoß gegen diese Teilnahmebedingungen.</li>
              </ol>
            </li>
            <li>Es gilt ausschließlich das Recht der Republik Österreich. Gerichtsstand für alle Streitigkeiten ist Wien.</li>
          </ol>
        </div>
      </div>
    </details>
  </div>
</section>

<section id="responsible-gaming" class="bg-[#FAFAF6] py-24 px-4 md:px-10">
  <div class="max-w-6xl mx-auto bg-white border border-[#C0C0C0] rounded-2xl shadow-xl px-6 md:px-10 py-12 space-y-12">
    
    <div class="text-center space-y-4">
      <h2 class="text-xl md:text-3xl font-extrabold uppercase text-[#A00000] font-['Playfair_Display'] tracking-wide">
        Verantwortungsvolles Spielen
      </h2>
      <p class="text-base md:text-lg text-[#1E1E1E] max-w-3xl mx-auto">
        <strong>[CURRENT_DOMAIN_NO_TLD]</strong> fördert verantwortungsbewusstes Verhalten im Umgang mit Sportwetten. Wetten sind Freizeitunterhaltung – kein Mittel zur Einkommenssteigerung. Prävention und Transparenz stehen für uns an erster Stelle.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
      <div class="space-y-3">
        <h3 class="text-xl font-bold text-[#ED1C24]">Grenzen setzen</h3>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Lege individuell definierbare Einsatz-, Zeit- oder Verlustlimits fest – direkt im Nutzerkonto. Du entscheidest, wie viel du wann und wie lange spielen möchtest.
        </p>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Diese Maßnahmen helfen, das Spielverhalten bewusst zu steuern und die Kontrolle jederzeit zu behalten.
        </p>
      </div>

      <div class="space-y-3">
        <h3 class="text-xl font-bold text-[#ED1C24]">Hilfe & Beratung</h3>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Solltest du den Eindruck haben, dass dein Spielverhalten problematisch wird, wende dich frühzeitig an professionelle Beratungsstellen.
        </p>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Kostenlos & anonym – zum Beispiel bei <a href="https://www.gamblingtherapyonline.org/de" target="_blank" class="underline text-[#2F5233] hover:text-[#A00000] transition">gamblingtherapyonline.org</a> oder österreichischen Anlaufstellen wie <a href="https://www.spielen-mit-verantwortung.at" target="_blank" class="underline text-[#2F5233] hover:text-[#A00000] transition">spielen-mit-verantwortung.at</a>.
        </p>
      </div>

      <div class="space-y-3">
        <h3 class="text-xl font-bold text-[#ED1C24]">Selbstausschluss</h3>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Du kannst jederzeit eine Selbstsperre beantragen – zeitlich befristet oder dauerhaft. Dieser Ausschluss kann über dein Konto oder auf Anfrage beim jeweiligen Anbieter aktiviert werden.
        </p>
        <p class="text-[#1E1E1E] text-sm leading-relaxed">
          Die Sperre dient deinem Schutz und wird systemseitig umgesetzt. In der Sperrzeit ist eine Reaktivierung ausgeschlossen.
        </p>
      </div>
    </div>

    <div class="text-center text-xs text-[#4B4B4B] mt-10">
      Die Nutzung von <strong>[CURRENT_DOMAIN_NO_TLD]</strong> ist ausschließlich volljährigen Personen vorbehalten. Bitte spiele verantwortungsbewusst und informiere dich über deine Möglichkeiten zur Selbstkontrolle.
    </div>

  </div>
</section>


</main>
<?php include "footer.php"; ?>