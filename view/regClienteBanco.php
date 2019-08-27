<?php
include_once("../conexao/conexao.php");

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$status = true;


if($nome != "" && $sexo!= "" && $cpf != "")
{
    $pdo = banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cliente (nome, sexo, status, cpf) VALUES (?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $sexo, $status, $cpf));
    banco::desconectar();
    echo "entrou no if";
}
else
echo "nao entrou no if";

header("location: listClientes.php");

?>