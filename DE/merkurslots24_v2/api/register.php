<?php
session_start();

header('Content-Type: application/json');

$usersFile = __DIR__ . '/users.json';
if (!file_exists($usersFile)) {
    file_put_contents($usersFile, json_encode([]));
}

$data = json_decode(file_get_contents('php://input'), true);
$email = trim($data['email'] ?? '');
$password = trim($data['password'] ?? '');

if (!$email || !$password) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required']);
    exit;
}

$users = json_decode(file_get_contents($usersFile), true);

foreach ($users as $user) {
    if (strtolower($user['email']) === strtolower($email)) {
        echo json_encode(['success' => false, 'message' => 'User already exists']);
        exit;
    }
}

$users[] = [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'deposit' => 0
];
file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

$_SESSION['user'] = $email;

echo json_encode([
    'success' => true,
    'message' => 'Registered and logged in successfully',
    'reload'  => true // флаг для фронтенда, чтобы перезагрузить страницу
]);
