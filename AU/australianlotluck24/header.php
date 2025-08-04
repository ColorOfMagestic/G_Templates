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

<header id="header" class="relative bg-[#FFF9E2] px-4 py-5 md:px-8 text-[#3A3636]">
  <!-- Top row: logo + nav + cart/burger -->
  <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
    <!-- Logo -->
    <a href="/" class="block flex-shrink-0" aria-label="Go to home page">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Home" class="w-16 sm:w-20 object-contain" />
    </a>
    <!-- Navigation (desktop) -->
    <nav class="hidden md:flex flex-1 justify-center gap-6" aria-label="Main Navigation">
      <a href="/#how" class="transition font-semibold uppercase text-base hover:text-[#FFB300]">How It Works</a>
      <a href="/#about" class="transition font-semibold uppercase text-base hover:text-[#00AEEF]">About</a>
      <a href="/faq" class="transition font-semibold uppercase text-base hover:text-[#FF6F61]">Help Centre</a>
      <a href="/#responsible" class="transition font-semibold uppercase text-base hover:text-[#009688]">Play Responsibly</a>
      <a href="/#draws" class="transition font-semibold uppercase text-base hover:text-[#FFD54F]">Draw Calendar</a>
      <a href="/#contact" class="transition font-semibold uppercase text-base hover:text-[#FFB300]">Contact Us</a>
    </nav>
    <!-- Cart & Burger -->
    <div class="flex items-center gap-2 flex-shrink-0">
      <a href="/cart" class="hidden md:block" aria-label="Go to cart">
        <img src="img/cart.webp" alt="Cart" class="w-10 sm:w-12 object-contain" />
      </a>
      <button id="burger-button" class="md:hidden text-[#00AEEF] focus:outline-none" aria-label="Open mobile menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>
  <!-- Site Name -->
  <div class="w-full text-center mb-2">
    <span class="text-xl md:text-3xl font-extrabold tracking-wide text-[#FFB300] select-none block">
      [CURRENT_DOMAIN_NO_TLD]
    </span>
  </div>
  <!-- Mobile Navigation -->
  <div id="mobile-menu" class="md:hidden hidden mt-4 px-2">
    <nav class="grid grid-cols-2 gap-x-6 gap-y-3 text-base font-semibold uppercase text-center text-[#3A3636]" aria-label="Mobile Navigation">
      <a href="/#how" class="py-2 hover:text-[#FFB300]">How It Works</a>
      <a href="/#about" class="py-2 hover:text-[#00AEEF]">About</a>
      <a href="/faq" class="py-2 hover:text-[#FF6F61]">Help Centre</a>
      <a href="/#responsible" class="py-2 hover:text-[#009688]">Play Responsibly</a>
      <a href="/#contact" class="py-2 hover:text-[#FFB300]">Contact Us</a>
      <a href="/#draws" class="py-2 hover:text-[#FFD54F]">Draw Calendar</a>
      <a href="/cart" class="col-span-2 py-2 inline-flex justify-center items-center gap-2" aria-label="View cart">
        <img src="img/cart.webp" alt="Cart" class="w-12 h-12 object-contain" />
      </a>
    </nav>
  </div>
  <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#009688] via-[#FFB300] to-[#FF6F61]"></div>
</header>



