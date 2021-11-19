<?php
$cars = [
    "economicos" => [
        "carro" => "palio",
        "marca" => "Fiat",
        "ano" => "2009",
        "kmpl" => 18,
    ],
    "meio-termo" => [
        "carro" => "polo",
        "marca" => "VW",
        "ano" => "2015",
        "kmpl" => 10,
    ],
    "não-econimicos" => [
        "carro" => "acordd",
        "marca" => "Honda",
        "ano" => "2020",
        "kmpl" => 5,
    ],
];

foreach ($cars as $key => $infoCar) {
    $table = $key;
    $carName = $infoCar["carro"];
    $carBrand = $infoCar["marca"];
    $carYear = $infoCar["ano"];
    $carExpenses = $infoCar["kmpl"];

    if ($carExpenses >= 15) {
        echo " o $carName é um carro econômico. Ele faz $carExpenses quilomentros por litro!\n";
    } else if ($carExpenses >= 10) {
        echo " o $carName é um carro meio termo. Ele faz $carExpenses quilomentros por litro!\n";
    } else if ($carExpenses <= 9) {
        echo " o $carName é um carroque gasta muito. Ele faz $carExpenses quilomentros por litro!\n";
    }
};
