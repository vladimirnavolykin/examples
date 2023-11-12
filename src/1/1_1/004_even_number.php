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
assertSuccess('\\example_1_1_004\\isEvenNumber', true, [-4]);
assertSuccess('\\example_1_1_004\\isEvenNumber', true, [100]);
assertSuccess('\\example_1_1_004\\isEvenNumber', false, [7]);
assertSuccess('\\example_1_1_004\\isEvenNumber', true, [0]);
