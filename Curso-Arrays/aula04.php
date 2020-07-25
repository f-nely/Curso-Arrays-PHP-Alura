<?php
declare(strict_types=1);


namespace Alura;

require_once 'autoload.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];


ArraysUtils::remove("Luísa", $correntistas_e_compras);

var_dump($correntistas_e_compras);

// Type juggling