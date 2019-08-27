<?php
include_once("../conexao/conexao.php");
require_once("navBar.html");


$id = trim($_GET['id']);
$pdo = banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM produto WHERE id=?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);
$nome = $data['nome'];
$descricao= $data['descricao'];
$valor = $data['valor'];
$quantidade = $data['quantidade'];
banco::desconectar();

?>
<title>EDITAR PRODUTO</title>


    <div class="container" style="margin-top: 30px;margin-bottom: 0px;">
        <form action="atuProdutosBanco.php" method="POST" name="atuProdutos" id="atuProdutos">
            <div class="jumbotron" style="width: 300px; margin: 0 auto;">
                <h1 class="title-impact text-center">EDITAR PRODUTO</h1>
                <div style="width: 150px; margin: 0 auto">
                    <input type="text" value="<?php echo $id ?>" hidden name="id">
                    <label for="" style="margin-left: 60px;">Nome</label>
                    <input type="text" placeholder="digite o nome" name="nome" value="<?php echo $nome; ?>">
                    <label for="" style="margin-left: 50px;">Descrição</label>
                    <input type="text" placeholder="digite o descricao" name="descricao" value="<?php echo $descricao; ?>">
                    <label for="" style="margin-left: 45px;">Quantidade</label>
                    <input type="number" placeholder="digite a quantidade" name="quantidade" value="<?php echo $quantidade; ?>">
                    <label for="" style="margin-left: 65px;">Valor</label>
                    <input type="number" placeholder="digite o valor" name="valor" value="<?php echo $valor; ?>">


                    <div style="width:200px;display:inline;">
                        <div style="margin: 0px auto; width:50px; margin-top: 15px;">
                            <button type="submit" class="btn btn-info fa fa-refresh" title="Atualizar"></button>
                            <button type="button" class="btn btn-danger fa fa-window-close" title="Cancelar"
                                style="margin-top:15px;" onclick="javascript:location.href='listProdutos.php'"></button>
                        </div>
                    </div>
                </div>
            </div>



        </form>

    </div>

</body>

</html>