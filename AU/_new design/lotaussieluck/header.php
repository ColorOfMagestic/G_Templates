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

<header id="site-header" class="w-full bg-[#186A3B] py-2 px-3 md:px-8 md:py-6 min-h-[80px]">
  <nav class="w-full max-w-screen-xl mx-auto flex items-center justify-between gap-4 relative">
    <a href="/" class="flex items-center gap-3 min-w-max">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-16 w-16" />
      <span class="font-bold uppercase text-white tracking-tight text-sm leading-none">
        [CURRENT_DOMAIN_NO_TLD]
      </span>
    </a>
    <ul class="hidden md:flex items-center gap-6 text-white text-lg font-semibold">
      <li><a href="/#how-it-works" class="hover:text-[#FFD700] transition">How it works</a></li>
      <li><a href="/#winners" class="hover:text-[#FFD700] transition">Winners</a></li>
      <li><a href="/#about" class="hover:text-[#FFD700] transition">About us</a></li>
      <li><a href="/#faq" class="text-[#FFD700] hover:text-white transition">FAQ</a></li>
      <li><a href="/contact" class="hover:text-[#FFD700] transition">Contact</a></li>
    </ul>
    <div class="hidden md:flex items-center gap-2">
      <a data-modal="auth-modal" class="p-1 border-2 border-[#FF3D3D] font-semibold text-white text-lg rounded-md transition hover:bg-[#FF3D3D] hover:text-white">Sign in</a>
      <a data-modal="auth-modal" class="p-1 border-2 border-[#FF3D3D] font-semibold text-white text-lg rounded-md transition hover:bg-[#FF3D3D] hover:text-white">Register</a>
      <a href="/cart" class="bg-[#FFD700] rounded-md p-1 border-2 border-[#FFD700] flex items-center justify-center" title="Cart">
        <img src="img/cart.svg" alt="cart" class="w-7 h-7" />
      </a>
    </div>
    <button id="menu-toggle" class="md:hidden flex items-center px-2 py-1" aria-label="Open menu">
      <svg width="28" height="28" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
      </svg>
    </button>
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-[#186A3B] bg-opacity-95 flex flex-col items-center justify-center gap-8 text-white text-lg font-semibold transition-all duration-300 pointer-events-none opacity-0 md:hidden">
      <ul class="flex flex-col gap-6 items-center">
        <li><a href="/#how-it-works" class="hover:text-[#FFD700] transition">How it works</a></li>
        <li><a href="/#winners" class="hover:text-[#FFD700] transition">Winners</a></li>
        <li><a href="/#about" class="hover:text-[#FFD700] transition">About us</a></li>
        <li><a href="/#faq" class="text-[#FFD700]">FAQ</a></li>
        <li><a href="/contact" class="hover:text-[#FFD700] transition">Contact</a></li>
      </ul>
      <div class="flex flex-col gap-3 items-center w-full px-6">
        <a data-modal="auth-modal" class="w-full text-center px-4 py-2 border border-[#FF3D3D] text-white rounded-md transition hover:bg-[#FF3D3D] hover:text-white">Sign in</a>
        <a data-modal="auth-modal" class="w-full text-center px-4 py-2 border border-[#FF3D3D] text-white rounded-md transition hover:bg-[#FF3D3D] hover:text-white">Register</a>
        <a href="/cart" class="bg-[#FFD700] rounded-md p-2 flex items-center justify-center mt-1" title="Cart">
          <img src="img/cart.svg" alt="cart" class="w-6 h-6" />
        </a>
      </div>
      <button id="menu-close" class="absolute top-4 right-4" aria-label="Close menu">
        <svg width="32" height="32" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" d="M6 6l12 12M6 18L18 6"/>
        </svg>
      </button>
    </div>
  </nav>
</header>
