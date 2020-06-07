<?php 
for($idade = 1; $idade < 18; $idade++){
    echo $idade.PHP_EOL;
}
$ida = 1;
while($ida < 18){
    echo $ida.PHP_EOL;
    $ida++;
}


$endereco = array("Logradouro" => "Rua dos Alfeneiros", "numero" => 239, "local" => "Armario de vassouras");
$idade = [1, 2, "Banana", 4, 5, 6];

for($i = 0; $i < count($idade); $i++){
    echo $idade[$i].PHP_EOL;
}
$endereco = (object)$endereco;
var_dump($endereco);
foreach($endereco as $chave => $item){
    if(!is_int($item)){
       continue;
    }
    echo $chave.": ".$item.PHP_EOL;    
}

switch($ida){
    case 1:
    break;
    case 18:
    echo "Maior de idade";
    break;
    default:
    echo $ida;
    break;
}

try{
    throw new Exception('Divisão por zero.');
    
}catch(Exeption $erro){
    print_r("erro " .$erro->getMessage());
}