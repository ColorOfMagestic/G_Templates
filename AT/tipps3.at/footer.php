<footer id="site-footer" class="bg-[#23272F] border-t border-[#343941] py-12 px-4 md:px-10 font-['Inter'] text-[#F3F6F9]">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
    <a href="/" class="block">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-20 object-contain" />
    </a>
    <ul class="flex flex-wrap justify-center md:justify-end gap-4 text-sm md:text-base text-[#B7BDC6]">
      <li>
        <a href="/terms" class="hover:text-[#A5FF00] transition">Nutzungsbedingungen</a>
      </li>
      <li>
        <a href="/privacy" class="hover:text-[#A5FF00] transition">Datenschutz</a>
      </li>
      <li>
        <a href="/responsible" class="hover:text-[#A5FF00] transition">Verantwortungsvolles Spielen</a>
      </li>
      <li>
        <a href="/cookies" class="hover:text-[#A5FF00] transition">Cookie-Richtlinie</a>
      </li>
    </ul>
  </div>
  <div class="mt-8 text-center text-sm text-[#B7BDC6]">
    Die Plattform steht ausschließlich volljährigen Nutzer:innen ab 18 Jahren zur Verfügung. Bitte spiel verantwortungsbewusst und beachte die gesetzlichen Vorgaben in Österreich.
  </div>
  <div class="mt-4 text-center text-xs text-[#B7BDC6] leading-relaxed max-w-5xl mx-auto">
    18+. Das Angebot von Admiral Sportwetten GmbH richtet sich ausschließlich an Personen ab 18 Jahren. Sportwetten können süchtig machen. Wette verantwortungsbewusst. Österreichweite kostenfreie Beratungshotline: <strong>0800 20 52 42</strong>. Weitere Informationen findest du auf unserer Wettkundenschutzseite ADMIRAL Sportwetten GmbH.<br><br>
    Gesetzliche Grundlage für den Abschluss, Vermittlung und die Durchführung von Sportwetten über das Portal <strong>[CURRENT_DOMAIN_NO_TLD]</strong> ist das niederösterreichische Wettgesetz (NÖ WettG) vom 27.05.2020, LGBl. Nr. 58/2020 und der aufgrund dieses Gesetzes ergangene Bewilligungsbescheid vom 10.12.2020 der NÖ. Landesregierung mit der Aktenzahl IVW1-Wett-47/001-2020.
  </div>
</footer>

<div id="age-gate-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90" style="display:none;">
  <div class="bg-[#2C313A] rounded-2xl shadow-2xl max-w-sm w-full p-10 text-center flex flex-col items-center">
    <svg class="mb-6 h-16 w-16 text-[#A5FF00]" fill="none" stroke="currentColor" viewBox="0 0 48 48">
      <circle cx="24" cy="24" r="22" stroke="#A5FF00" stroke-width="3" fill="none"/>
      <text x="24" y="32" text-anchor="middle" font-size="20" fill="#A5FF00" font-family="Arial, sans-serif">18+</text>
    </svg>
    <h2 class="text-3xl font-extrabold text-[#A5FF00] mb-2 font-['Playfair_Display'] uppercase">Altersbestätigung</h2>
    <p class="mb-6 text-[#F3F6F9] text-base">
      Diese Seite ist ausschließlich für volljährige Nutzer:innen (ab 18 Jahren) bestimmt. Bist du mindestens 18 Jahre alt?
    </p>
    <div class="flex gap-6 w-full justify-center mb-6">
      <button onclick="acceptAgeGate()" class="px-8 py-3 bg-[#A5FF00] text-[#23272F] rounded-full font-bold uppercase text-lg shadow hover:bg-[#1CB5E0] transition w-32">Ja</button>
      <button onclick="window.location.href='https://google.com'" class="px-8 py-3 bg-[#343941] text-[#F3F6F9] rounded-full font-bold uppercase text-lg shadow hover:bg-[#A5FF00] transition w-32">Nein</button>
    </div>
    <div class="mt-4 text-xs text-[#B7BDC6] bg-[#23272F] rounded p-4">
      <strong>Achtung:</strong> Der Zugang und die Nutzung dieser Plattform sind in Österreich ausschließlich Personen ab 18 Jahren erlaubt. Bei Falschangaben oder Verstoß gegen die Altersbeschränkung erfolgt der sofortige Ausschluss vom Angebot.<br><br>
      Minderjährige oder Nutzer:innen, die falsche Angaben machen, riskieren eine dauerhafte Sperre sowie mögliche rechtliche Konsequenzen. Verantwortungsbewusstes Spielen und die Einhaltung der gesetzlichen Vorgaben stehen bei uns an erster Stelle.
    </div>
  </div>
</div>


<script src="scripts/script.js"></script>
</body>

</html>