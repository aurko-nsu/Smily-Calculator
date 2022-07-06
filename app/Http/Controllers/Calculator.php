<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Calculator extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $this->validate($request,[
            'first_num' => 'required',
            'second_num' => 'required',
            'operator' => 'required'
        ]);

        $first_number = $request->first_num;
        $second_number = $request->second_num;

        return response()->json(
            [
                'success' => true,
                'number' => 'received those numbers'
            ]
        );
    }
}
