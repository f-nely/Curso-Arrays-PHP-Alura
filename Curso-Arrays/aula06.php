<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$array_relacionados = array_combine($correntistas, $saldos);

$array_relacionados["nelynely"] = 3000;

echo "Arrays Associativo";

var_dump($array_relacionados);

if (array_key_exists("João", $array_relacionados)) {
    echo "O saldo do João é  {$array_relacionados["João"]}";
} else {
    echo "Não foi encontrado: ";
}
