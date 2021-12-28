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

   function desposit ($account,$depositAmount) {
       if ($depositAmount > 0) 
       {
           $account["value"] += $depositAmount;
       } else {
           echo "só pode depositar numeros positivos.";
       }   
       return $account;
   };