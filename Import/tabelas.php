<?php

include_once ("config.php");
include_once ("config2.php");

$result = mysqli_query($conn, "SELECT * FROM client");

$result2 = mysqli_query($conn2, "SELECT * FROM client");


?>


<!doctype html>

<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importação de dados</title>
    
    <link rel="stylesheet" href="style/style.css"/>
    <link rel="stylesheet" href="style/styletable.css"/>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@0,700;1,300&family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">


    <div>IMPORTAÇÃO DE DADOS</div>
    

  

</head>
<body>

<h1>TABELA ANTIGA</h1>
    
    <table  id = "tables" border = "1" cellspacing  = "5"> 
        <tr> 
          <td>ID</td> 
          <td>NOME</td> 
          <td>CPF</td> 
          <td>DATA DE NASCIMENTO</td> 
          <td>NUMERO DE TELEFONE</td> 
        </tr> 

        <?php while($conn2 = mysqli_fetch_array($result2)) { ?>

        <tr> 
          <td><?php echo $conn2['ID' ]; ?></td>
          <td><?php echo $conn2['NOME' ]; ?></td> 
          <td><?php echo $conn2['CPF' ]; ?></td> 
          <td><?php echo $conn2['DATA_NASCIMENTO' ]; ?></td>   
          <td><?php echo $conn2['NUMERO_TELEFONE' ]; ?></td> 
          <td> 
            <a id = "a" href="usu_editar.php?codigo=<?php echo $dado['ID']; ?>">Editar</a> 
            <a id = "a"  href="usu_excluir.php?codigo=<?php echo $dado['ID']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
    </table>

    <H1>TABELA NOVA</H1>
  
    <table  id = "dados" border = "1" cellspacing  = "5">
      
        <tr> 
          <td>ID</td> 
          <td>NOME</td> 
          <td>CPF</td> 
          <td>DATA DE NASCIMENTO</td> 
          <td>NUMERO DE TELEFONE</td> 
        </tr> 

        <?php 
        
        while($conn = mysqli_fetch_array($result)) { ?>

        <tr> 
          <td><?php echo $conn['ID' ]; ?></td>
          <td><?php echo $conn['NOME' ]; ?></td> 
          <td><?php echo $conn['CPF' ]; ?></td> 
          <td><?php echo date ("d/m/y", strtotime($conn['DATA_NASCIMENTO' ])); ?></td>   
          <td><?php echo $conn['NUMERO_TELEFONE' ]; ?></td> 
          <td> 
            <a href="usu_editar.php?codigo=<?php echo $dado['ID']; ?>">Editar</a> 
            <a href="usu_excluir.php?codigo=<?php echo $dado['ID']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } 

        ?>
    </table> 




    

    
      
</body>
</html>


