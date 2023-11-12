<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_2_003;

/**
 * <b>Задача:</b> Дано число. Выведите в консоль сумму первой и последней цифры этого числа.
 * @see https://code.mu/ru/php/tasker/stager/1/2/
 */

function getSumFirstAndLastDigit(int|float $number): int
{
    $numberAsString = (string) $number;

    $firstDigit = (int) ltrim($numberAsString, "-")[0];
    $lastDigit = (int) $numberAsString[strlen($numberAsString) - 1];

    return $firstDigit + $lastDigit;
}

/**
 * test block
 */
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 2, [-1]);
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 9, [0.09]);
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 0, [0]);
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 1, [+1_000_000]);
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 4, [.04]);
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 8, [0x1A]); // 0x1A = 26
assertSuccess('\\example_1_2_003\\getSumFirstAndLastDigit', 11, [0123]); // 0123 = 83
