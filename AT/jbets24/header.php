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

<header id="header" class="fixed top-0 left-0 w-full z-50 bg-[#1E1E26]/80 backdrop-blur-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 h-36 flex items-center justify-between">
    <a href="/" class="flex items-center">
      <img src="img/logo.webp" alt="Logo von [CURRENT_DOMAIN_NO_TLD] – Sportwetten in Österreich" class="h-24 w-auto" />
    </a>
    <div class="flex gap-4">
      <a href="/login" class="px-5 py-2 font-semibold text-[#F7F7F7] bg-transparent border border-[#6FCF97] hover:bg-[#6FCF97] hover:text-[#1C1B1F] transition">
        Anmelden
      </a>
      <a href="/register" class="px-5 py-2 font-semibold text-[#F7F7F7] bg-[#27AE60] hover:bg-[#219653] transition">
        Kostenlos registrieren
      </a>
    </div>
  </div>
</header>


