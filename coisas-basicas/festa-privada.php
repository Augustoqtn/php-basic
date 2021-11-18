<?php


echo "seja bem vindo a festa,poderia me informar sua idade? \n ";

$age = 16;
$acomp = 1;
$autho = false;

if ($age >= 18) {
    echo "seja bem vindo amigo, tenha uma boa festa! \n";
} else if ($age == 17 && $acomp >= 2) {
    echo "sejam bem vindos amigos, tenham uma boa festa! \n";
}
if ($age <= 16 && $autho == true) {
    echo "sejam bem vindos amigos, tenham uma boa festa! \n";
} else {
    echo "infelizmente você não pode entrar!\n";
}
