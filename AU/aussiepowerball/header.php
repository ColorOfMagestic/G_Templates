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
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&family=Nunito:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style/style.css">

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<header id="main-header" class="sticky top-0 z-50 bg-[#F8F9FD] border-b border-[#E0E0E0] font-['Nunito']">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <div class="hidden md:flex gap-3 items-center">
      <a href="/#about" class="bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">About</a>
      <a href="/#faq" class="bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Help</a>
      <a href="#" data-modal-open="register" class="bg-[#D500F9] text-white hover:bg-[#AA00FF] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Registration</a>
    </div>

    <div class="flex items-center gap-4">
      <h1 class="text-[#3F51B5] text-2xl md:text-4xl font-extrabold uppercase tracking-wider font-['Fredoka']">
        <a href="/">[CURRENT_DOMAIN_NO_TLD]</a>
      </h1>
    </div>

    <div class="hidden md:flex items-center gap-3">
      <a href="/#review" class="bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Wins</a>
      <a href="/contact" class="bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Support</a>
      <a href="#" data-modal-open="login" class="bg-[#FF4081] text-white hover:bg-[#C51162] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Login</a>
    </div>

    <button id="burger-button" class="md:hidden focus:outline-none ml-4">
      <svg class="w-7 h-7 text-[#3F51B5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="square" stroke-linejoin="miter" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="md:hidden hidden flex-col gap-2 bg-white border-t border-[#E0E0E0] px-6 py-4">
    <a href="/#about" class="block bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">About</a>
    <a href="/#faq" class="block bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Help</a>
    <a href="/#review" class="block bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Wins</a>
    <a href="/contact" class="block bg-white border border-[#E0E0E0] text-[#3F51B5] hover:bg-[#E3F2FD] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Support</a>
    <a href="#" data-modal-open="register" class="block bg-[#D500F9] text-white hover:bg-[#AA00FF] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Registration</a>
    <a href="#" data-modal-open="login" class="block bg-[#FF4081] text-white hover:bg-[#C51162] text-sm uppercase font-bold px-6 py-3 rounded-full transition">Login</a>
  </div>
</header>









