<?php

function realizarMudancas($cidade, $logradouro, $numero, $local){
    return array("Logradouro" => $logradouro, "numero" => $numero, "local" => $local, "cidade" => $cidade);
}

function verificaIdade ($idade = 17){
    if($idade >  18){
        echo "Sou maior de idade";
        return;
    }
        echo "Sou menor de idade";
}
function validaSexo ($Sexo = "Indefinido"){
    if($Sexo == "M"){
        echo "Sexo é masculino";
        die;
    }elseif($Sexo == "F"){
        echo "Sexo é Feminino";
        die;
    }elseif($Sexo == "Indefinido"){
        echo "Favor selecionar Sexo";
        die;
    }
        echo "Sexo Invalido".PHP_EOL;;
}
function escolhaCalculadora($OperandoA, $OperandoB, $opcao){
    switch($opcao){
        case 1:
            echo $OperandoA + $OperandoB.PHP_EOL;;
        break;
        case 2:
            echo $OperandoA - $OperandoB;
        break;
        case 3: 
            echo $OperandoA * $OperandoB;
        break;
        case 4:
            echo $OperandoA / $OperandoB;
        break;
        default:
            echo $OperandoA % $OperandoB;
        break;
    }
}
function formasGeometricas($formasGeometricas){
    foreach($formasGeometricas as $lado => $item){
        echo $lado." ".$item.PHP_EOL;
    }
}
function frutas($frutas){
    foreach($frutas as $item){
        echo $item.PHP_EOL;
    }
}