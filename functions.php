<?php

function assertSuccess(string $functionName, mixed $result, array $args = []): void
{
    $actualResult = 1;
    $time = microtime(true);
    try {
        assert($functionName(...$args) === $result);
    } catch (\Throwable) {
        $actualResult = 0;
    } finally {
        reportWrite(
            $functionName,
            $actualResult,
            $args,
            $actualResult ? microtime(true) - $time : 0
        );
    }
}

function assertException(string $functionName, array $args): void
{
    $actualResult = 0;
    try {
        assert($functionName(...$args));
    } catch (\Throwable) {
        $actualResult = 1;
    } finally {
        reportWrite(
            $functionName,
            $actualResult,
            $args
        );
    }
}

function reportWrite(string $functionName, int $result, array $args = [], float $time = 0)
{
    if ($result) {
        echo "\033[92mУспешно:\033[39m [time: {$time}]" . basename($functionName) . ' Args: ' . implode(', ', $args) , PHP_EOL;
    } else {
        echo "\033[91mНе успешно:\033[39m [time: {$time}]" . basename($functionName) . ' Args: ' .implode(', ', $args) , PHP_EOL;
    }
}
