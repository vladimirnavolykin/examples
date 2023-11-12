<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_001;

/**
 * <b>Задача:</b> Дано число. Проверьте, отрицательное оно или нет. Выведите об этом информацию в консоль.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

function isNegativeNumber(int|float $number): bool
{
    return $number < 0;
}

function isNegativeNumber_v2(int|float $number): bool
{
    return abs($number) !== $number;
}

function isNegativeNumber_v3(int|float $number): bool
{
    return str_starts_with((string) $number, '-');
}

/**
 * test block
 */
foreach (['isNegativeNumber', 'isNegativeNumber_v2', 'isNegativeNumber_v3'] as $functionName) {
    assertSuccess("\\example_1_1_001\\{$functionName}", true, [-1]);
    assertSuccess("\\example_1_1_001\\{$functionName}", true, [-5.77]);
    assertSuccess("\\example_1_1_001\\{$functionName}", false, [0]);
    assertSuccess("\\example_1_1_001\\{$functionName}", false, [100]);
}
