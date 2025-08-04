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

<header class="sticky top-0 z-50 bg-[#0B0F1A] border-b border-[#1C1F2A]">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- Desktop Menu -->
    <div class="hidden md:flex gap-2 items-center">
      <a href="/#about" class="px-6 py-4 bg-[#121826] border border-[#1C1F2A] text-[#00F0FF] text-sm uppercase font-bold hover:bg-[#00F0FF]/10 text-center">About</a>
      <a href="/#faq" class="px-6 py-4 bg-[#121826] border border-[#1C1F2A] text-[#00F0FF] text-sm uppercase font-bold hover:bg-[#00F0FF]/10 text-center">Help</a>
      <a href="/" class="bg-[#121826] p-3 border border-[#1C1F2A] hover:bg-[#00F0FF]/10 transition">
        <img src="img/logo.webp" alt="HitBigRush Logo" class="w-16 h-16 object-contain">
      </a>
    </div>

    <!-- Logo Center -->
    <div class="flex items-center gap-4">
      <h1 class="text-[#00F0FF] text-2xl md:text-4xl font-extrabold uppercase tracking-wider font-[Orbitron]">
        HITBIGRUSH
      </h1>
    </div>

    <!-- Desktop Right Menu -->
    <div class="hidden md:flex items-center gap-2">
      <a href="/cart" class="bg-[#121826] p-3 border border-[#1C1F2A] hover:bg-[#FFD700]/10 transition">
        <img src="img/cart.webp" alt="Cart" class="w-16 h-16 object-contain">
      </a>
      <a href="/#review" class="px-6 py-4 bg-[#121826] border border-[#1C1F2A] text-[#00F0FF] text-sm uppercase font-bold hover:bg-[#00F0FF]/10 text-center">Wins</a>
      <a href="/contact" class="px-6 py-4 bg-[#121826] border border-[#1C1F2A] text-[#00F0FF] text-sm uppercase font-bold hover:bg-[#00F0FF]/10 text-center">Support</a>
    </div>

    <!-- Burger Button -->
    <button id="burger-button" class="md:hidden focus:outline-none ml-4">
      <svg class="w-7 h-7 text-[#00F0FF]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="square" stroke-linejoin="miter" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu (Hidden by Default) -->
  <div id="mobile-menu" class="md:hidden hidden flex-col gap-1 bg-[#121826] border-t border-[#1C1F2A] px-6 py-4">
    <a href="/#about" class="block py-3 text-[#00F0FF] text-sm uppercase font-bold border-b border-[#1C1F2A]">About</a>
    <a href="/#faq" class="block py-3 text-[#00F0FF] text-sm uppercase font-bold border-b border-[#1C1F2A]">Help</a>
    <a href="/#review" class="block py-3 text-[#00F0FF] text-sm uppercase font-bold border-b border-[#1C1F2A]">Wins</a>
    <a href="/contact" class="block py-3 text-[#00F0FF] text-sm uppercase font-bold border-b border-[#1C1F2A]">Support</a>
    <a href="/cart" class="block py-3 text-[#00F0FF] text-sm uppercase font-bold border-b border-[#1C1F2A]">Cart</a>
  </div>

</header>



<body>


