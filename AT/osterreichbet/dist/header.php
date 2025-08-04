<?php
ob_start();
register_shutdown_function(function () {
  $buffer = ob_get_clean();
  if ($buffer === false) {
    return;
  }

  $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['SERVER_PORT'] === '443');
  $protocol = $isHttps ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'] ?? '';
  $domain = $protocol . $host;

  $hostParts = explode('.', $host);
  $domainWithoutTld = $hostParts[0] ?? '';

  $firstChar = mb_substr($domainWithoutTld, 0, 1, 'UTF-8');
  $restChars = mb_substr($domainWithoutTld, 1, null, 'UTF-8');
  $domainWithoutTldCapitalized = mb_strtoupper($firstChar, 'UTF-8') . $restChars;

  $output = str_replace('[CURRENT_DOMAIN_NO_PROTO]', $host, $buffer);
  $output = str_replace('[CURRENT_DOMAIN]', $domain, $output);
  $output = str_replace('[CURRENT_DOMAIN_NO_TLD]', $domainWithoutTldCapitalized, $output);

  $email = 'info@' . $host;
  $emailAnchor = '<a href="mailto:' . $email . '">' . $email . '</a>';
  $output = str_replace('[Email]', $emailAnchor, $output);

  echo $output;
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    [CURRENT_DOMAIN_NO_TLD]
  </title>
  <link rel="shortcut icon" href="img/logo.webp" type="image/webp">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header id="header" class="fixed top-0 left-0 w-full z-50 bg-[#FAFAF6]/90 backdrop-blur-md border-b border-[#C0C0C0]">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 h-20 flex items-center justify-between">
    
    <!-- Logo + ARIA-Label für Screenreader -->
    <a href="/" class="flex items-center" aria-label="Startseite von [CURRENT_DOMAIN_NO_TLD] – Legale Sportwetteninformation aus Österreich">
      <img src="img/logo.webp" alt="Logo von [CURRENT_DOMAIN_NO_TLD]" class="h-16 w-auto" />
    </a>
    
    <!-- Navigation / Call-to-Action -->
    <div class="flex items-center gap-3">
      
      <a
        href="/login"
        class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-[#1E1E1E] border border-[#2F5233] rounded-lg hover:bg-[#2F5233]/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2F5233] transition uppercase"
        aria-label="Anmeldung für bestehende Nutzer:innen"
      >
        Login
      </a>
      
      <a
        href="/register"
        class="px-6 py-2 text-sm font-semibold text-white bg-[#D00000] rounded-xl hover:bg-[#A00000] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FFD700] transition uppercase"
        aria-label="Jetzt registrieren und Zugang zu lizenzierten Informationen erhalten"
      >
        Jetzt registrieren
      </a>
      
    </div>
  </div>
</header>



