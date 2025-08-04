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

<header class="sticky top-0 z-50 bg-orange-600/90 shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center h-20">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/" class="flex items-center">
          <picture>
            <source srcset="../img/logo.webp" type="image/webp" />
            <img src="../img/logo.png" alt="Ontario Licensed Online Casino Logo" class="h-14 md:h-36 w-auto" />
          </picture>
        </a>
      </div>

      <!-- Desktop menu links (centered) -->
      <nav class="hidden sm:flex flex-1 justify-center space-x-6">
        <a href="#play"
           class="text-white text-base font-medium hover:text-gray-200 transition-colors duration-200">
          Play Now
        </a>
        <a href="#games"
           class="text-white text-base font-medium hover:text-gray-200 transition-colors duration-200">
          Game Selection
        </a>
        <a href="#faq"
           class="text-white text-base font-medium hover:text-gray-200 transition-colors duration-200">
          Help Centre
        </a>
      </nav>

      <!-- Desktop action buttons -->
      <div class="hidden sm:flex space-x-4">
        <button
          type="button"
          data-open-login
          class="px-5 py-2 rounded-full text-sm font-medium border border-white text-white hover:bg-white hover:text-orange-700 transition-colors duration-200"
        >
          Sign In
        </button>
        <button
          type="button"
          data-open-sign
          class="px-5 py-2 rounded-full text-sm font-medium border border-transparent bg-white text-orange-700 hover:bg-orange-700 hover:text-white hover:border-white transition-colors duration-200"
        >
          Register
        </button>
      </div>

      <!-- Hamburger button for mobile -->
      <div class="flex sm:hidden ml-auto">
        <button
          type="button"
          class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-orange-700 hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          aria-expanded="false"
          aria-label="Open menu"
          data-mobile-menu-toggle
        >
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="px-4 pt-4 pb-6 space-y-4 bg-orange-600/90">
      <a href="#play"
         class="block px-5 py-2 rounded-full text-base font-medium text-white hover:bg-white hover:text-orange-700 transition-colors duration-200">
        Play Now
      </a>
      <a href="#games"
         class="block px-5 py-2 rounded-full text-base font-medium text-white hover:bg-white hover:text-orange-700 transition-colors duration-200">
        Game Selection
      </a>
      <a href="#faq"
         class="block px-5 py-2 rounded-full text-base font-medium text-white hover:bg-white hover:text-orange-700 transition-colors duration-200">
        Help Centre
      </a>
      <button
        type="button"
        data-open-login
        class="w-full block text-center px-5 py-2 rounded-full text-base font-medium border border-white text-white hover:bg-white hover:text-orange-700 transition-colors duration-200"
      >
        Sign In
      </button>
      <button
        type="button"
        data-open-sign
        class="w-full block mt-2 text-center px-5 py-2 rounded-full text-base font-medium border border-transparent bg-white text-orange-700 hover:bg-orange-700 hover:text-white hover:border-white transition-colors duration-200"
      >
        Register
      </button>
    </div>
  </div>
</header>




