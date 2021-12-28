<?php

 include "funcoes-banco.php";

    $bankAccounts = [
        "account1" => [
            "name" => "Augusto",
            "value" => 1200,
            "cpf" => "03138442080"
        ],
        "account2" => [
            "name" => "Marcelo",
            "value" => 2400,
            "cpf" => "23443567890"
        ],
        "account3" => [
            "name" => "Ricardo",
            "value" => 3500,
            "cpf" => "02112344450"
        ],
    ];

    $account = drew($bankAccounts["account1"], 123);
    $bankAccounts["account1"] = $account;

    $account = drew($bankAccounts["account2"], 123);
    $bankAccounts["account2"] = $account;

    $account = desposit($bankAccounts["account3"],3000);
    $bankAccounts["account3"] = $account;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo</title>
</head>
<body>
    texxto aqui!
</body>
</html>