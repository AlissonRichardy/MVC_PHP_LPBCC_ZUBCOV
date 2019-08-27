<?php
include_once("../conexao/conexao.php");
require_once("navBar.html")
?>



    <h1 style="text-align:center">Listagem de Clientes</h1>
    <div style="margin: 0 auto; width:350px; margin-bottom: 15px;">
        <div style="display:inline">
            <button class="btn btn-info fa fa-plus-circle" title="Adicionar novo cliente"
                onclick="javascript:location.href='cadCliente.php'"> Novo Cliente</button>
            <button class="btn btn-success fa fa-handshake-o" style="margin-left: 15px;"
                title="Cadastrar uma nova venda"> Cadastrar Nova Venda</button>
        </div>
    </div>


    <div class="container">
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <form action="">

                    <?php
               $pdo = banco::conectar(); 
               $sql = 'select * from cliente order by id';
               $lista = $pdo->query($sql); 
               banco::desconectar();
               foreach ($lista as $row){
            ?>
                    <tr class="text-center">
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['sexo'] ?></td>
                        <td><?php if($row['status']== 1) echo 'Ativo'; else echo 'Desativado' ?></td>
                        <td style="text-align:center">

                            <div>
                                <button type="button" id="btnEditar" name="btnEditar"
                                    class="btn btn-primary fa fa-refresh" title="Editar dados"
                                    onclick="javascript:location.href='edtCliente.php?id=' + <?php echo$row['id']?>">
                                </button>


                                <button type="button" id="btnExcluir" name="btnExcluir"
                                    class="btn btn-danger fa fa-times" title="Excluir"
                                    onclick="javascript:location.href='remClienteBanco.php?id=' + <?php echo$row['id']?>">
                                </button>
                            </div>

                        </td>

                    </tr>
                    <?php }?>
                </form>
            </tbody>
        </table>
    </div>

</body>