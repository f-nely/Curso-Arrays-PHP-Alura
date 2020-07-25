<?php
namespace Alura;

require_once 'autoload.php';



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

$maiores = ArraysUtils::encontrarPessoasComSaldoMaior(3000, $array_relacionados);

var_dump($maiores);
