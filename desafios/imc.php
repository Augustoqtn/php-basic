<?php
$height = 1.20;
$weight = 47;
$imc = $weight / ($height ** 2);
$word = "o resultado do seu IMC é $imc , isso quer dizer que você esta";

if ($imc <= 18.5) {
    echo "$word abaixo do peso. \n";
} else if ($imc >= 18.6 && $imc < 25) {
    echo "$word com o peso ideal. \n";
} else if ($imc >= 25 && $imc < 30) {
    echo "$word com sobrepeso. \n";
} else if ($imc >= 30 && $imc < 34.9) {
    echo "$word com obesidade grau 1. \n";
} else if ($imc >= 34.9 && $imc < 39.9) {
    echo "$word com obesidade grau 2. \n";
} else if ($imc >= 40) {
    echo "$word com obesidade grau 3. \n";
}