<?php

if (PHP_SAPI !== 'cli') {
    die("\033[91mСкрипт нужно выполнить в консоли!!!\033[39m");
}

require_once 'functions.php';

if (count($argv) > 1) {
    $files = array_slice($argv, 1);
} else {
    $files = glob(__DIR__ . '/src/*/*/*.php');
}

echo "\033[43mНачало\033[49m" . PHP_EOL;

foreach ($files as $file) {
    require_once $file;
}

echo "\033[43mКонец\033[49m";
