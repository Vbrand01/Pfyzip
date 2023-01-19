<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);

    extract($data);


    $sql = $conn->prepare("insert into Dados
			(
                nome_cliente,	
                sobrenome_cliente,	
                endereco_cliente,	
                cidade_cliente,	
			)
			values
			(
				:nome_cliente,
                :sobrenome_cliente,	
                :endereco_cliente,
                :cidade_cliente,	
			)");

    $sql->execute(array(

        ':nome_cliente' => $nome_cliente,
        ':sobrenome_cliente' => $sobrenome_cliente,
        ':endereco_cliente' => $endereco_cliente,
        ':cidade_cliente' => $cidade_cliente,

    ));

    //echo $sql->rowCount();
    if ($sql->rowCount() == 1) {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p>ID Gerado - " . $conn->lastInsertId() . "</p>";
    }
} else {

    header("Location:cadastro.php");
}

?>