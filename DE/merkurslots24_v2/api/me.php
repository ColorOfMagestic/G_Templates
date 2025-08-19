<?php
// /api/me.php
declare(strict_types=1);
session_start();
header('Content-Type: application/json; charset=utf-8');

if (!empty($_SESSION['user'])) {
  echo json_encode(['loggedIn'=>true, 'email'=>$_SESSION['user']]);
} else {
  echo json_encode(['loggedIn'=>false]);
}