<?php
// If the server is serving the project root (cannot change vhost),
// forward execution to the `public` front controller.

$public = __DIR__ . '/public';

// When using PHP built-in server, serve static files directly
if (php_sapi_name() === 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $url;
    if (is_file($file)) {
        return false;
    }
}

require $public . '/index.php';
