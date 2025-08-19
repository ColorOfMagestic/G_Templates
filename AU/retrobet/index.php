<?php include "header.php"; ?>

<main>
  <?php

  $page = isset($_GET['page']) ? trim($_GET['page']) : '';

  $allowed_pages = [
    '' => 'home.php',
    'articles' => 'articles.php',
    'charity' => 'charity.php',
    'offers' => 'offers.php',
    'privacy' => 'privacy.php',
    'responsible' => 'responsible.php',
    'terms' => 'terms.php',
  ];


  if (array_key_exists($page, $allowed_pages)) {
    include __DIR__ . '/' . $allowed_pages[$page];
  } else {
    http_response_code(404);
    echo "<h1>404 - Page not found</h1>";
  }
  ?>
</main>

<?php include "footer.php"; ?>