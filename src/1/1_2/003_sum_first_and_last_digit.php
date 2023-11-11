<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_3_003;

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
assertSuccess(getSumFirstAndLastDigit(-1) === 2);
assertSuccess(getSumFirstAndLastDigit(0.09) === 9);
assertSuccess(getSumFirstAndLastDigit(0) === 0);
assertSuccess(getSumFirstAndLastDigit(+1_000_000) === 1);
assertSuccess(getSumFirstAndLastDigit(.04) === 4);
assertSuccess(getSumFirstAndLastDigit(0x1A) === 8); // 0x1A = 26
assertSuccess(getSumFirstAndLastDigit(0123) === 11); // 0123 = 83
