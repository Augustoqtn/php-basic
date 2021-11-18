<?php
$people = [
    "Augusto" => [
        "nome" => "Augusto Brito",
        "cidade" => "Novo Hamburgo",
        "sexo" => "masculino",
        // caso queira testar, você pode comentar esta linha de baixo que mostra o telefone.
        "telefone" => "",

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

    
    $phraseA = ("$name nasceu em $yourCity, seu pai é $father e sua mãe é $mother.
    Sua mãe nasceu em $cityMother e seu pai em $cityFather.
    E se quiser entar em contato com $name, basta ligar para: $fone.\n\n");

    $phraseB = ("$name nasceu em $yourCity, seu pai é $father e sua mãe é $mother.
    Sua mãe nasceu em $cityMother e seu pai em $cityFather.
    Infelizmente não temos o contato de $name!\n\n");


    if ($fone == true) {
        echo $phraseA;
    } else {
        echo $phraseB;
    }
}
