<?php

function assertSuccess(bool $assertion): void
{
    assert($assertion);
}

function assertException(string $functionName, ...$args): void
{
    try {
        assert($functionName(...$args));

        throw new \NotThrowException();
    } catch (\Throwable $e) {
        if ($e instanceof NotThrowException) {
            throw $e;
        }
    }
}

class NotThrowException extends \Exception
{
}
