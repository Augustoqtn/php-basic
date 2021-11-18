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
        ],

        "mãe" => [
            "nome" => "Florinda",
            "cidade" => "Sapiranga",
            "sexo" => "feminino",
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
        ],

        "mãe" => [
            "nome" => "Florinda",
            "cidade" => "Sapiranga",
            "sexo" => "feminino",
        ],
    ],
];

foreach ($people as $key => $info) {
    // $name = $people[$key]["nome"];
    $name = $info["nome"];
    $yourCity = $info["cidade"];
    $father = $info["pai"]["nome"];
    $mother = $info["mãe"]["nome"];
    $cityFather = $info["pai"]["cidade"];
    $cityMother = $info["mãe"]["cidade"];
    $fone = $info["telefone"];

    $phraseA = "$name nasceu em $yourCity, seu pai é $father e sua mãe é $mother.
    Sua mãe nasceu em $cityMother e seu pai em $cityFather.\n";

    $phraseB = "$phraseA Infelizmente este contato não deixou seu numero.\n";

    $havePhone = "$phraseA O numero de telefone é: $fone.\n";

    if ($fone == true) {
        echo $havePhone;
    } else {
        echo $phraseB;
    }
}
