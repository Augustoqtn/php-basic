<?php

$letras = [
    'a' => [
        'b'  => 'abacuque',
        'c'  => 'acusado'
    ],
    'b' => [
        'a' => 'banana'
    ]
];

echo $letras['a']['b'];
echo $letras['a']['c']; 
echo $letras['b']['a'];