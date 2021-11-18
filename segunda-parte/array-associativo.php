<?php
$account1 = [
    'nome' => 'augusto',
    'peso' => 60
];

$account2 = [
    'nome' => 'ricardo',
    'peso' => 80
];

$account3 = [
    'nome' => 'aline',
    'peso' => 70
];

$account4 = [
    'nome' => 'verme',
    'peso' => 0
];

$allaccounts = [$account1, $account2, $account3, $account4];

for ($i = 0; $i < count($allaccounts); $i++) {
    $peso = $allaccounts[$i]['peso'];
    echo $allaccounts[$i]['nome'] . " tem $peso \"quilos\". para fazer uma nov linha no php use o. \n";
}

