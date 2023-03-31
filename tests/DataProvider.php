<?php

namespace Tests;

class DataProvider
{
    public static function countPairsData(): array
    {
        return [
            ['1,2,3,4', 1, 3],
            ['1,2,3,4', 2, 2],
            ['1,3,5,7', 5, 0],
            ['1,5,3,4,2', 2, 3],
            ['1,5,3,4,2', 3, 2],
            ['10,20,30,40,50', 10, 4]
        ];
    }
}
