<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_5_002;

/**
 * <b>Задача:</b> Найдите сумму всех целых четных чисел в промежутке от 1 до 100.
 * @see https://code.mu/ru/php/tasker/stager/1/5/
 */

function rageEvenSum(): int
{
    $counter = $result = 0;
    while ($counter < 100) {
        if (++$counter % 2) {
            continue;
        }

        $result += $counter;
    }

    return $result;
}

/**
 * test block
 */
assertSuccess('\\example_1_5_002\\rageEvenSum', 2550);
