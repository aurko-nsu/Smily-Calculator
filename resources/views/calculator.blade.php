<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/myCustom.css') }}">
    <title>Calculator</title>
</head>
<body>
    <div class="main_body">
        <form action="">
            <input type="text" name="number1" placeholder="Number One">
            <select name="operator" id="operator">
                <option value="" selected></option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="number2" placeholder="Number Two">
            <br>
            <button type="submit"></button>
        </form>
    </div>
</body>
</html>