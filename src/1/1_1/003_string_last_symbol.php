<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_003;
use RuntimeException;

/**
 * <b>Задача:</b> Дана строка. Выведите в консоль последний символ строки.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

/**
 * only ascii symbols
 */
function getLastSymbol(string $string): string
{
    return $string === ''
        ? throw new RuntimeException()
        : $string[strlen($string) - 1];
}

/**
 * test block
 */
assertSuccess('\\example_1_1_003\\getLastSymbol', 'g', ['test string']);
assertSuccess('\\example_1_1_003\\getLastSymbol', "\n", ["\n"]);
assertException('\\example_1_1_003\\getLastSymbol', ['']);

