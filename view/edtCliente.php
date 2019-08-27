<?php
include_once("../conexao/conexao.php");
require_once("navBar.html");


$id = trim($_GET['id']);
$pdo = banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM cliente WHERE id=?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);
$nome = $data['nome'];
$sexo= $data['sexo'];
$cpf = $data['cpf'];
$status = $data['status'];
banco::desconectar();

?>



    <div class="container" style="margin-top: 30px;margin-bottom: 0px;">
        <form action="atuClienteBanco.php" method="POST" name="cadCliente" id="cadCliente">
            <div class="jumbotron" style="width: 300px; margin: 0 auto;">
                <h1 class="title-impact text-center">EDITAR CLIENTE</h1>
                <div style="width: 150px; margin: 0 auto">
                    <input type="text" value="<?php echo $id ?>" hidden name="id">
                    <label for="" style="margin-left: 60px;">Nome</label>
                    <input type="text" placeholder="digite o nome" name="nome" value="<?php echo $nome; ?>">
                    <label for="" style="margin-left: 60px;">CPF</label>
                    <input type="text" placeholder="digite o CPF" name="cpf" value="<?php echo $cpf; ?>">
                    <label for="" style="margin-left: 60px;">Sexo</label>

                    <select name="sexo" id="cEst" style="width: 185px" value="<?php echo $sexo; ?>">
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino" selected>Masculino</option>
                        <option value="ND">Nao definido</option>
                    </select>

                    <div style="width:200px;display:inline;">
                        <div style="margin: 0px auto; width:50px; margin-top: 15px;">
                            <button type="submit" class="btn btn-info fa fa-refresh" title="Atualizar"></button>
                            <button type="button" class="btn btn-danger fa fa-window-close" title="Cancelar"
                                style="margin-top:15px;" onclick="javascript:location.href='listClientes.php'"></button>
                        </div>
                    </div>
                </div>
            </div>



        </form>

    </div>

</body>

</html>