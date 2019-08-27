<?php
include_once("../conexao/conexao.php");
require_once("navBar.html");

?>


<h1 style="text-align:center">Listagem de Produtos</h1>
<div style="margin-bottom: 15px;">
<div class="text-center">
        <button class="btn btn-info fa fa-plus-circle text-center" title="Adicionar novo cliente"
            onclick="javascript:location.href='cadProduto.php'"> Novo Produto</button>
    </div>
</div>


<div class="container">
    <table class="table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col" style="width: 140px">Quantidade</th>
                <th scope="col" colspan="2" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <form action="">

                <?php
               $pdo = banco::conectar(); 
               $sql = 'select * from produto order by nome';
               $lista = $pdo->query($sql); 
               banco::desconectar();
               foreach ($lista as $row){
            ?>
                <tr class="text-center">
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['nome'] ?></td>
                    <td><?php echo $row['descricao'] ?></td>
                    <td><?php echo $row['valor'] ?></td>
                    <td><?php echo $row['quantidade'] ?></td>
                    <td style="text-align:center">

                        <div>
                            <button type="button" id="btnEditar" name="btnEditar" class="btn btn-primary fa fa-refresh"
                                title="Editar dados"
                                onclick="javascript:location.href='edtProduto.php?id=' + <?php echo$row['id']?>">
                            </button>


                            <button type="button" id="btnExcluir" name="btnExcluir" class="btn btn-danger fa fa-times"
                                title="Excluir"
                                onclick="javascript:location.href='remProdutoBanco.php?id=' + <?php echo$row['id']?>">
                            </button>
                        </div>

                    </td>

                </tr>
                <?php }?>
            </form>
        </tbody>
    </table>