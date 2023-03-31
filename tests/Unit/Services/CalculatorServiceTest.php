<?php

namespace Tests\Unit\Services;

use PHPUnit\Framework\TestCase;
use App\Services\CalculatorService;
use Tests\DataProvider;

class CalculatorServiceTest extends TestCase
{

    /** 
     * @test 
     * @dataProvider Tests\DataProvider::countPairsData
     * */
    public function test_count_pairs($numbers, $difference, $expected)
    {        
        $data = [
            'numbers' => $numbers,
            'difference' => $difference,
        ];

        $count = (new CalculatorService())->countPairs(explode(',', $numbers), $difference);
        
        $this->assertEquals($expected, $count);
    }
}
