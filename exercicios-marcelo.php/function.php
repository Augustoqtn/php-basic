<?php
// exemplo:

// function diminuiEMultiplica($x, $y)
// {
//     return $x * $y;
// }
// $resultado = diminuiEMultiplica(5, 10);

// echo $resultado;

// exemplo 2 usando imc:
function calculaImc($peso, $altura)
{
    return $peso / $altura ** 2;
}
$resultadoImc = calculaImc(60, 1.70);
echo "$resultadoImc";
