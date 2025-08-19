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

<header id="site-header" class="fixed top-0 inset-x-0 z-50 bg-gradient-to-r from-white/90 via-[#FAFAF6]/90 to-white/90 backdrop-blur border-b border-[#C0C0C0] shadow-sm">
  <div class="max-w-6xl mx-auto px-4 md:px-6">
    <div class="h-16 md:h-20 flex items-center justify-between">
      <a href="/" class="flex items-center hover:scale-105 transition-transform duration-300">
        <img src="img/logo.webp" alt="Offizielles Logo von [CURRENT_DOMAIN_NO_TLD] – lizenzierte Sportwettenplattform in Österreich" class="h-14 md:h-20 w-auto" />
      </a>
      <div class="flex items-center gap-2 md:gap-3">
        <a href="/login" class="px-4 md:px-5 py-2 font-semibold text-[#A00000] border border-[#A00000] rounded-xl hover:bg-[#ED1C24] hover:text-white hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/50 transition-all duration-300">
          Login
        </a>
        <a href="/register" class="px-4 md:px-5 py-2 font-semibold text-white bg-[#A00000] rounded-xl hover:bg-[#ED1C24] hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/50 transition-all duration-300">
          Jetzt registrieren
        </a>
      </div>
    </div>
  </div>
</header>


