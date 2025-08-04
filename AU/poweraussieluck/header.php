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

<header id="site-header" class="relative bg-[#2B2D42] px-4 py-6 md:px-6 text-[#C0C9D7]">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <a href="/" class="w-32 block">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Home" class="w-24 object-contain">
    </a>

    <h1 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-[#5E3A87] uppercase text-center flex-1 tracking-wide">
      [CURRENT_DOMAIN_NO_TLD]
    </h1>

    <div class="flex items-center gap-4 justify-end">
      <a href="/cart" class="hidden md:block">
        <img src="img/cart.webp" alt="Your Cart" class="w-16 object-contain">
      </a>
      <button id="burger-button" class="md:hidden text-[#C0C9D7] focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>

  <nav class="hidden md:block mt-6">
    <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-6 text-sm font-semibold uppercase text-[#C0C9D7]">
      <a href="/#how" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">How It Works</a>
      <a href="/#about" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">About Us</a>
      <a href="/faq" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">Help Centre</a>
      <a href="/#responsible" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">Responsible Play</a>
      <a href="/#draws" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">Upcoming Draws</a>
      <a href="/#contact" class="transition duration-300 hover:text-[#FF6F3C] hover:scale-105">Contact</a>
    </div>
  </nav>

  <div id="mobile-menu" class="md:hidden hidden mt-4 px-4">
    <nav class="grid grid-cols-2 gap-x-6 gap-y-3 text-sm font-semibold uppercase text-center text-[#C0C9D7]">
      <a href="/#how" class="py-2 hover:text-[#FF6F3C]">How It Works</a>
      <a href="/#about" class="py-2 hover:text-[#FF6F3C]">About Us</a>
      <a href="/faq" class="py-2 hover:text-[#FF6F3C]">Help Centre</a>
      <a href="/#responsible" class="py-2 hover:text-[#FF6F3C]">Play Safe</a>
      <a href="/#contact" class="py-2 hover:text-[#FF6F3C]">Contact</a>
      <a href="/#draws" class="py-2 hover:text-[#FF6F3C]">Upcoming Draws</a>
      <a href="/cart" class="col-span-2 py-2 inline-flex justify-center items-center gap-2">
        <img src="img/cart.webp" alt="Cart" class="w-12 h-12 object-contain">
      </a>
    </nav>
  </div>

  <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#009688] via-[#FF6F3C] to-[#5E3A87]"></div>
</header>

