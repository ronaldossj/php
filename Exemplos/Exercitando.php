<?php
require_once __DIR__."/funcoes.php";
$Sexo = "";
ValidaSexo($Sexo);


$operandoA = 8;
$operandoB = 9;
$escolha = 1;

escolhaCalculadora($operandoA, $operandoB, $escolha);


$frutas = array("Banana", "Maça", "Laranja");
$formasGeometricas = array("Quatrolados" => "Quadrado", "Treslados" => "Triangulo", "Semlados" => "Circulo");
formasGeometricas($formasGeometricas);
frutas($frutas);


print_r($formasGeometricas['Quatrolados']." ".$formasGeometricas['Treslados']." ".$formasGeometricas['Semlados'].PHP_EOL);

$formasGeometricas = ((object)$formasGeometricas);
print_r($formasGeometricas->Quatrolados);

echo PHP_EOL;

echo ($operandoA > $operandoB) ? "A é Menor" : "B é Menor";