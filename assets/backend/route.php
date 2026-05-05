<?php

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$viewDir = __DIR__ . '/page/';
$path = str_replace('/backend', '', $request);

switch ($path) {
    case '':
    case '/':
        require $viewDir . 'home.php';
        break;
    case '/home':
        require $viewDir . 'home.php';
        break;
    case '/skin-list':
        require $viewDir . 'skin-list.php';
        break;
    case '/download':
        require $viewDir . 'download.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Not Found";
        break;
}
?>
