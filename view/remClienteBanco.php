<?php
include_once("../conexao/conexao.php");

$id = trim($_GET['id']);


if($id != "")
{
    $pdo = banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM cliente WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    banco::desconectar();
    echo "entrou no if";
}
else
echo "nao entrou no if";

header("location: listClientes.php");

?>