<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_2_002;

/**
 * <b>Задача:</b> Дано число. Выведите в консоль последнюю цифру этого числа.
 * @see https://code.mu/ru/php/tasker/stager/1/2/
 */

function getLastDigitOfNumber(int|float $number): string
{
    $numberAsString = (string) $number;

    return $numberAsString[strlen($numberAsString) - 1];
}

/**
 * test block
 */
assertSuccess(getLastDigitOfNumber(-1) === '1');
assertSuccess(getLastDigitOfNumber(0.09) === '9');
assertSuccess(getLastDigitOfNumber(0) === '0');
assertSuccess(getLastDigitOfNumber(+1_000_000) === '0');
assertSuccess(getLastDigitOfNumber(.04) === '4');
assertSuccess(getLastDigitOfNumber(0x1A) === '6'); // 0x1A = 26
assertSuccess(getLastDigitOfNumber(0123) === '3'); // 0123 = 83
