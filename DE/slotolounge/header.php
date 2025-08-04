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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style/style.css">

</head>

<body>
  
<header
  id="header"
  class="w-full flex items-center justify-between px-4 md:px-10 py-4 bg-[#23213B] border-b-2 border-[#FF5F00] shadow-xl backdrop-blur-md relative z-30"
>
  <!-- Links frei für künftige Navigation oder Sprachumschaltung -->
  <div class="flex-1"></div>

  <!-- Logo zentriert -->
  <div class="flex-1 flex justify-center">
    <a href="/" class="flex items-center gap-3 select-none" title="[CURRENT_DOMAIN_NO_TLD]">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="w-20 h-auto" />
      <!-- LOGO PLATZHALTER: Bitte Logo-Bild einfügen -->
    </a>
  </div>

  <!-- Rechts Login-Button -->
  <div class="flex-1 flex justify-end">
    <button
      id="header-login"
      data-modal="login-modal"
      class="px-5 py-2 md:px-7 rounded-2xl font-extrabold text-base md:text-lg font-[Montserrat]
             bg-gradient-to-r from-[#FF5F00]/90 via-[#FF9100]/90 to-[#7CFFCB]/80 text-[#23213B]
             shadow-lg hover:scale-105 hover:shadow-2xl transition focus:outline-none focus:ring-2 focus:ring-[#FF5F00]"
    >
      Anmelden
    </button>
  </div>
</header>







