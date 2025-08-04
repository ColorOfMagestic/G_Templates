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
  
<header id="site-header" class="sticky top-0 z-50 bg-white text-[#161D34] px-6 py-6 shadow-md">
  <div class="max-w-7xl mx-auto relative flex items-center justify-between">
    <div class="w-6 h-6 sm:w-10 sm:h-10"></div>
    <div class="absolute left-1/2 transform -translate-x-1/2 z-10">
      <a href="/" class="block">
        <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] Logo" class="h-20 sm:h-24 w-auto">
      </a>
    </div>
    <div class="hidden sm:flex flex-col items-end gap-1 z-20">
      <div class="text-base font-semibold text-[#E41C23]">Top 10 online casina u Hrvatskoj</div>
      <div class="flex items-center gap-2 bg-[#102CA7] text-[#fff] rounded-md px-3 py-1 text-xs font-bold uppercase shadow border border-[#FFD700]">
        <span>18+</span>
        <span class="border-l border-[#FFD700] h-4 mx-2"></span>
        <span>Igraj odgovorno</span>
      </div>
    </div>
  </div>
  <div class="flex flex-col items-center gap-1 mt-4 sm:hidden">
    <div class="text-base font-semibold text-[#E41C23]">Top 10 online casina u Hrvatskoj</div>
    <div class="flex items-center gap-2 bg-[#102CA7] text-[#fff] rounded-md px-3 py-1 text-xs font-bold uppercase shadow border border-[#FFD700]">
      <span>18+</span>
      <span class="border-l border-[#FFD700] h-4 mx-2"></span>
      <span>Igraj odgovorno</span>
    </div>
  </div>
</header>


