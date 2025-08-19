<?php
session_start();
header('Content-Type: application/json');

$usersFile = __DIR__ . '/users.json';
if (!file_exists($usersFile)) {
    file_put_contents($usersFile, json_encode([]));
}

$method = $_SERVER['REQUEST_METHOD'];
$users = json_decode(file_get_contents($usersFile), true) ?: [];

function findUserIndexByEmail(array $users, string $email): int {
    foreach ($users as $i => $u) {
        if (isset($u['email']) && strtolower($u['email']) === strtolower($email)) return $i;
    }
    return -1;
}

if (empty($_SESSION['user'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$email = $_SESSION['user'];
$idx = findUserIndexByEmail($users, $email);
if ($idx === -1) {
    http_response_code(404);
    echo json_encode(['success' => false, 'message' => 'User not found']);
    exit;
}

if ($method === 'GET') {
    $u = $users[$idx];
    echo json_encode([
        'success' => true,
        'profile' => [
            'display_name' => $u['display_name'] ?? '',
            'bio' => $u['bio'] ?? '',
            'avatar' => $u['avatar'] ?? ''
        ]
    ]);
    exit;
}

if ($method === 'POST') {
    $in = json_decode(file_get_contents('php://input'), true) ?: [];
    $display = trim((string)($in['display_name'] ?? ''));
    $bio = trim((string)($in['bio'] ?? ''));
    $avatar = trim((string)($in['avatar'] ?? ''));

    if (mb_strlen($display) > 50) $display = mb_substr($display, 0, 50);
    if (mb_strlen($bio) > 300) $bio = mb_substr($bio, 0, 300);
    if (mb_strlen($avatar) > 300) $avatar = mb_substr($avatar, 0, 300);

    $users[$idx]['display_name'] = $display;
    $users[$idx]['bio'] = $bio;
    $users[$idx]['avatar'] = $avatar;

    file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    echo json_encode(['success' => true]);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed']);
