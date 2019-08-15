<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma</title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="js/abel.js"></script>  
</head>
<body>
    <form action="">
        <label for="number1">Número 1</label>
        <input type="number" id="num1" onkeydown="onlyNumbers(this)" placeholder="Primer número" required>
        <label for="number2">Número 2</label>
        <input type="number" id="num2" onkeydown="onlyNumbers(this)" placeholder="Segundo número" required>
        <button type="button" onClick="process(this)">Enviar</button>
        <button type="clear"> Limpiar</button>
    </form>
</body>
</html>