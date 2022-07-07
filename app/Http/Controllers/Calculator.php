<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Calculator extends Controller
{
    public function calculator()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $operation = "";
        $receivedData = $request->validate([
            'number1' => 'required',
            'number2' => 'required',
            'operator' => 'required'
        ]);

         if($receivedData['operator'] == '+')
            {
                $receivedData['value'] = $receivedData['number1'] + $receivedData['number2'];
                $operation = "Addition";
            }
    else if($receivedData['operator'] == '-')
            {
                $receivedData['value'] = $receivedData['number1'] - $receivedData['number2'];
                $operation = "Subtraction";
            }
    else if($receivedData['operator'] == '*')
            {
                $receivedData['value'] = $receivedData['number1'] * $receivedData['number2'];
                $operation = "Multiplication";
            }
    else if($receivedData['operator'] == '/')
            {
                $receivedData['value'] = $receivedData['number1'] / $receivedData['number2'];
                $operation = "Division";
            }
    else{} 

    $data = [
        'Number 1' => $receivedData['number1'],
        'Number 2' => $receivedData['number2'],
        'Operator' => $operation,
        'Result' => $receivedData['value']
    ];
    return response()->json($data);
    }
}
