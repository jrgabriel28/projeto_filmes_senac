<?php include_once('usuario_pesquisar.php') ?>

<div class="container" mt-3>
    <div class="row mt-3">
        <div class="col-sm-12">
            <h1>Usuário</h1>
        </div>
    </div>
    <form action="" method="post" class="form-control">
        <div class="row mt-3">
            <div class="col-sm-2">
                <input type="number" class="form-control" min="0" name="txtid" placeholder="ID do Usuário"
                    value="<?= $idusuario ?>">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary" formaction="_sistema.php?tela=usuario">&#128269;</button>
                <!-- volte aqui quando o sistema estiver ok -->
            </div>
            <div class="row"></div>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="txtnome" placeholder="Nome do Usuário"
                    value="<?= $nomeusuario ?>">
            </div>
            <div class="col-sm-12">
                <input type="date" class="form-control" name="txtnascimento" placeholder="data de nascimento"
                    value="<?= substr($nascimentousuario, 0, 10) ?>">
            </div>

            <div class="col-sm-2">
                <input type="text" class="form-control" name="txtlogin" placeholder="Login do Usuário"
                    value="<?= $loginusuario ?>">
            </div>

            <div class="col-sm-2">
                <input type="password" class="form-control" name="txtsenha" placeholder="senha do Usuário"
                    value="<?= $senhausuario ?>">
            </div>

            <div class="row mt-3">
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="txtimg" id="txtimg" placeholder="Imagem do Usuário"
                        value="<?= $imagemusuario ?>">
                </div>
                <div class="col-sm-4">
                    <div>
                        <select name="txtstatus" id="txtstatus" class="form-control">
                            <option value="">--Selecione um Status</option>
                            <option value="Ativo" <?= ($statususuario == 'Ativo' ? 'selected' : "") ?>>Ativo</option>
                            <option value="Inativo" <?= ($statususuario == 'Inativo' ? 'selected' : "") ?>>Inativo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtobs" id="txtobs" row="5" class="form-control"
                        placeholder="Observação do Usuário"><?= $obsusuario ?></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <button name="btocadastrar" id="btocadastrar" class="btn btn-sucess"
                    formaction="usuario_cadastrar.php">cadastrar</button> <!----- coloque a tela para cadastrar aqui -->
                <button id="btnalterar" name="btnalterar" class="btn btn-secondary"
                    formaction="_sistema.php?tela=usuario">alterar</button> <!--volte aqui e insira uma tela-->
                <!-- <a href="##" name = "btolimpar" id= "btolimpar" class="btn btn-primary">Limpar</a> -->
                <button name="btoexcluir" id="btoexcluir" class="btn btn-info"
                    formaction="usuario_excluir.php">Excluir</button>
                <a href="_sistema.php?tela=usuario" name="btoLimpar" id="btoLimpar" class="btn btn-secundary">Limpar</a>
                <button name="btosair" id="btosair" class="btn btn-danger" formaction="_sistema.php?tela=nada">Sair</button>
            </div>
        </div>
    </form>
</div>