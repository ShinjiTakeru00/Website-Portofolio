<?php

$storagePath = '/tmp/laravel-storage';

$directories = [
    $storagePath,
    $storagePath . '/app',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

$defaults = [
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'APP_STORAGE_PATH' => $storagePath,
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'QUEUE_CONNECTION' => 'sync',
    'SESSION_DRIVER' => 'cookie',
    'VIEW_COMPILED_PATH' => $storagePath . '/framework/views',
];

foreach ($defaults as $key => $value) {
    if (getenv($key) === false) {
        putenv($key . '=' . $value);
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

require __DIR__ . '/../public/index.php';
