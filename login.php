
<?php


include ("conexao.php");

//


mysqli_connect('localhost', 'root', '') or die(mysqli_error());
mysqli_select_db($conn, 'projeto') or die(mysqli_error());

if(isset($_POST['EMAIL']) && isset($_POST['SENHA'])) {

$EMAIL = $_POST['EMAIL'];
$SENHA = $_POST['SENHA'];

$get = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$EMAIL' and senha = '$SENHA'");
$num = mysqli_num_rows($get);

if($num == 1) {
    while($percorrer = mysqli_fetch_array($get)) {
    $FUN_ADM = $percorrer['FUN_ADM'];
    $NOME = $percorrer['NOME'];

        session_start();

        if($FUN_ADM > 0 ){
            $_SESSION['FUN_ADM'] = $NOME;

        }else{
            echo 'Usuario não conectado';
        }

        echo '<script type="text/javascript">window.location ="funcionarios.php"</script>';

    }
}else {
    echo 'O email ou senha digitados estão errados.';
}

}

?>

