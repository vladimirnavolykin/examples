<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_2_001;

/**
 * <b>Задача:</b> Дано число. Выведите в консоль первую цифру этого числа.
 * @see https://code.mu/ru/php/tasker/stager/1/2/
 */

function getFirstDigitOfNumber(int|float $number): string
{
    return ltrim(((string) $number), "-")[0];
}

/**
 * test block
 */
assertSuccess(getFirstDigitOfNumber(-1) === '1');
assertSuccess(getFirstDigitOfNumber(0.09) === '0');
assertSuccess(getFirstDigitOfNumber(0) === '0');
assertSuccess(getFirstDigitOfNumber(+1_000_000) === '1');
assertSuccess(getFirstDigitOfNumber(.04) === '0');
assertSuccess(getFirstDigitOfNumber(0x1A) === '2'); // 0x1A = 26
assertSuccess(getFirstDigitOfNumber(0123) === '8'); // 0123 = 83
