<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_5_003;

/**
 * <b>Задача:</b> Найдите сумму всех целых не четных чисел в промежутке от 1 до 100.
 * @see https://code.mu/ru/php/tasker/stager/1/5/
 */

function rageNotEvenSum()
{
    $counter = $result = 0;
    while ($counter < 100) {
        if (++$counter % 2) {
            $result += $counter;
        }
    }

    return $result;
}

/**
 * test block
 */
assertSuccess('\\example_1_5_003\\rageNotEvenSum', 2500);
