<?php
$local = "localhost";
$usuario = "root"; 
$senha = ""; 
$banco = "infolindos"; 

$conexao = mysqli_connect($local,$usuario,$senha,$banco);

// Estrutura de código opcional

// header("Content-Type:text/html; charset=utf8"); // O utf8 define caracteres especiais no documento html
// mysqli_query($conexao, "SET NAMES 'utf8'"); // Query significa a tabela no BD
// mysqli_query($conexao, "SET character_set_connection = utf8");
// mysqli_query($conexao, "SET character_set_client = utf8");
// mysqli_query($conexao, "SET character_set_results = utf8");

/*
    Cada query tem uma particularidade: connection, cliente, results. Cada um se relacionará ao utf8 e por conta disso terá acesso aos caracteres especiais.
*/

?>