<?php
include_once("../conexao/conexao.php");

$id = trim($_GET['id']);


if($id != "")
{
    $pdo = banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM produto WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    banco::desconectar();
}

header("location: listProdutos.php");

?>