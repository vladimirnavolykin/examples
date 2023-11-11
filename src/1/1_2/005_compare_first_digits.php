<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_2_005;

/**
 * <b>Задача:</b> Даны два числа. Проверьте, что первые цифры этих чисел совпадают.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

function firstCharactersIsMatch(int|float $number1, int|float $number2): bool
{
    return ltrim(((string) $number1), "-")[0] === ltrim(((string) $number2), "-")[0];
}

/**
 * test block
 */
assertSuccess(firstCharactersIsMatch(-1, 123) === true);
assertSuccess(firstCharactersIsMatch(0.09, 7) === false);
