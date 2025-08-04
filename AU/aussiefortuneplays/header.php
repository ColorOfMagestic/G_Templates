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


<header class="bg-[#F5F0FF] py-4 px-4 md:px-6 text-[#212121]">
<div class="max-w-7xl mx-auto flex items-center justify-between">
    <a href="/" class="w-28 h-auto flex gap-4 items-end">
      <img src="img/logo.webp" alt="Site Logo" class="w-20 object-contain">
      <h1 class="uppercase text-base md:text-2xl font-bold hidden sm:block"><span class="text-[#FF6F00] ">aussie</span>fortune<span class="text-[#FF6F00] ">plays</span></h1>
    </a>

    <div class="flex items-center space-x-4">
      <a href="/cart" class="bg-[#FF6F00] text-white text-sm font-semibold rounded-full px-5 py-2 transition hover:bg-[#FFA040] focus:outline-none">
        Cart
      </a>

      <div class="relative hidden md:block">
        <button id="dropdown-toggle" class="bg-[#FF6F00] text-white text-sm font-semibold rounded-full px-5 py-2 transition hover:bg-[#FFA040] focus:outline-none">
          Menu
        </button>
        <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-md border border-[#ECECEC] hidden z-50">
          <nav class="flex flex-col text-sm text-[#212121]">
            <a href="/#how" class="px-4 py-2 hover:bg-[#F5F5F5]">How It All Works</a>
            <a href="/#about" class="px-4 py-2 hover:bg-[#F5F5F5]">Who’s Behind This</a>
            <a href="/#faq" class="px-4 py-2 hover:bg-[#F5F5F5]">Got Questions?</a></li>
    </ul></a>
            <a href="/#responsible" class="px-4 py-2 hover:bg-[#F5F5F5]">Responsible Play</a>
            <a href="/contact" class="px-4 py-2 hover:bg-[#F5F5F5]">Contact Our Team</a>
          </nav>
        </div>
      </div>

      <button id="burger-button" class="md:hidden text-[#212121] focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden hidden mt-4 px-2">
    <nav class="flex flex-col space-y-2 text-sm font-medium text-[#212121]">
      <a href="/#how" class="py-2 hover:text-[#FF6F00]">How It All Works</a>
      <a href="/#about" class="py-2 hover:text-[#FF6F00]">Who’s Behind This</a>
      <a href="/#faq" class="py-2 hover:text-[#FF6F00]"></a></li>
    </ul></a>
      <a href="/#responsible" class="py-2 hover:text-[#FF6F00]">Responsible Play</a>
      <a href="/contact" class="py-2 hover:text-[#FF6F00]">Contact Our Team</a>
      <a href="/cart" class="py-2 inline-flex items-center space-x-2">
        <img src="img/cart-icon.webp" alt="Cart Icon" class="w-6 h-6 object-contain">
      </a>
    </nav>
  </div>

</header>

<body>


