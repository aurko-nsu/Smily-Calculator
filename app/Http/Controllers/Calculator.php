<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Calculator extends Controller
{
    public function calculator()
    {
        return view('calculator');
    }
}
