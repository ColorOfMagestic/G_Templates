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

<header id="site-header" class="sticky top-0 z-50 bg-[#1C1C1C] text-[#F5F5F5] px-6 py-10 shadow-md">
  <div class="max-w-7xl mx-auto relative flex items-center justify-between">
    
    <!-- Lijeva strana: burger izbornik -->
    <button id="menu-toggle" class="sm:hidden text-[#F5F5F5] focus:outline-none z-20">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Sredina: logo -->
    <div class="absolute left-1/2 transform -translate-x-1/2 z-10">
      <a href="/" class="block">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-28 w-auto">
      </a>
    </div>

    <!-- Desna strana: desktop navigacija -->
    <nav class="hidden sm:flex space-x-6 ml-auto z-20 max-w-80 flex-wrap justify-between">
      <a href="/#top-casinos" class="hover:text-[#FF6F00] transition">Online Kasina</a>
      <a href="/#why-choose" class="hover:text-[#FF6F00] transition">Zašto Odabrati Nas</a>
      <a href="/#about" class="hover:text-[#FF6F00] transition">O Nama</a>
      <a href="/faq" class="hover:text-[#FF6F00] transition">Česta Pitanja</a>
      <a href="/contact" class="hover:text-[#FF6F00] transition">Kontakt</a>
    </nav>
  </div>

  <!-- Mobilni izbornik -->
  <div id="mobile-menu" class="sm:hidden hidden mt-4 space-y-2 text-center">
    <a href="/#top-casinos" class="block hover:text-[#FF6F00]">Online Kasina</a>
    <a href="/#why-choose" class="block hover:text-[#FF6F00]">Zašto Odabrati Nas</a>
    <a href="/#about" class="block hover:text-[#FF6F00]">O Nama</a>
    <a href="/faq" class="block hover:text-[#FF6F00]">Česta Pitanja</a>
    <a href="/contact" class="block hover:text-[#FF6F00]">Kontakt</a>
  </div>
</header>


