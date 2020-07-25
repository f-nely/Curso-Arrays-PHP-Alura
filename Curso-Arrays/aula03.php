<?php
namespace Alura;

$names = "Giovanni, João, Carla, Pedro";

$array_names = explode(", ", $names); // explode - Transform strings into arrays

foreach ($array_names as $name) {
    echo "<p>Olá $name</p>";
}

$namesJoin = implode(", ", $array_names); // implode - Transform array to string

echo $namesJoin;

