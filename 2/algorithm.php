<?php

$arr = [3, 6, -3, 5, -10, 3, 10, 1, 7, -1, -9, -8, 7, 7, -7, -2, -7];

function getNumberOfPairsWithZeroSum(array $array) : int
{
    $result = 0;
    $arraySize = count($array);
    $overSizeValue =  max($array) + 1;

    for ($i = 0; $i < $arraySize; $i++) {
        for ($j = $i + 1; $j < $arraySize; $j++) {
            if ($array[$i] + $array[$j] == 0) {
                $array[$j] = $overSizeValue;
                $result++;
                break;
            }
        }
    }
    return $result;
}

$result = getNumberOfPairsWithZeroSum($arr);

var_dump($result);
