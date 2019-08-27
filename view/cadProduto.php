<?php
include_once("../conexao/conexao.php");
require_once("navBar.html")
?>


<div class="container" style="margin-top: 30px;margin-bottom: 0px;">
    <form action="regProdutoBanco.php" method="POST"  name="cadProduto" id="cadProduto">
        <div class="jumbotron" style="width: 300px; margin: 0 auto;">
            <h1  class="title-impact text-center">CADASTRO PRODUTO</h1>
            <div style="width: 150px; margin: 0 auto">
                <label for="" style="margin-left: 60px;">Nome</label>
                <input type="text" placeholder="digite o nome" name="nome">
                <label for="" style="margin-left: 60px;" >Descrição</label>
                <input type="text" placeholder="digite a descrição" name="descricao">
                <label for="" style="margin-left: 50px;" >Quantidade</label>
                <input type="number" placeholder="digite o Valor" name="quantidade">
                <label for="" style="margin-left: 60px;" >Valor</label>
                <input type="number" placeholder="digite o Valor" name="valor">
                

              

                <div style="width:200px;display:inline;">
                    <div style="margin: 0px auto; width:50px; margin-top: 15px;">
                        <button type="submit" class="btn btn-info fa fa-thumbs-up" title="Cadastrar"></button>
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