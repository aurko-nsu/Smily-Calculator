<?php

use App\Http\Controllers\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/' , [Calculator::class , 'calculator']); 
//route to the landing page


Route::post('/calculate' , [Calculator::class , 'calculate'])->name('calculator.calculate');
//route to calculation function