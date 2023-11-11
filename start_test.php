<?php

if (PHP_SAPI !== 'cli') {
    die("\033[91mСкрипт нужно выполнить в консоли!!!\033[39m");
}

require_once 'functions.php';

$files = glob(__DIR__ . '/*/*.php');

echo "\033[43mНачало\033[49m" . PHP_EOL;

foreach ($files as $file) {
    try {
        require_once $file;
        echo "\033[92mУспешно:\033[39m " . basename($file) . PHP_EOL;
    } catch (\Throwable) {
        echo "\033[91mНе успешно:\033[39m " . basename($file) . PHP_EOL;
    }
}

echo "\033[43mКонец\033[49m";
