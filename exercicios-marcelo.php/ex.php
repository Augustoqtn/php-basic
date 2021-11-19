<?php
$people = [
    "Augusto" => [
        "nome" => "Augusto Brito",
        "cidade" => "Novo Hamburgo",
        "sexo" => "masculino",
        // caso queira testar, você pode comentar esta linha de baixo que mostra o telefone.
        "telefone" => false,

        "pai" => [
            "nome" => "Humberto",
            "cidade" => "Porto Alegre",
            "sexo" => "masculino",
            "telefone" => "1111111111",
        ],

        "mãe" => [
            "nome" => "Florinda",
            "cidade" => "Sapiranga",
            "sexo" => "feminino",
            "telefone" => "0000000000",
        ],
    ],
    "Marcelo" => [
        "nome" => "Marcelo Jacobus junior",
        "cidade" => "Estancia Velha",
        "sexo" => "indefinido",
        "telefone" => "51 995433321",

        "pai" => [
            "nome" => "Marcelo pai",
            "cidade" => "noia",
            "sexo" => "masculino",
            "telefone" => "2222222222222",
        ],

        "mãe" => [
            "nome" => "Florinda",
            "cidade" => "Sapiranga",
            "sexo" => "feminino",
            "telefone" => "3333333333333",
        ],
    ],
];

foreach ($people as $key => $info) {
    // $name = $people[$key]["nome"];
    $name = $info["nome"];
    $yourCity = $info["cidade"];
    $youFone = $info["telefone"];
    $father = $info["pai"]["nome"];
    $fatherCity = $info["pai"]["cidade"];
    $fatherFone = $info["mãe"]["telefone"];
    $mother = $info["mãe"]["nome"];
    $motherCity = $info["mãe"]["cidade"];
    $motherFone = $info["pai"]["telefone"];
    $allData = "Nome: $name    
    Sua cidade: $yourCity 
    Seu telefone: $youFone \n
    Nome do pai: $father 
    Cidade do pai: $fatherCity 
    Numero do pai: $fatherFone \n
    Nome da mãe: $mother 
    Cidade da mãe: $motherCity 
    Numero da mãe: $motherFone\n";


    if ($youFone == true) {
        echo "$allData\n";
    } else {
        echo "$allData\n";
    }
}
