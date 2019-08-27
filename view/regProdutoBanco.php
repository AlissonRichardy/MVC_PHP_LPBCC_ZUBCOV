<?php
include_once("../conexao/conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];


if($nome != "" && $descricao!= "" && $valor != "" && $quantidade != "")
{
    $pdo = banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO produto (nome, descricao, valor, quantidade) VALUES (?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $descricao, $valor, $quantidade));
    banco::desconectar();
    echo "entrou no if";
}
else
echo "nao entrou no if";

header("location: listProdutos.php");

?>