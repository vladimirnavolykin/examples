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

/**
 * test block
 */
assertSuccess(isNegativeNumber(-1) === true);
assertSuccess(isNegativeNumber(-5.77) === true);
assertSuccess(isNegativeNumber(0) === false);
assertSuccess(isNegativeNumber(100) === false);
