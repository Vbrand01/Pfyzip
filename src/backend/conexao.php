<?php

$servidor = "localhost";
$bd = "Victor";
$userBD = "root";
$passBD = "";

try
{
    $conn = new PDO("mysql:dbname=$bd;host=$servidor",$userBD,$passBD);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("set names utf8");

    $query = $conn->query('select * from Dados');

    $res = $query->fetchAll($conn::FETCH_ASSOC);

    var_dump($res);

}
catch(PDOException $e)
{
    echo "Erro: ".$e->getMessage();
}
?>