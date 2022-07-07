<p align="center">
<img src="https://github.com/aurko-nsu/emo-cal/blob/development/public/images/emo_cal_home.png" width="600">
</p>

## Approach

This project has been developed with PHP Laravel(v.8) framework. A simple UI has been designed using CSS3 which includes two input fields to insert two numbers(int) as operands and a dropdown menu to select the operator to do the mathematical operation. 

- First a Route has been created for the landing page. `calculator` method from `Calculator` controlller has declared as the root. The calculator view is generated here.
```
Route::get('/' , [Calculator::class , 'calculator']);
``` 
- There are two input fields and a operator dropdown menu are available on the page to do the operation. The operators are symbolised as four different emoticons. After inserting two numbers in two different fields and selecting the operator, hit the Enter key from the keyboard.
- Three values from the form will be posted to another method of Calculator controller where the main operation will be operated.
```
Route::post('/calculate' , [Calculator::class , 'calculate'])->name('calculator.calculate');
``` 
- Finally the operation details will be returned as JSON format.
```
return response()->json([
            'Number 1' => $receivedData['number1'],
            'Number 2' => $receivedData['number2'],
            'Operator' => $operation,
            'Result' => $receivedData['value']
        ]);
``` 


## Steps to run the App

Follow the steps to run Emo Cal:

- Download the project file as zip from github in '\xampp\htdocs' directory of your machine. Or clone the github repository using Git Bash.
```
https://github.com/aurko-nsu/emo-cal.git
``` 
- Download composer from the [link](https://getcomposer.org/download/).
- Rename `.env.example` file to `.env` in the project folder.
- Run the command promt in the project directory.
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`
- Go to `http://localhost:8000/`

And the app will run.