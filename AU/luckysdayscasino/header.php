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
  <script src="../scripts/script.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased bg-blue-50 text-gray-900">

<header class="sticky top-0 z-50 bg-black/80 shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between sm:grid sm:grid-cols-3 h-20">
    <div class="hidden sm:block"></div>
      <div class="flex sm:justify-center flex-1 sm:flex-none">
        <a href="/" class="flex items-center">
          <picture>
            <source srcset="../img/logo.webp" type="image/webp" />
            <img src="../img/logo.png" alt="Lucky's Days Casino logo" class="h-20 w-auto" />
          </picture>
        </a>
      </div>
      <nav class="flex justify-end items-center space-x-2 flex-1 sm:flex-none">
        <button type="button" data-open-login
          class="px-4 py-2 rounded-md text-sm font-medium border border-white text-white hover:bg-blue-600 hover:border-transparent">
          Log In
        </button>
        <button type="button" data-open-sign
          class="px-4 py-2 rounded-md text-sm border border-transparent font-medium bg-blue-600 text-white hover:border-white hover:bg-transparent">
          Create Account
        </button>
      </nav>
    </div>
  </div>
</header>