<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_005;

use RuntimeException;

/**
 * <b>Задача:</b> Даны два слова. Проверьте, что первые буквы этих слов совпадают.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

/**
 * only ascii symbols
 */
function firstCharactersIsMatch(string $string1, string $string2): bool
{
    return !isset($string1[0], $string2[0])
        ? throw new RuntimeException()
        : $string1[0] === $string2[0];
}

/**
 * test block
 */
assertSuccess(firstCharactersIsMatch('test', ' test') === false);
assertSuccess(firstCharactersIsMatch('test', 'test2') === true);
assertException('firstCharactersIsMatch', '', '');
