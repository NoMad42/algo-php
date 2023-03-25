<?php

require_once('selectionSort.php');

staticTest();

function staticTest() {
    $values = [7, 5, 6, 1, 3, 2, 8, 0];
    selectionSort($values);
    $expectedValues = [0, 1, 2, 3, 5, 6, 7, 8];
    assert(
        $values === $expectedValues,
        new AssertionError(sprintf(
            'Массивы не равны. Ожидали: %s%sПолучили: %s',
            var_export($expectedValues, true),
            PHP_EOL,
            var_export($values, true),
        ))
    );

}
