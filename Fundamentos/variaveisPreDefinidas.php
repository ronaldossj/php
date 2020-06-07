<?php

//A variavel "nome" está recebendo um valor inteiro pelo metodo GET
//Valor está sendo convertido por "Cast"
$nome = (int)$_GET["a"];
$nome1 = (int)$_GET["b"];
$soma = $nome + $nome1;
echo $soma."<br>";

echo "<br>";
//Variavel "ip" está recebendo o ip do cliente (nesse caso ::1 por ser local host)
$ip = $_SERVER["REMOTE_ADDR"];

// Variavel "nomeScript" está recebendo nome do arquivo PHP
$nomeScript = $_SERVER["SCRIPT_NAME"];

echo $ip."<br>".$nomeScript;