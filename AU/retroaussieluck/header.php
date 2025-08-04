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

<header id="main-header" class=" bg-[#4E342E] border-b border-[#3E2723] text-white">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <div class="flex items-center gap-4">
      <a href="/" class="text-2xl font-extrabold uppercase tracking-wide text-white">
        <img src="img/logo.webp" alt="Logo" class="hidden md:block w-28 h-auto rounded-md">
      </a>
    </div>

    <div class="hidden md:flex items-center gap-3">
      <a href="#" data-modal-open="login" class="px-5 py-2 bg-black text-white border border-black text-sm font-bold uppercase tracking-wide hover:bg-white hover:text-black transition rounded-md">
        Sign In
      </a>
      <a href="#" data-modal-open="register" class="px-5 py-2 bg-white text-black border border-black text-sm font-bold uppercase tracking-wide hover:bg-black hover:text-white transition rounded-md">
        Join Now
      </a>
    </div>

    <button id="burger-button" class="md:hidden text-2xl text-white focus:outline-none ml-4">
      ☰
    </button>
  </div>

  <div id="toggle-menu" class="hidden flex-col md:flex md:flex-row md:justify-center md:items-center md:gap-14 bg-white md:bg-[#FFF8E1] border-t border-[#DCDCDC] px-6 py-6 text-sm font-medium text-[#212121] rounded-b-xl">
    <a href="/#how" class="block uppercase text-base md:text-lg font-bold tracking-wide hover:text-[#2E7D32] transition rounded-md">
      How It Works
    </a>
    <a href="/faq" class="block uppercase text-base md:text-lg font-bold tracking-wide hover:text-[#2E7D32] transition rounded-md">
      FAQs
    </a>
    <a href="/#winners" class="block uppercase text-base md:text-lg font-bold tracking-wide hover:text-[#2E7D32] transition rounded-md">
      Recent Wins
    </a>
    <a href="/contact" class="block uppercase text-base md:text-lg font-bold tracking-wide hover:text-[#2E7D32] transition rounded-md">
      Contact
    </a>

    <a href="#" data-modal-open="login" class="block md:hidden px-5 py-2 mt-2 bg-black text-white text-center border border-black uppercase font-bold hover:bg-white hover:text-black transition rounded-md">
      Sign In
    </a>
    <a href="#" data-modal-open="register" class="block md:hidden mt-2 px-5 py-2 bg-white text-black text-center border border-black uppercase font-bold hover:bg-black hover:text-white transition rounded-md">
      Join Now
    </a>
  </div>
</header>

