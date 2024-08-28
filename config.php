<?php


ini_set('session.use._only_cookies', 1);
ini_set('session.use._strict_mode', 1);

session_set_cookie_params( [
    'lifetime' => 1800,
    'path' => '/; samesite=strict',
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);

session_start();

session_regenerate_id(true);

if (!isset($_SESSION['last_regeneration'])) {
    $_SESSION['last_regeneration'] = time();
} elseif (time() - $_SESSION['last_regeneration'] > 1800) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}else{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] > $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}

