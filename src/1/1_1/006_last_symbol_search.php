<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_006;

use RuntimeException;

/**
 * <b>Задача:</b> Даны два слова. Проверьте, что первые буквы этих слов совпадают.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

function lastCharactersSearch(string $string): string
{
    if ($string === '') {
        throw new RuntimeException();
    }

    $stringAsArray = mb_str_split($string);
    if (end($stringAsArray) === 'ь') {
        if (prev($stringAsArray) !== false) {
            return current($stringAsArray);
        }

        throw new RuntimeException();
    }

    return end($stringAsArray);
}

/**
 * test block
 */
assertSuccess(lastCharactersSearch('тест') === 'т');
assertSuccess(lastCharactersSearch('соль') === 'л');
assertException('lastCharactersSearch', '');
assertException('lastCharactersSearch', 'ь');
