<?php

$servidor = "localhost";
$dbname = "bancoantigo";
$dbusuario = "root";
$dbsenha = "";
$conn2 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if(!$conn) {
    die("Conexao falhou" . mysqli_connect_error());
}

?>