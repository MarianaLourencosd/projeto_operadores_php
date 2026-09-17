<?php

$n1 = (float) $_POST['n1'];
$n2 = (float) $_POST['n2'];

$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;
$modulo = $n1 % $n2;
$potencia = $n1 ** $n2;
$concatenacao = $n1.$n2;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="card"> 

    <h1>Operações Aritméticas</h1> 

    <h2>Resultados</h> 
    
    <hr> 

    <h3> <?php echo "$n1 + $n2 = $soma"?> </h3> 

    <h3> <?php echo "$n1 - $n2 = $subtracao"?> </h3> 

    <h3> <?php echo "$n1 x $n2 = $multiplicacao"?> </h3> 

    <h3> <?php echo "$n1 ÷ $n2 = ".number_format($divisao,2,',','.')?> </h3> 


    <h3> <?php echo "$n1 <sup> $n2 </sup> = ".number_format($potencia,2,',','.')?> </h3> 

    <h3> <?php echo "$n1 ** $n2 = $concatenacao"?> </h3> 

<a href="index.html">voltar</a>

    </div>

    </body>

</html>