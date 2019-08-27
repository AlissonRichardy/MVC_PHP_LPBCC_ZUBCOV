<?php
include_once("../conexao/conexao.php");

    $id =   trim($_POST['id']);
    $nome = trim($_POST['nome']);
    $sexo = trim($_POST['sexo']);
    $cpf = trim($_POST['cpf']);

    if(!empty($id) && !empty($nome) && !empty($cpf)) {
        $pdo = banco::conectar();
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE cliente SET nome=?, sexo=?, cpf=? WHERE id=? ";
        $q = $pdo ->prepare($sql);
        $q->execute(array($nome,  $sexo, $cpf, $id));
        banco::desconectar();
        
       echo "entrou no if";
    }
    else
    echo "nao entrou no if";
    
header("location:listClientes.php");

?>