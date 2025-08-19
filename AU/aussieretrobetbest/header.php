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

<header id="1header" class="sticky top-0 z-50 bg-[#111214]/95 backdrop-blur border-b border-gray-800">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    <a href="/" class="flex items-center gap-3 focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-16 w-16 grayscale" />
    </a>
    <nav class="hidden md:flex items-center gap-10 text-base">
      <a href="/#4how" class="text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">How It Works</a>
      <a href="/#7faq" class="text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">FAQs</a>
      <a href="/#6results" class="text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">Latest Results</a>
      <a href="/#9responsible" class="text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">Play Responsibly</a>
    </nav>
    <a href="#" data-modal-open="register" class="ml-4 inline-flex items-center px-4 py-2 border border-white text-[#0B0B0B] bg-white hover:bg-transparent hover:text-white transition focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">
      Join Today
    </a>
    <button id="menu-btn" class="md:hidden inline-flex items-center justify-center p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">
      <svg class="w-6 h-6 text-[#EAEAEA]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-[#0B0B0B] border-t border-gray-800">
    <nav class="px-4 space-y-2 text-base py-4">
      <a href="/#4how" class="block text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">How It Works</a>
      <a href="/#7faq" class="block text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">FAQs</a>
      <a href="/#6results" class="block text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">Latest Results</a>
      <a href="/#9responsible" class="block text-[#EAEAEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#00A3FF]">Play Responsibly</a>
    </nav>
  </div>
</header>
