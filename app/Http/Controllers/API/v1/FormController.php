<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitFormRequest;
use Illuminate\Http\Request;
use App\Services\CalculatorService;

class FormController extends Controller
{    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sayHello()
    {
        return "Hello buddy";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SubmitFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function submitForm(SubmitFormRequest $request)
    {
        $params = $request->validated();
        $calculatorService = new CalculatorService();
        $count = $calculatorService->countPairs(explode(',', $params['numbers']), $params['difference']);
        return response()->json([
            'message' => sprintf('Pairs with difference equal to %d in [%s]: %d', $params['difference'], $params['numbers'], $count),
            'total' => $count,
        ]);
    }
    
}
