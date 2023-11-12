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
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '1', [-1]);
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '9', [0.09]);
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '0', [0]);
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '0', [+1_000_000]);
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '4', [.04]);
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '6', [0x1A]); // 0x1A = 26
assertSuccess('\\example_1_2_002\\getLastDigitOfNumber', '3', [0123]); // 0123 = 83
