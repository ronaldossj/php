<?php

require_once("config.php");

unset($_SESSION['nome']);

if(isset($_SESSION['nome'])){
    echo $_SESSION['nome'];
    die;
}
echo "Não há nome definido";


//session_destroy();