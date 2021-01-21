<?php

$servidor = "localhost";
$dbname = "banconovo";
$dbusuario = "root";
$dbsenha = "";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if(!$conn) {
    die("Conexao falhou" . mysqli_connect_error());
}

?>