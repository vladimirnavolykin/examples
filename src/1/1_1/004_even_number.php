<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_004;

/**
 * <b>Задача:</b> Дано число. Проверьте, четное оно или нет.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

function isEvenNumber(int $number): bool
{
    return !($number % 2);
}

/**
 * test block
 */
assertSuccess(isEvenNumber(-4) === true);
assertSuccess(isEvenNumber(100) === true);
assertSuccess(isEvenNumber(7) === false);
assertSuccess(isEvenNumber(0) === true);