<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_3_002;

/**
 * <b>Задача:</b> Даны два целых числа. Проверьте, что первое число без остатка делится на второе.
 * @see https://code.mu/ru/php/tasker/stager/1/3/
 */

function isMultiplicity(int $number1, int $number2): bool
{
    return !($number1 % $number2);
}

/**
 * test block
 */
assertSuccess('\\example_1_3_002\\isMultiplicity', true, [10, 5]);
assertSuccess('\\example_1_3_002\\isMultiplicity', false, [9, 5]);
