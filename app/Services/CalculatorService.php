<?php

namespace App\Services;

class CalculatorService
{
    public function countPairs(array $arr, int $k): int
    {
        $n = count($arr);
        $pairs = 0;
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {            
                $pairs += abs($arr[$j] - $arr[$i]) == $k ? 1 : 0;
            }
        }
        return $pairs;
    }
}