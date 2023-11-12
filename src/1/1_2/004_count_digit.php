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
assertSuccess('\\example_1_2_004\\getCountOfDigits', 1, [-1]);
assertSuccess('\\example_1_2_004\\getCountOfDigits', 3, [0.09]);
assertSuccess('\\example_1_2_004\\getCountOfDigits', 1, [0]);
assertSuccess('\\example_1_2_004\\getCountOfDigits', 7, [+1_000_000]);
assertSuccess('\\example_1_2_004\\getCountOfDigits', 3, [.04]);
assertSuccess('\\example_1_2_004\\getCountOfDigits', 2, [0x1A]); // 0x1A = 26
assertSuccess('\\example_1_2_004\\getCountOfDigits', 2, [0123]); // 0123 = 83
