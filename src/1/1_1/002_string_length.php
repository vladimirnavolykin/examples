<?php

/**
 * Navolykin Vladimir (vladimirnavolykin@gmail.com).
 */

declare(strict_types=1);

namespace example_1_1_002;

/**
 * <b>Задача:</b> Дана строка. Выведите в консоль длину этой строки.
 * @see https://code.mu/ru/php/tasker/stager/1/1/
 */

function isStringLength(string $string): int
{
    return mb_strlen($string);
}

/**
 * only ascii symbols
 */
function isStringLength_v2(string $string): int
{
    $i = 0;
    while(isset($string[$i])) {
        $i++;
    }

    return $i;
}

function isStringLength_v3(string $string): int
{
    return count(mb_str_split($string));
}

/**
 * test block
 */
foreach (['isStringLength', 'isStringLength_v2', 'isStringLength_v3'] as $functionName) {
    assertSuccess("\\example_1_1_002\\{$functionName}"('') === 0);
    assertSuccess("\\example_1_1_002\\{$functionName}"('test string 1') === 13);
    assertSuccess("\\example_1_1_002\\{$functionName}"("\n") === 1);
}

assertSuccess(isStringLength('кириллица') === 9);
assertSuccess(isStringLength_v3('кириллица') === 9);
