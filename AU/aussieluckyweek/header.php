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

<header id="site-header" class="relative bg-[#121826] px-4 py-4 md:px-6 text-[#C0C9D7] font-['Nunito']">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <a href="/" class="w-28 block">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="w-28 object-contain">
    </a>

    <div class="hidden md:flex flex-col items-center justify-center">
      <div class="grid grid-cols-3 gap-x-8 gap-y-2 text-sm font-semibold uppercase text-center text-[#C0C9D7]">
        <a href="/#how" class="hover:text-[#FFD700]">How It Works</a>
        <a href="/#about" class="hover:text-[#FFD700]">Who We Are</a>
        <a href="/#faq" class="hover:text-[#FFD700]">Help Centre</a>
        <a href="/#responsible" class="hover:text-[#FFD700]">Play Safe</a>
        <a href="/#draws" class="hover:text-[#FFD700]">Recent Winners</a>
        <a href="/contact" class="hover:text-[#FFD700]">Get In Touch</a>
      </div>
    </div>

    <div class="flex items-center gap-4">
      <a href="/cart" class="hidden md:block">
        <img src="img/cart.webp" alt="Cart" class="w-16 object-contain">
      </a>
      <button id="burger-button" class="md:hidden text-[#C0C9D7] focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden hidden mt-4 px-4">
    <nav class="grid grid-cols-2 gap-x-6 gap-y-3 text-sm font-semibold uppercase text-center text-[#C0C9D7]">
      <a href="/#how" class="py-2 hover:text-[#FFD700]">How It Works</a>
      <a href="/#about" class="py-2 hover:text-[#FFD700]">Who We Are</a>
      <a href="/#faq" class="py-2 hover:text-[#FFD700]">Help Centre</a>
      <a href="/#responsible" class="py-2 hover:text-[#FFD700]">Play Safe</a>
      <a href="/contact" class="py-2 hover:text-[#FFD700]">Get In Touch</a>
      <a href="/#draws" class="py-2 hover:text-[#FFD700]">Winners</a>
      <a href="/cart" class="col-span-2 py-2 inline-flex justify-center items-center gap-2">
        <img src="img/cart.webp" alt="Cart" class="w-12 h-12 object-contain">
      </a>
    </nav>
  </div>

  <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#00F0FF] via-[#FFD700] to-[#D500F9]"></div>
</header>





