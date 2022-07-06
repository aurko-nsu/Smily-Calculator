<template>
<form action="">
    <input type="text" name="number1" placeholder="Number One">
    <select name="operator" id="operator">
        <option value="" selected></option>
        <option value="+">&#128125;</option>
        <option value="-">&#128128;</option>
        <option value="*">&#128123;</option>
        <option value="/">&#128561;</option>
    </select>
    <input type="text" name="number2" placeholder="Number Two">
    <br>
    <button type="submit">Calculate</button>
</form>
</template>