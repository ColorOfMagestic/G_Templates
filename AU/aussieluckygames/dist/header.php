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
    [CURRENT_DOMAIN_NO_TLD] - Lottery
  </title>
  <link rel="shortcut icon" href="img/logo.webp" type="image/webp">
  <link rel="stylesheet" href="style/style.css">
  <script src="../scripts/script.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<header class="sticky border-b max-w-screen-xl mx-auto">
    <div class="container flex h-16 items-center justify-between px-4 md:px-6">
      <a href="/">
        <picture>
          <source srcset="../img/logo.webp" type="image/webp">
          <img src="../img/logo.png" alt="" width="64">
        </picture>
      </a>
      <nav class="md:flex hidden gap-4">
        <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors" href="/#lotteries">Lotteries</a>
        <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors" href="
        /#why">Why Choose Us</a>
        <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors" href="/#promote">Responsible Play</a>
        <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors" href="/#how">How It Works</a>
        <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors" href="/#faq">FAQ</a>
      </nav>
      <div class="hidden items-center gap-4 md:flex">
        <button class="flex items-center px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition" data-login-button>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-log-in mr-2 size-4" aria-hidden="true">
            <path d="m10 17 5-5-5-5"></path>
            <path d="M15 12H3"></path>
            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
          </svg>
          Log In
        </button>

        <button class="flex items-center px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition" data-signup-button>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-user-plus mr-2 size-4" aria-hidden="true">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <line x1="19" x2="19" y1="8" y2="14"></line>
            <line x1="22" x2="16" y1="11" y2="11"></line>
          </svg>
          Sign Up
        </button>
      </div>
      <div class="flex items-center gap-4 md:hidden">
        <button id="mobile-menu-button" class="flex items-center px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-menu h-6 w-6" aria-hidden="true">
            <path d="M4 12h16"></path>
            <path d="M4 18h16"></path>
            <path d="M4 6h16"></path>
          </svg>
        </button>
      </div>
    </div>
 
    <div id="mobile-menu" class="hidden md:hidden bg-white w-full absolute left-0 top-16 shadow-lg z-50 border-t border-gray-200">
      <div class="container px-4 py-3">
        <nav class="flex flex-col space-y-3">
          <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors py-2" href="">Lotteries</a>
          <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors py-2" href="">Why Choose Us</a>
          <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors py-2" href="">Responsible Play</a>
          <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors py-2" href="">How It Works</a>
          <a class="hover:text-green-400 text-base font-bold text-green-500 transition-colors py-2" href="">FAQ</a>
        </nav>
        <div class="flex flex-col space-y-3 mt-4">
          <button class="flex items-center justify-center px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition w-full" data-login-button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-log-in mr-2 size-4" aria-hidden="true">
              <path d="m10 17 5-5-5-5"></path>
              <path d="M15 12H3"></path>
              <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
            </svg>
            Log In
          </button>
          <button class="flex items-center justify-center px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition w-full" data-signup-button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-user-plus mr-2 size-4" aria-hidden="true">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <line x1="19" x2="19" y1="8" y2="14"></line>
              <line x1="22" x2="16" y1="11" y2="11"></line>
            </svg>
            Sign Up
          </button>
        </div>
      </div>
    </div>
  </header>
