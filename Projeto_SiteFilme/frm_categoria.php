<?php include_once('categoria_pesquisar.php') ?>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h1>Gerenciamento de Categorias</h1>
            </div>
        </div>
        <form action="" method="post">
        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="number" class="form-control" min="0" name="txtid" placeholder="ID da categoria" value="<?= $id_categoria?>">
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary" name="btopesquisar" id="btopesquisar" formaction="_sistema.php?tela=categoria">&#128269;</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Nome da categoria" value="<?= $nome_categoria?>">
            </div>
            <div class="col-sm-4">
                <select name="txtstatus" id="txtstatus" class="form-control">
                    <option value="">--Selecione um Status--</option>
                    <option value="ativo"<?=($status_categoria=='ativo'?'selected':"") ?>>Ativo</option>
                    <option value="inativo"<?=($status_categoria=='inativo'?'selected':"") ?>>Inativo</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <textarea name="txtdesc" id="txtdesc" rows="5" class="form-control" formaction="" placeholder="Descrição da categoria"><?=$desc_categoria?></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <textarea class="form-control" name="txtobs" id="txtobs" rows="5"  placeholder="Observações da categoria"><?=$obs_categoria?></textarea>
            </div>
        </div>
        <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="categoria_alterar.php">Alterar</button>
                    <a href="_sistema.php?tela=categoria" name="btoLimpar" id="btoLimpar" class="btn btn-secundary">Limpar</a>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="categoria_excluir.php">Excluir</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="_sistema.php?tela=nada">Sair</button>
                </div>
            </div>
        </form>
    </div>