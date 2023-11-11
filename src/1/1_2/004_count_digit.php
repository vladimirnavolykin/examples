<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_2_004;

/**
 * <b>Задача:</b> Дано число. Выведите количество цифр в этом числе.
 * @see https://code.mu/ru/php/tasker/stager/1/2/
 */

function getCountOfDigits(int|float $number): int
{
    $numberAsString = ltrim((string) $number, "-");

    return str_contains($numberAsString, '.')
        ? strlen($numberAsString) - 1
        : strlen($numberAsString);
}

/**
 * test block
 */
assertSuccess(getCountOfDigits(-1) === 1);
assertSuccess(getCountOfDigits(0.09) === 3);
assertSuccess(getCountOfDigits(0) === 1);
assertSuccess(getCountOfDigits(+1_000_000) === 7);
assertSuccess(getCountOfDigits(.04) === 3);
assertSuccess(getCountOfDigits(0x1A) === 2); // 0x1A = 26
assertSuccess(getCountOfDigits(0123) === 2); // 0123 = 83
