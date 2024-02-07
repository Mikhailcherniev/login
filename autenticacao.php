<?php
$login=$_POST["login"];
$senha=$_POST["senha"];

    if ($login=='marcelo' && $senha==123){
        echo "Seja bem vindo ".$login;
    } else {
        echo "Senha e/ou Usuário incorretos.";
    }

?>