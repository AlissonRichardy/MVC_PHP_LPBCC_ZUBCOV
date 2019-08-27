<?php
include_once("../conexao/conexao.php");

    $id =   trim($_POST['id']);
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $quantidade = trim($_POST['quantidade']);
    $valor = trim($_POST['valor']);

    if(!empty($id) && !empty($nome) && !empty($descricao) && !empty($valor)) {
        $pdo = banco::conectar();
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE produto SET nome=?, descricao=?, quantidade=?, valor=? WHERE id=? ";
        $q = $pdo ->prepare($sql);
        $q->execute(array($nome,  $descricao, $quantidade, $valor , $id));
        banco::desconectar();
        
    }
    
header("location:listProdutos.php");

?>