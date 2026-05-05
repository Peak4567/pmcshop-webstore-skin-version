<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/page/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/home':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/service':
        require __DIR__ . $viewDir . 'service.php';
        break;
    case '/example':
        require __DIR__ . $viewDir . 'example.php';
        break;
    case '/login':
        require __DIR__ . $viewDir . 'auth/login.php';
        break;
    case '/sign-up':
        require __DIR__ . $viewDir . 'auth/sign-up.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
?>
