

<?php 
// php -S localhost:8000
require_once __DIR__."/funcoes.php";
$nome = "Ronaldo";
$idade = 23;
$endereco = array("Logradouro" => "Rua dos Alfeneiros", "numero" => 239, "local" => "Armario de vassouras");
CONST NACIONALIDADE = "Brasileiro";
echo "Olá meu nome é $nome, e tenho $idade anos de idade, e sou ". NACIONALIDADE;
echo PHP_EOL;
verificaIdade($idade);
echo PHP_EOL;
print_r($endereco['Logradouro']." ".$endereco['numero']." ".$endereco['local'].PHP_EOL);
// print_r($endereco);
$endereco['cidade'] = "Londres";

$endereco['Logradouro'] = "Avenida paulista";

$endereco = realizarMudancas("São paulo","Avenida Brigadeiro", "400", "Predio Amarelo" );

print_r($endereco);


$endereco = (object)$endereco;

print_r($endereco->numero);