<?php 

$conexao = mysql_connect("localhost", "root", "");
$banco = mysql_select_db("Victor");

$sql = mysql_query("SELECT * FROM Dados");

$i = 0;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$conexao->exec("set names utf8");


while($resposta = mysql_fetch_array($sql))
{
    $ret[$i]["id"]=$resposta['id'];
    $ret[$i]["nome"]=$resposta['nome'];
    $ret[$i]["sobrenome"]=$resposta['sobrenome'];
    $ret[$i]["endereco"]=$resposta['endereco'];
    $ret[$i]["cidade"]=$resposta['cidade'];
}

header("Content-type: application/json");
echo json_encode($ret)

?> 