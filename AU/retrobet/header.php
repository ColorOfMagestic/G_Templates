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

  $hostWithoutWww = preg_replace('/^www\./i', '', $host);
  $domain = $protocol . $host;

  $hostParts = explode('.', $hostWithoutWww);
  $domainWithoutTld = (count($hostParts) >= 2) ? $hostParts[count($hostParts) - 2] : $hostParts[0];

  $firstChar = mb_substr($domainWithoutTld, 0, 1, 'UTF-8');
  $restChars = mb_substr($domainWithoutTld, 1, null, 'UTF-8');
  $domainWithoutTldCapitalized = mb_strtoupper($firstChar, 'UTF-8') . $restChars;

  $output = str_replace('[CURRENT_DOMAIN_NO_PROTO]', $hostWithoutWww, $buffer);
  $output = str_replace('[CURRENT_DOMAIN]', $domain, $output);
  $output = str_replace('[CURRENT_DOMAIN_NO_TLD]', $domainWithoutTldCapitalized, $output);

  $email = 'info@' . $hostWithoutWww;
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

  <header id="1header" class="bg-[#F9F9F6] border-b border-[#3E2723]">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3 md:py-4">

      <!-- Logo -->
      <a href="/" class="flex items-center" aria-label="[CURRENT_DOMAIN_NO_TLD]">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-20 w-auto">
      </a>

      <!-- Burger Menu -->
      <button id="burger" class="md:hidden flex flex-col space-y-1" aria-label="Menu">
        <span class="w-6 h-0.5 bg-[#1E1E1E]"></span>
        <span class="w-6 h-0.5 bg-[#1E1E1E]"></span>
        <span class="w-6 h-0.5 bg-[#1E1E1E]"></span>
      </button>

      <!-- Navigation -->
      <nav id="mobile-menu"
        class="hidden absolute top-[64px] left-0 w-full bg-[#F9F9F6] border-t border-[#C0C0C0] md:static md:block md:w-auto md:border-none md:bg-transparent">
        <ul class="flex flex-col md:flex-row md:space-x-8 font-medium">
          <li><a href="/?page=offers" class="block px-4 py-3 text-[#1E1E1E] hover:text-[#C62828] transition">Offers</a></li>
          <li><a href="/?page=articles" class="block px-4 py-3 text-[#1E1E1E] hover:text-[#C62828] transition">Insights</a>
          </li>
          <li><a href="/?page=charity" class="block px-4 py-3 text-[#1E1E1E] hover:text-[#C62828] transition">Community</a>
          </li>
          <li><a href="/#feedback" class="block px-4 py-3 text-[#1E1E1E] hover:text-[#C62828] transition">Support</a>
          </li>
          <li><a href="/?page=responsible" class="block px-4 py-3 text-[#1E1E1E] hover:text-[#C62828] transition">Responsible
              Play</a></li>
        </ul>
      </nav>

    </div>
  </header>