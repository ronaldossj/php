<?php 

// Atribuição ' =, +=, -=, *=, /=, %= '
$nome = "Ronaldo";

echo $nome. " Serafim <br>";

echo $nome. " está programando <br>";

$valorTotal = 100;
echo $valorTotal -= 10;
echo "<br>";
echo $valorTotal *= 10;
echo "<br>";
echo $valorTotal /= 10;
echo "<br>";
echo $valorTotal %= 10;
echo "<br>";
echo $valorTotal += 10;
echo "<br>";

// Operador binario
$a = 10; $b = 2; $c = NULL;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b;
echo "<br>";

echo $a ** $b; // ** é potência
echo "<br>";

//Operador de comparação
var_dump($a == $b);
echo "<br>";

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

var_dump($a === $b);
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a !== $b);
echo "<br>";

/* Space Ship
 Se a for maior que b, o resultado será 1
 Se b for maior que a, o resultado será -1
 Se os dois forem iguais, o resultado será 0 */
var_dump($a <=> $b);
echo "<br>";

// Null Coalesce -- ignora a variavel nula e vai direto para a variavel com algum valor
echo $c ?? $a;
echo "<br>";

//Operador Unario
$valorTotal++;
echo " $valorTotal <br>";
echo ++$valorTotal;
echo "<br>";
$valorTotal--;
echo " $valorTotal <br>";