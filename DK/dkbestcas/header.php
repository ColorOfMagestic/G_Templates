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

<header id="header" class="bg-[#f1f1f1] text-[#212121] py-8 px-4">
  <div class="max-w-6xl mx-auto flex flex-col items-center gap-8">
    <p class="text-center text-sm md:text-base leading-relaxed text-[#616161] max-w-4xl">
      Denne side præsenterer uafhængige anmeldelser og sammenligninger af online casinoer i samarbejde med kommercielle partnere. Der kan forekomme økonomisk kompensation, som kan påvirke placeringen i oversigterne.
      <br><br>
      Tjenesterne er udelukkende rettet mod myndige personer på 18 år og derover. Læs venligst de gældende vilkår og betingelser hos den enkelte udbyder. Krav for eventuelle bonusser og tilbud varierer.
    </p>
    <a href="/">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-20">
    </a>
  </div>
</header>




