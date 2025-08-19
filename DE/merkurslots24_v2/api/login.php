<?php
session_start();

header('Content-Type: application/json');

$usersFile = __DIR__ . '/users.json';
if (!file_exists($usersFile)) {
    echo json_encode(['success' => false, 'message' => 'No users found']);
    exit;
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
    if (strtolower($user['email']) === strtolower($email) && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $email;
        echo json_encode(['success' => true, 'message' => 'Login successful']);
        exit;
    }
}

echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
