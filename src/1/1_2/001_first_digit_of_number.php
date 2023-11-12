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
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '1', [-1]);
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '0', [0.09]);
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '0', [0]);
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '1', [+1_000_000]);
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '0', [.04]);
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '2', [0x1A]); // 0x1A = 26
assertSuccess('\\example_1_2_001\\getFirstDigitOfNumber', '8', [0123]); // 0123 = 83
