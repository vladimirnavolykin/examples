<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_5_001;

/**
 * <b>Задача:</b> Найдите сумму всех целых чисел от 1 до 100.
 * @see https://code.mu/ru/php/tasker/stager/1/5/
 */

function rageSum(): int
{
    $counter = $result = 0;
    while ($counter < 100) {
        $result += ++$counter;
    }

    return $result;
}

/**
 * test block
 */
assertSuccess('\\example_1_5_001\\rageSum', 5050);
