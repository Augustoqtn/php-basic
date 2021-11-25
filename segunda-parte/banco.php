<?php
    function printAccount($account)
    {
        // showMessage("CPF:$cpf NOME:$holder SALDO:$fund");
        echo "\nCPF:" . $account["cpf"] . "\nNOME:" . $account["name"] . "\nSALDO:" . $account["value"] . "\n";
    }

    function drew($account, $valorASacar)
    {
        if ($valorASacar > $account['value']) {
            echo "Você não pode sacar este valor";
        } else {
            $account['value'] -= $valorASacar;
        }
        return $account;
    }
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
            "name" => "Bruno",
            "value" => 3500,
            "cpf" => "02112344450"
        ],
    ];

    $account = drew($bankAccounts["account1"], 12);
    $bankAccounts["account1"] = $account;

    foreach ($bankAccounts as $info => $account) {
        printAccount($account);
    }
