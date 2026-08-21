<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form method="POST">

        <input type="number" placeholder="Digite o primeiro número: " name="num1">
        <br><br>
        <input type="number" placeholder="Digite o segundo número: " name="num2">
        <br>
        <h4>Escolha a operação</h4>
        <select name="operacao">
            <option value="soma">+ (Soma)</option>
            <option value="sub">- (Subtração)</option>
            <option value="div">/ (Divisão)</option>    
            <option value="mult">* (Multiplicação)</option>
        </select>
        <br><br>
        <button>=</button>
        <br><br>
    </form>

<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["operacao"];

if ($num1 == null || $num2 == null) {
    echo "Preencha os dois campos para poder realizar a operação!";
}

else {

if ($op == 'soma'){
    $som = $num1 + $num2;
    echo "Resultado da Operação: " . $som;
    }

else if ($op == 'sub'){
    $sub = $num1 - $num2;
    echo "Resultado da Operação: " .$sub;
    }

else if ($op == 'div'){
    $div = $num1 / $num2;
    echo "Resultado da Operação: " .$div;
    }

else if ($op == 'mul'){
    $mul = $num1 * $num2;
    echo "Resultado da Operação: " .$mul;
    }
}

?>

</body>
</html>