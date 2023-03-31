<?php

namespace Tests\Feature;

use App\Http\Requests\SubmitFormRequest;
use App\Http\Controllers\API\v1\FormController;
use App\Services\CalculatorService;
use Tests\DataProvider;
use Tests\TestCase;

class FormControllerTest extends TestCase
{   

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** 
     * @test 
     * @dataProvider Tests\DataProvider::countPairsData
     * */
    public function test_simple_post($numbers, $difference, $expected)
    {        
        $data = [
            'numbers' => $numbers,
            'difference' => $difference,
        ];
        $response = $this->postJson('/api/v1/form', $data);        
        $response
            ->assertStatus(200)
            ->assertJson([
                'total' => $expected
            ]);            
    }
    
}
