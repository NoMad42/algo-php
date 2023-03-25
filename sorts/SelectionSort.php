<?php

/**
 * Сортировка выбором
 * 
 * Время работы. O(N^2)
 * 
 * Область использования. Очень малые массивы.
 * Достаточно быстрый для малых массивов (менее 10 000 элементов).
 * Работает эфективнее чем более сложные алгоритмы если элементтов совсем немного.
 * 
 * @param int[] &$values
 * 
 * @return void
 */
function SelectionSort(array &$values): void {
    $indexMax = count($values);
    for ($i=0; $i < $indexMax; $i++) { 
        $lowerValueIndex = $i;

        for ($j=$i; $j < $indexMax; $j++) { 
            if ($values[$j] < $values[$lowerValueIndex]) {
                $lowerValueIndex = $j;
            }
        }

        if ($i === $lowerValueIndex) {
             continue;
        }

        $tmp = $values[$i];
        $values[$i] = $values[$lowerValueIndex];
        $values[$lowerValueIndex] = $tmp;
    }
}
