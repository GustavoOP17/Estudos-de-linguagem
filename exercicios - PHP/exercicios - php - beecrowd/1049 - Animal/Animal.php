<?php 
$animais = [
    "vertebrado" => [
        "ave" => [ 
            "carnivoro" => "aguia",
            "onivoro" => "pomba"
        ],
        "mamifero" => [
            "onivoro" => "homem",
            "herbivoro" => "vaca"
        ]
    ],

    "invertebrado" => [
        "inseto" => [
            "hematofago" => "pulga",
            "herbivoro" => "lagarta"
        ], 
        "anelideo" => [
            "hematofago" => "sanguessuga",
            "onivoro" => "minhoca"
        ]
    ]
];

$subfilo = trim(fgets(STDIN));
$classe =  trim(fgets(STDIN));
$alimento =  trim(fgets(STDIN));

echo $animais[$subfilo][$classe][$alimento] . "\n";
?>


