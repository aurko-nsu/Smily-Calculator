<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Calculator extends Controller
{
    public function calculator()                //calculator view page
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $operation = "";                        //variable
        $receivedData = $request->validate([    //validation check
            'number1' => 'required',
            'number2' => 'required',
            'operator' => 'required'
        ]);

        //mathematical operation based on the operator
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

        return response()->json([                   //return the response as json
            'Number 1' => $receivedData['number1'],
            'Number 2' => $receivedData['number2'],
            'Operator' => $operation,
            'Result' => $receivedData['value']
        ]);
    }
}
