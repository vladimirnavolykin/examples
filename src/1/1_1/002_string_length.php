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
    assertSuccess("\\example_1_1_002\\{$functionName}", 0, ['']);
    assertSuccess("\\example_1_1_002\\{$functionName}", 13, ['test string 1']);
    assertSuccess("\\example_1_1_002\\{$functionName}", 1, ["\n"]);
}

assertSuccess('\\example_1_1_002\\isStringLength', 9, ['кириллица']);
assertSuccess('\\example_1_1_002\\isStringLength_v3', 9, ['кириллица']);
