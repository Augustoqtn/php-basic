<?php

$Weight = 80;
$age = 16;
$name = "Augusto";
$accompanied = 2;

echo "Olá $name, seja bem vindo,aqui você paga de acordo com seu peso!\n";


if ($Weight <= 70) {
    echo "como você tem menos de $Weight quilos,você pagará 59.90.\n";
}

if ($Weight >= 70) {
    echo "como você tem mais que $Weight quilos, você pagará 89.90.\n";
}

if ($age >= 18) {
    echo "vi aqui que você tem $Weight quilos e $age anos!, podera usar também nossa area vip.\n";
}


if ($age <= 17 && $accompanied >= 2) {
    echo "vi aqui que você é menor de idade, mas esta acompanhado, você pode usar a area vip.\n";
} 

else if ($age <= 17) {
    echo "humm, vi aqui que você é menor de idade...pode ficar a vontade no nosso restaurante, mas nossa area vip não é para você!\n";
}
