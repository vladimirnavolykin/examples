<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_3_001;

/**
 * <b>Задача:</b> Дана строка. Если в этой строке более одного символа, выведите в консоль предпоследний символ этой строки.
 * @see https://code.mu/ru/php/tasker/stager/1/3/
 */

function getAdjectiveChar(string $string): string
{
    if (mb_strlen($string) < 2) {
        throw new \RuntimeException();
    }

    return (mb_str_split($string))[mb_strlen($string) - 2];
}

/**
 * test block
 */
assertSuccess('\\example_1_3_001\\getAdjectiveChar', 's', ['test']);
assertException('\\example_1_3_001\\getAdjectiveChar', ['']);
assertException('\\example_1_3_001\\getAdjectiveChar', ['6']);
