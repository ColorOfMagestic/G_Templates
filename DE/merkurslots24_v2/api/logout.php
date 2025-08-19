<?php
session_start();

// Удаляем все переменные сессии
$_SESSION = [];

// Уничтожаем сессию
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Удаляем вспомогательные куки, если есть
setcookie("auth_token", "", time() - 3600, "/");

echo json_encode(['success' => true]);
