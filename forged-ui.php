<?php

use Pusher\Pusher;

require_once __DIR__ . '/vendor/autoload.php';

(Dotenv\Dotenv::createImmutable(__DIR__))->load();

$pusher = new Pusher(
    getenv('PUSHER_KEY'),
    getenv('PUSHER_SECRET'),
    getenv('PUSHER_APP'),
    [
        'cluster' => getenv('PUSHER_CLUSTER'),
        'useTLS' => true,
    ]
);

if ($json = json_decode(file_get_contents("php://input"), true)) {
    $payload = $json;
} else {
    $payload = $_POST;
}

if (!isset($payload['site']['name'])) {
    exit('MISSING SITE.NAME');
}

$response = $pusher->trigger(getenv('PUSHER_CHANNEL'), 'message', $payload);

exit('OK');
