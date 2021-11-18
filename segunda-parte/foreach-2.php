<?php
$nome = [
    "Augusto pai" => [
        "nome" => "Humberto",
        "filhos" => "3",
        "telefone" => "nao consta."
    ],
    "Augusto mae" => [
        "nome" => "Florinda",
        "filhos" => "5",
        "telefone" => "991111001"
    ]
];

foreach ($nome["Augusto mae"] as $dados => $dadosp) {
    echo "$dados:$dadosp\n";
}
