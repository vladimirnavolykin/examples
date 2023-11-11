<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_3_002;

/**
 * <b>Задача:</b> Даны два целых числа. Проверьте, что первое число без остатка делится на второе.
 * @see https://code.mu/ru/php/tasker/stager/1/2/
 */

function isMultiplicity(int $number1, int $number2): bool
{
    return !($number1 % $number2);
}

/**
 * test block
 */
assertSuccess(isMultiplicity(10, 5) === true);
assertSuccess(isMultiplicity(9, 5) === false);
