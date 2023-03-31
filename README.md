# Pair Calculator App

This applicaiton is based on the algorithm to calculate the number of pairs of elements with a difference equal to a given parameter. With the purpose of use Laravel, POO, Single Responsability, API, JSON.

<p align="center"><a href="#" target="_blank"><img src="https://www.codibros.com/demo_screen_shots/pairs_calculator_web_app_screen_shot.png"></a></p>

## About Pair Calculator
The algorithm to calculate the number of pairs of elements with a difference equal to a given parameter can be summarized as follows:
1. Sort the array of integers in ascending order
2. Initialize two pointers, one at the beginning and the other at the end of the array
3. Repeat until the pointers meet or cross each other:
   * If the difference between the elements at the two pointers is equal to the given parameter, increment the count of pairs and move both pointers towards the center of the array
   * If the difference is less than the given parameter, move the left pointer one position to the right to increase the difference
   * If the difference is greater than the given parameter, move the right pointer one position to the left to decrease the difference
4. Return the count of pairs

## Objects created in this project
- App
    - Http\Controllers\API\v1\FormController.php
    - Requests\SubmitFormRequest.php
    - Services\CalculatorService.php
- Resources
    - js\components\ExampleComponent.vue
    - js\app.js 
    - views\welcome.blade.php
- Routes\api.php
- Tests
    - Feature\FormControllerTest.php
    - Unit\Services\CalculatorServiceTest.php
    - DataProvider.php
