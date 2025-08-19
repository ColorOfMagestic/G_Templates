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

<!-- !!!!! -->

<?php
session_start();

$usersFile = __DIR__ . '/users.json';
if (!file_exists($usersFile)) file_put_contents($usersFile, json_encode([]));
$USERS = json_decode(file_get_contents($usersFile), true) ?: [];

function saveUsers(array $USERS, string $file){
    file_put_contents($file, json_encode($USERS, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE), LOCK_EX);
}

function getDeposit(array $USERS): int {
    $email = $_SESSION['user'] ?? null;
    if (!$email) return 0;
    return $USERS[$email]['deposit'] ?? 0;
}

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($pass) >= 6 && !isset($USERS[$email])) {
        $USERS[$email] = [
            'password' => password_hash($pass, PASSWORD_DEFAULT),
            'created_at' => time(),
            'deposit' => 0
        ];
        saveUsers($USERS, $usersFile);

        $_SESSION['user'] = $email;
        $_SESSION['depositAmount'] = 0;

        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = 'Invalid data or user exists';
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';
    if (isset($USERS[$email]) && password_verify($pass, $USERS[$email]['password'])) {
        $_SESSION['user'] = $email;
        $_SESSION['depositAmount'] = $USERS[$email]['deposit'] ?? 0;
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = 'Invalid login';
    }
}

$isLoggedIn = !empty($_SESSION['user']);
$depositAmount = $_SESSION['deposit'] ?? 0;
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style/style.css">

</head>

<body>
<header id="1-header" class=" bg-black/80 backdrop-blur border-b border-white/10">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row sm:items-center justify-between px-4 py-2 gap-3">
    
    <a href="#" class="flex items-center gap-3 justify-center sm:justify-start">
      <img src="img/logo.webp" alt="[CURRENT_DOMAIN_NO_TLD] logo" class="h-auto w-14 sm:h-auto sm:w-16">
      <span class="font-['Bebas_Neue'] text-2xl sm:text-3xl text-[color:#FFD700] drop-shadow-[0_0_6px_rgba(255,215,0,0.8)] tracking-widest">
        [CURRENT_DOMAIN_NO_TLD]
      </span>
    </a>

    <div class="flex flex-col sm:flex-row items-center sm:gap-3 gap-2">
      <div class="w-full sm:w-auto hidden sm:flex items-center bg-black/40 rounded-full px-3 py-1.5 border border-[color:#00E5FF] focus-within:ring-2 ring-[color:#00E5FF]">
        <input type="text" placeholder="Search..." class="bg-transparent text-sm text-white placeholder-gray-400 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[color:#00E5FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 110-16 8 8 0 010 16z"/>
        </svg>
      </div>


      <div class="flex items-center gap-2 sm:gap-3 <?= $isLoggedIn ? '' : 'hidden' ?>"> 
        <button data-modal="deposit-modal" class="px-3 py-1.5 rounded-lg bg-black/60 text-sm text-white font-semibold hover:bg-black/70 transition">
          💰 $<?php echo number_format($depositAmount, 2); ?>
        </button>
        <button data-modal="trophies-modal" class="px-3 py-1.5 rounded-lg bg-black/60 text-sm text-white font-semibold hover:bg-black/70 transition">
          🏆 0
        </button>
        <button data-modal="mailbox-modal" class="px-3 py-1.5 rounded-lg bg-black/60 text-sm text-white font-semibold hover:bg-black/70 transition">
          ✉️ 0
        </button>
      </div>


      <div class="flex items-center gap-2 sm:gap-3">
        <button data-modal="login-modal" class="px-4 py-1.5 rounded-md border border-white/20 text-white hover:bg-white/10 text-sm">
          Login
        </button>
        <button data-modal="register-modal" class="px-4 py-1.5 rounded-md bg-[color:#FF6B00] text-black font-semibold hover:brightness-110 text-sm">
          Register
        </button>
      </div>
    </div>
  </div>

  <div class="bg-[color:#00E5FF] text-black text-base  text-center py-2 font-medium">
    100% free social casino – no real money transactions!
  </div>
</header>







