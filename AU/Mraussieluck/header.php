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
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<header class="bg-[#FAF8F0] border-b border-[#E0E0E0] font-['Inter'] sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-4 md:py-6">
    

    <a href="/" class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] tracking-wider uppercase">
    [CURRENT_DOMAIN_NO_TLD]
    </a>

    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-[#1E1E1E]">
    <a href="/#howto" class="hover:text-[#228B22]">How To</a>
      <a href="/#about" class="hover:text-[#228B22]">About</a>
      <a href="/terms" class="hover:text-[#228B22]">Terms</a>
      <a href="/tools" class="hover:text-[#228B22]">Tools</a>
    </nav>

    <button id="menu-toggle" class="md:hidden text-[#1E1E1E] focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile nav -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <nav class="flex flex-col space-y-3 text-sm font-medium text-[#1E1E1E]">
      <a href="/#howto" class="hover:text-[#228B22]">How To</a>
      <a href="/#about" class="hover:text-[#228B22]">About</a>
      <a href="/terms" class="hover:text-[#228B22]">Terms</a>
      <a href="/tools" class="hover:text-[#228B22]">Tools</a>
    </nav>
  </div>
</header>



