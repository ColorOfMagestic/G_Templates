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

<header id="header" class="sticky top-0 z-50 bg-gradient-to-r from-[#3A1C71] to-[#FF2D95] border-b border-[#FFD700]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">

    <!-- Mobile Toggle -->
    <button id="burger-button" class="md:hidden focus:outline-none" aria-label="Toggle navigation">
      <svg class="w-7 h-7 text-[#F3F6F9]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="square" stroke-linejoin="miter" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Branding -->
    <div class="flex items-center gap-3">
      <a href="/" aria-label="Homepage">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="w-16 h-16 object-contain" />
      </a>
      <h1 class="text-[#F3F6F9] text-xl sm:text-2xl font-extrabold uppercase tracking-wider font-['Playfair_Display']">
        [CURRENT_DOMAIN_NO_TLD]
      </h1>
    </div>

    <!-- Navigation (Desktop) -->
    <nav class="hidden md:flex gap-4 items-center">
      <a href="/#about" class="px-4 py-2 bg-[#1D1235] text-[#FFD700] text-sm uppercase font-semibold rounded-lg hover:bg-[#FFD700]/10 transition">About</a>
      <a href="/#faq" class="px-4 py-2 bg-[#1D1235] text-[#FFD700] text-sm uppercase font-semibold rounded-lg hover:bg-[#FFD700]/10 transition">Help</a>
      <a href="/#review" class="px-4 py-2 bg-[#1D1235] text-[#FFD700] text-sm uppercase font-semibold rounded-lg hover:bg-[#FFD700]/10 transition">Wins</a>
      <a href="/contact" class="px-4 py-2 bg-[#1D1235] text-[#FFD700] text-sm uppercase font-semibold rounded-lg hover:bg-[#FFD700]/10 transition">Support</a>
      <a href="/cart" class="p-2 bg-[#1D1235] rounded-lg hover:bg-[#FFD700]/10 transition" aria-label="Cart">
        <img src="img/cart.webp" alt="Cart" class="w-12 h-12 object-contain" />
      </a>
    </nav>
  </div>

  <!-- Navigation (Mobile) -->
  <div id="mobile-menu" class="md:hidden hidden flex-col gap-1 bg-[#121212] border-t border-[#FFD700] px-6 py-4">
    <a href="/#about" class="block py-3 text-[#FFD700] text-sm uppercase font-semibold border-b border-[#1D1235]">About</a>
    <a href="/#faq" class="block py-3 text-[#FFD700] text-sm uppercase font-semibold border-b border-[#1D1235]">Help</a>
    <a href="/#review" class="block py-3 text-[#FFD700] text-sm uppercase font-semibold border-b border-[#1D1235]">Wins</a>
    <a href="/contact" class="block py-3 text-[#FFD700] text-sm uppercase font-semibold border-b border-[#1D1235]">Support</a>
    <a href="/cart" class="block py-3 text-[#FFD700] text-sm uppercase font-semibold border-b border-[#1D1235]">Cart</a>
  </div>
</header>


<body>


