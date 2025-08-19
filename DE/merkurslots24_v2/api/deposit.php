<?php
session_start();
header('Content-Type: application/json');

$usersFile = __DIR__ . '/users.json';
if (!isset($_SESSION['user'])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$amount = floatval($input['amount'] ?? 0);

if ($amount <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid amount']);
    exit;
}

if (!file_exists($usersFile)) {
    echo json_encode(['success' => false, 'message' => 'Users file missing']);
    exit;
}

$users = json_decode(file_get_contents($usersFile), true);
$email = $_SESSION['user'];
$newBalance = 0;

foreach ($users as &$user) {
    if (strtolower($user['email']) === strtolower($email)) {
        if (!isset($user['deposit'])) $user['deposit'] = 0;
        $user['deposit'] += $amount;
        $newBalance = $user['deposit'];
        $_SESSION['deposit'] = $newBalance;
        break;
    }
}

file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'newBalance' => $newBalance
]);
